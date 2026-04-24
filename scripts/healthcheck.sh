#!/bin/bash
set -e
BASE_LOCAL="http://localhost:9043"
BASE_PUBLIC="https://ogame.craftbay.io"

pages=("/" "/login" "/register")

echo "=== local (9043) ==="
for p in "${pages[@]}"; do
  s=$(curl -s -o /dev/null -w "%{http_code}" --max-time 8 "$BASE_LOCAL$p")
  if [ "$s" -eq 200 ] || [ "$s" -eq 302 ] || [ "$s" -eq 301 ]; then
    echo "OK  $p: $s"
  else
    echo "FAIL $p: $s"
    exit 1
  fi
done

echo "=== public (cloudflare) ==="
for p in "${pages[@]}"; do
  s=$(curl -sk -o /dev/null -w "%{http_code}" --max-time 10 "$BASE_PUBLIC$p")
  if [ "$s" -eq 200 ] || [ "$s" -eq 302 ] || [ "$s" -eq 301 ]; then
    echo "OK  $p: $s"
  else
    echo "FAIL $p: $s (cloudflare 전파 지연일 수 있음)"
  fi
done
echo '=== regression guard: subscribeForm must NOT have legacy onsubmit ==='
body=$(curl -s "$BASE_PUBLIC/login")
if echo "$body" | grep -q 'onsubmit="changeAction'; then
  echo "FAIL: legacy changeAction onsubmit re-introduced"
  exit 1
else
  echo "OK: no legacy changeAction onsubmit"
fi

echo '=== regression guard: validationEngine allRules must have correct ajaxName structure ==='
if echo "$body" | grep -qE '"ajaxName":\s*\{[^}]*"alertText":[^}]*\}'; then
  echo "OK: ajaxName object has alertText inside"
elif echo "$body" | grep -qE '"ajaxName".*\},\s*"alertText":'; then
  echo "FAIL: ajaxName alertText is outside the object (006 regression)"
  exit 1
else
  echo "OK: ajaxName structure correct"
fi

echo '=== regression guard 007: allRules synchronous init ==='
if echo "$body" | grep -q 'allRules: __allRules' && echo "$body" | grep -q 'var __allRules'; then
  echo "OK: allRules initialized synchronously in IIFE"
else
  echo "FAIL: allRules is not synchronously initialized (007 regression)"
  exit 1
fi

echo '=== regression guard 012: lockLoginAction guard present ==='
if echo "$body" | grep -q 'lockLoginAction'; then
  echo "OK: lockLoginAction guard script found"
else
  echo "FAIL: lockLoginAction guard missing (012 regression)"
  exit 1
fi

echo "=== Real user account safeguard (016) ==="
DB_PWD=$(docker exec ogame-ogamex-app-1 sh -c 'grep ^DB_PASSWORD /var/www/.env | cut -d= -f2' 2>/dev/null || echo "")
if [ -n "$DB_PWD" ]; then
  REAL_USER_COUNT=$(docker exec ogame-ogamex-db-1 sh -c "echo \"SELECT COUNT(*) FROM users WHERE email='lisyoen@gmail.com';\" | mariadb -u ogamex -p'$DB_PWD' --skip-ssl ogamex -N" 2>/dev/null || echo "0")
  if [ "$REAL_USER_COUNT" -eq 0 ]; then
    echo "WARN: Real user account (lisyoen@gmail.com) missing - possible DB reset"
  else
    echo "OK: Real user account exists (count=$REAL_USER_COUNT)"
  fi
else
  echo "SKIP: Could not read DB_PASSWORD from .env"
fi

