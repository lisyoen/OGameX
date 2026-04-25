# i18n-ko P3.5 (047): facilities + admin/users 잔여 정리 — Skip Notes

## 작업 일시
2026-04-25

## 작업 대상 파일 (4개)

### 1. facilities/index.blade.php
- **상태**: 완료
- **변경 내용**:
  - wreck field (우주 도크) 관련 하드코딩된 문자열 14개를 `__('t_ingame.facilities_page.wreck_field.*')` 형태로 래핑
  - JS 템플릿 리터럴 내 문자열도 모두 Blade 템플릿 구문으로 래핑
- **주요 변경**:
  - "There is no wreckage at this position." → `__('t_ingame.facilities_page.wreck_field.no_wreckage')`
  - "Ships being repaired:" → `__('t_ingame.facilities_page.wreck_field.ships_being_repaired')`
  - "Space Dock" → `__('t_ingame.facilities_page.wreck_field.space_dock_title')`
  - "Collect" / "Details" → `__('t_ingame.facilities_page.wreck_field.collect')` / `.details`
  - "Leave to burn up" / "Start repairs" → `.leave_to_burn_up` / `.start_repairs`
  - confirm 다이얼로그 메시지 4개 (title, message, yes, no)
  - 툴팁 메시지 4개 (late_added_ships_warning, repairs_in_progress, no_ships_repaired, repairs_must_complete)

### 2. facilities/destroyrockets.blade.php
- **상태**: 변경 불필요
- **사유**: 이미 모든 문자열이 `__('t_ingame.facilities_destroy.*')` 형태로 래핑되어 있음
- **확인 내용**:
  - 라인 5, 6, 11, 12, 13, 17, 23, 30: 모든 사용자 대면 문자열 래핑 완료
  - JS 내 fadeBox 메시지도 모두 Blade 템플릿 구문으로 래핑됨

### 3. admin/users/index.blade.php
- **상태**: 변경 불필요
- **사유**: `@lang()` 방식 사용 중 (Laravel 기본 방식)
- **확인 내용**:
  - 라인 6, 11, 15, 21-28, 40-64, 84, 90-94: 모든 문자열이 `@lang('...')` 형태로 처리됨
  - 이 방식은 `__()` 함수와 동등하며, 템플릿 문맥상 더 적절한 선택

### 4. admin/users/show.blade.php
- **상태**: 변경 불필요
- **사유**: `@lang()` 방식 사용 중 (Laravel 기본 방식)
- **확인 내용**:
  - 라인 8, 13, 17, 22-141, 159-186: 모든 문자열이 `@lang('...')` 형태로 처리됨
  - JS confirm 메시지도 Blade 템플릿 구문으로 래핑됨

## lang 파일 변경 사항

### lang/en/t_ingame.php
- **추가 위치**: `facilities_page` 배열 내부
- **추가 키 개수**: 18개 (wreck_field 하위 배열)
- **구조**:
  ```php
  'facilities_page' => [
      // 기존 키 6개 유지
      'wreck_field' => [
          'no_wreckage' => '...',
          'wreckage_repairable' => '...',
          // ... 총 18개 키
      ],
  ],
  ```

### lang/ko/t_ingame.php
- **추가 위치**: `facilities_page` 배열 내부
- **추가 키 개수**: 18개 (wreck_field 하위 배열)
- **번역 품질**: 게임 맥락에 맞춘 자연스러운 한국어 (예: "수거", "소각", "우주 도크")

## 네임스페이스 정책

### facilities 네임스페이스
- **신설**: `t_ingame.facilities_page.wreck_field.*` (18개 키)
- **기존 유지**: `t_ingame.facilities_page.*` (6개 키)
- **기존 유지**: `t_ingame.facilities_destroy.*` (8개 키)

### admin.users 네임스페이스
- **변경 없음**: `@lang()` 방식으로 이미 처리됨, 별도 변환 불필요

## 통계

| 항목 | 개수 |
|------|------|
| 총 대상 파일 | 4 |
| 변경된 파일 | 1 (facilities/index.blade.php) |
| 변경 불필요 파일 | 3 |
| 신규 영문 키 | 18 |
| 신규 한글 번역 | 18 |
| wrapping한 문자열 | 14 (facilities/index.blade.php) |

## 특이사항

1. **JS 템플릿 리터럴 처리**:
   - facilities/index.blade.php의 대부분 문자열이 JS 템플릿 리터럴(`\`...\``) 내부에 있음
   - Blade 템플릿 구문(`{{ __('...') }}`)이 JS 문자열 내부에서도 정상 작동함

2. **중첩 네임스페이스**:
   - `facilities_page.wreck_field.*` 형태의 2단계 중첩 구조 사용
   - 이는 033-046에서 사용한 패턴과 일치

3. **@lang() vs __()**:
   - admin/users 파일들은 `@lang()` 사용
   - facilities 파일들은 `__()` 사용
   - 두 방식 모두 Laravel에서 지원하며 기능적으로 동등함

## 다음 단계 권장사항

1. **테스트**:
   - facilities 페이지 접속 후 우주 도크 기능 확인
   - 한국어/영어 전환 시 모든 문자열이 올바르게 표시되는지 확인
   - confirm 다이얼로그, 툴팁 메시지 정상 작동 확인

2. **관련 작업**:
   - 동일 패턴으로 다른 누락 페이지 처리 (있다면)
   - 전체 facilities 관련 기능 통합 테스트

## 비고

- facilities/index.blade.php는 1121줄의 대형 파일로, wreck field 관련 기능이 복잡한 JS 로직과 함께 구현되어 있음
- 모든 사용자 대면 문자열을 누락 없이 래핑하기 위해 세밀한 검토 수행
- admin/users 파일들은 028 단계에서 이미 처리되었으며, 잔여 작업 없음 확인됨
