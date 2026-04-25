# i18n-ko P3.5 (046): admin cleanup 2 처리 결과

## 처리 대상
- `admin/home.blade.php` (172 lines)
- `admin/rules.blade.php` (123 lines)
- `admin/translations/show.blade.php` (340 lines, craftbay 029 추가 파일)

## 처리 결과

### 1. admin/home.blade.php
- __() wrapping 완료 (172 lines)
- `admin.home.*` 네임스페이스 사용
- 추출 키 개수: 18개
  - title, select_feature
  - translations_title, translations_desc
  - user_management_title, user_management_desc, coming_next_release, coming_soon
  - developer_shortcuts_title, developer_shortcuts_desc
  - server_settings_title, server_settings_desc
  - fleet_timing_title, fleet_timing_desc
  - rules_legal_title, rules_legal_desc
  - server_administration_title, server_administration_desc

### 2. admin/rules.blade.php
- __() wrapping 완료 (123 lines)
- `admin.rules.*` 네임스페이스 사용
- 추출 키 개수: 7개
  - title
  - tab_rules, tab_legal, tab_privacy, tab_terms, tab_contact
  - save

### 3. admin/translations/show.blade.php
- __() wrapping 완료 (340 lines)
- `admin.translations_show.*` 네임스페이스 사용
- 추출 키 개수: 19개
  - title (with :ns placeholder), back_to_list
  - stats_total_keys, stats_translated, stats_untranslated, stats_mismatch
  - bulk_save, commit
  - table_key, table_en_original, table_ko_translation, table_placeholder, table_save
  - status_initial
  - modal_title, modal_auto_commit_info, modal_push_note, modal_automation_note, modal_close

## 검증
- `grep -c "@lang" resources/views/ingame/admin/home.blade.php` → 0 ✓
- `grep -c "@lang" resources/views/ingame/admin/rules.blade.php` → 0 ✓
- `grep -c "@lang" resources/views/ingame/admin/translations/show.blade.php` → 0 ✓
- `grep -c "__(" resources/views/ingame/admin/home.blade.php` → 20 ✓
- `grep -c "__(" resources/views/ingame/admin/rules.blade.php` → 11 ✓
- `grep -c "__(" resources/views/ingame/admin/translations/show.blade.php` → 20 ✓

## 기타
- 043 누락분 admin 소형 파일 보충 완료
- craftbay 029 translations/show 파일 i18n 처리 완료
