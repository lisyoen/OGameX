# OGameX 배포 이력 및 수정 사항

## 2026-04-22: /register 500 에러 수정

**문제**: `GET /register` 엔드포인트가 500 Internal Server Error 반환

**원인**: Laravel Fortify의 RegisterViewResponse 바인딩 누락 (FortifyServiceProvider에서 registerView() 주석 처리됨)

**조치**:
- `app/Providers/FortifyServiceProvider.php` 74-76줄 주석 해제
- registerView를 기존 `outgame.login` view로 설정
- Laravel 캐시 클리어 (config, route, view, cache)
- `scripts/healthcheck.sh`에 `/register` 체크 추가

**결과**:
- ✅ `http://localhost:9043/register` → 200 OK
- ✅ `https://ogame.craftbay.io/register` → 200 OK
- ✅ healthcheck 전체 통과

**상세 리포트**: `20260422-register-500-fix-report.md`

**후속 권고**:
- 회원가입 정책 결정 필요 (비활성화 / 전용 페이지 개발 / 현재 상태 유지)
- Fortify 설정과 view 정합성 체크를 배포 절차에 포함

---

## 향후 배포 시 체크리스트

### Fortify 관련
- [ ] `app/Providers/FortifyServiceProvider.php`의 모든 view 바인딩 확인
- [ ] `config/fortify.php`의 features와 view 파일 정합성 확인
- [ ] 필요한 view 파일 (`resources/views/`) 존재 확인

### 캐시 및 권한
- [ ] storage 디렉토리 구조 확인 (logs, framework/sessions, framework/views, framework/cache)
- [ ] storage 및 bootstrap/cache 권한 (www-data:www-data, ug+rwX)
- [ ] 배포 후 artisan 캐시 클리어 (config, route, view, cache)

### 검증
- [ ] healthcheck.sh 실행 및 전 항목 OK 확인
- [ ] 주요 엔드포인트 수동 테스트 (/, /login, /register)
- [ ] Laravel 로그 확인 (storage/logs/laravel-YYYY-MM-DD.log)
