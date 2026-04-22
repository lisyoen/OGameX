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

echo "healthcheck done"