echo "=== P2 Language dropdown regression guard ==="
LANG_EN_KEYS=$(docker exec ogame-ogamex-app-1 php -r "echo implode(',', array_keys((include '/var/www/resources/lang/en/t_ingame.php')['options'] ?? []));" 2>/dev/null)
echo "$LANG_EN_KEYS" | grep -q 'tab_display_section_language' || { echo "FAIL: t_ingame.options.tab_display_section_language 키 누락"; exit 1; }
echo "$LANG_EN_KEYS" | grep -q 'language_select'  || { echo "FAIL: t_ingame.options.language_select 키 누락"; exit 1; }
LANG_KO_STATUS=$(curl -sk -o /dev/null -w "%{http_code}" "$BASE_PUBLIC/lang/ko")
case "$LANG_KO_STATUS" in
  302|200) echo "OK: /lang/ko -> $LANG_KO_STATUS" ;;
  *) echo "FAIL: /lang/ko unexpected $LANG_KO_STATUS"; exit 1 ;;
esac
echo "P2 language dropdown guard OK"

echo "=== P3.5 Outgame i18n meta tags regression guard ==="
# Blade 소스에서 __() 래핑 여부 확인 (렌더링 결과가 아닌 소스 코드 검사)
main_blade="/var/www/resources/views/outgame/layouts/main.blade.php"
if docker exec ogame-ogamex-app-1 grep -qE 'content="\{\{ __\(' "$main_blade"; then
  echo "OK: meta tags wrapped with __()"
else
  echo "FAIL: meta tags not wrapped with __() (P3.5 regression)"
  exit 1
fi

# Admin Users 라우트 회귀 가드 (028)
echo "=== Admin Users route regression guard (028) ==="
if docker exec ogame-ogamex-app-1 php artisan route:list --name=admin.users 2>/dev/null | grep -q "admin.users.index"; then
  echo "OK: route admin.users.index 등록됨"
else
  echo "FAIL: route admin.users.index 누락"
  exit 1
fi

# Admin Translations 라우트 회귀 가드 (029)
echo "=== Admin Translations route regression guard (029) ==="
if docker exec ogame-ogamex-app-1 php artisan route:list --name=admin.translations 2>/dev/null | grep -q "admin.translations.index"; then
  echo "OK: route admin.translations.index 등록됨"
else
  echo "FAIL: route admin.translations.index 누락"
  exit 1
fi

echo "=== P3.5 Ingame layouts i18n regression guard (034) ==="
# Blade 소스 기준 하드코딩 검사 (E2E는 JS 식별자 false-positive 회피 위해 소스 검사)
unwrapped=0
for f in resources/views/ingame/layouts/main.blade.php \
         resources/views/ingame/layouts/admin-menu.blade.php; do
  # 사용자 노출 위치에 남은 영문 단어 패턴
  # - >Word< 형태 (태그 텍스트 노드)
  # - title="Word ...", alt="Word ...", placeholder="Word ..."
  # 단, 번역 디렉티브가 인접한 경우는 제외
  cnt=$(grep -cE '>(Home|Users|Translations|Server admin|Developer shortcuts|Server settings|Fleet Timing|Rules & Legal|Server Administration)<' "$f" 2>/dev/null || true)
  if [ "$cnt" -gt 0 ]; then
    echo "INGAME_LAYOUTS_I18N_REGRESSION: $f has $cnt unwrapped strings"
    unwrapped=$((unwrapped + cnt))
  fi
done
[ "$unwrapped" -eq 0 ] && echo "OK: ingame layouts wrapping guard passed" || exit 1

echo "=== P3.5 Ingame overview/resources i18n regression guard (035) ==="
unwrapped=0
for f in resources/views/ingame/resources/settings.blade.php; do
  # 가드 단어 목록: 화면 노출 빈도 높은 영문 키워드
  # Events는 하드코딩이 가장 명확한 키워드
  cnt=$(grep -cE '>Events[[:space:]]*<' "$f" 2>/dev/null || true)
  if [ "$cnt" -gt 0 ]; then
    echo "INGAME_RESOURCES_I18N_REGRESSION: $f has $cnt unwrapped 'Events' strings"
    unwrapped=$((unwrapped + cnt))
  fi
done
[ "$unwrapped" -eq 0 ] && echo "OK: ingame overview/resources wrapping guard passed" || exit 1

echo "healthcheck done"
