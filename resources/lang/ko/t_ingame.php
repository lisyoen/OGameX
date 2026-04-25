<?php
// i18n-ko Phase 3: All values translated to Korean (2026-04-23)

return [
    // -------------------------------------------------------------------------
    // Overview page
    // -------------------------------------------------------------------------

    'overview' => [
        // Planet stats panel (typewriter animation)
        'diameter'             => '직경',
        'temperature'          => '온도',
        'position'             => '위치',
        'points'               => '점수',
        'honour_points'        => '명예 점수',
        'score_place'          => '순위',
        'score_of'             => '/',

        // Page / section headings
        'page_title'           => '현황',
        'buildings'            => '건물',
        'research'             => '연구',

        // Planet header buttons
        'switch_to_moon'       => '달로 전환',
        'switch_to_planet'     => '행성으로 전환',
        'abandon_rename'       => '포기/이름 변경',
        'abandon_rename_title' => '행성 포기/이름 변경',
    ],

    // -------------------------------------------------------------------------
    // Planet relocation / planet move
    // -------------------------------------------------------------------------

    'planet_move' => [
        'resettle_title' => '행성 이주',
        'cancel_confirm' => '행성 이주를 취소하시겠습니까? 예약된 위치가 해제됩니다.',
        'cancel_success' => '행성 이주가 성공적으로 취소되었습니다.',
        'blockers_title' => '다음 사항들이 현재 행성 이주를 방해하고 있습니다:',
        'no_blockers'    => '이제 행성의 계획된 이주를 방해할 것이 없습니다.',
        'cooldown_title' => '다음 이주 가능 시간까지',
        'to_galaxy'      => '목표 은하',
        'relocate'       => '이주',
        'cancel'         => '취소',
        'explanation'    => '이주 기능을 사용하면 행성을 원하는 먼 시스템의 다른 위치로 이동할 수 있습니다.<br /><br />실제 이주는 활성화 후 24시간 후에 진행됩니다. 이 시간 동안 행성을 정상적으로 사용할 수 있습니다. 카운트다운이 이주까지 남은 시간을 표시합니다.<br /><br />카운트다운이 종료되고 행성이 이동할 때, 그곳에 주둔한 함대는 활성 상태여서는 안 됩니다. 이 시점에 건설, 수리, 연구 중인 것이 없어야 합니다. 카운트다운 만료 시 건설 작업, 수리 작업 또는 함대가 여전히 활성 상태이면 이주가 취소됩니다.<br /><br />이주가 성공하면 240,000 암흑물질이 청구됩니다. 행성, 건물 및 저장된 자원(달 포함)이 즉시 이동됩니다. 함대는 가장 느린 함선의 속도로 새 좌표로 자동 이동합니다. 이주된 달의 점프 게이트는 24시간 동안 비활성화됩니다.',
    ],

    // -------------------------------------------------------------------------
    // Shared UI strings (buttons, dialog labels)
    // -------------------------------------------------------------------------

    'shared' => [
        'caution' => '주의',
        'yes'     => '예',
        'no'      => '아니오',
        'error'   => '오류',
    ],

    // -------------------------------------------------------------------------
    // Shared building page strings (resources, facilities, research, shipyard, defense)
    // -------------------------------------------------------------------------

    'buildings' => [
        // Building icon status tooltips
        'under_construction'     => '건설 중',
        'vacation_mode_error'    => '오류, 플레이어가 휴가 모드입니다',
        'requirements_not_met'   => '요구 사항이 충족되지 않았습니다!',
        'wrong_class'            => '이 건물에 필요한 캐릭터 클래스가 없습니다.',
        'wrong_class_general'    => '이 함선을 건조하려면 장군 클래스를 선택해야 합니다.',
        'wrong_class_collector'  => '이 함선을 건조하려면 수집가 클래스를 선택해야 합니다.',
        'wrong_class_discoverer' => '이 함선을 건조하려면 탐험가 클래스를 선택해야 합니다.',
        'no_moon_building'       => "달에는 해당 건물을 건설할 수 없습니다!",
        'not_enough_resources'   => '자원이 부족합니다!',
        'queue_full'             => '대기열이 가득 찼습니다',
        'not_enough_fields'      => '필드가 부족합니다!',
        'shipyard_busy'          => '조선소가 아직 사용 중입니다',
        'research_in_progress'   => '연구가 현재 진행 중입니다!',
        'research_lab_expanding' => '연구소가 확장 중입니다.',
        'shipyard_upgrading'     => '조선소가 업그레이드 중입니다.',
        'nanite_upgrading'       => '나노 공장이 업그레이드 중입니다.',
        'max_amount_reached'     => '최대 수량에 도달했습니다!',
        // Expand upgrade button (named params: :title, :level)
        'expand_button'          => ':title을(를) 레벨 :level(으)로 확장',
        // JS loca object strings
        'loca_notice'            => '참고',
        'loca_demolish'          => 'TECHNOLOGY_NAME을(를) 정말 1레벨 다운그레이드하시겠습니까?',
        'loca_lifeform_cap'      => '하나 이상의 관련 보너스가 이미 최대치에 도달했습니다. 그래도 건설을 계속하시겠습니까?',
        'last_inquiry_error'     => '마지막 작업을 처리할 수 없습니다. 다시 시도하십시오.',
        'planet_move_warning'    => '주의! 이 임무는 이주 기간이 시작될 때 여전히 실행 중일 수 있으며, 이 경우 프로세스가 취소됩니다. 정말 이 작업을 계속하시겠습니까?',
    ],

    // -------------------------------------------------------------------------
    // Resources page (mines / storage buildings)
    // -------------------------------------------------------------------------

    'resources_page' => [
        'page_title'    => '자원',
        'settings_link' => '자원 설정',
        'section_title' => '자원 건물',
    ],

    // -------------------------------------------------------------------------
    // Facilities page
    // -------------------------------------------------------------------------

    'facilities_page' => [
        'page_title'     => '시설',
        'section_title'  => '시설 건물',
        'use_jump_gate'  => '점프 게이트 사용',
        'jump_gate'      => '점프 게이트',
        'alliance_depot' => '동맹 저장소',
        'burn_confirm'   => '이 잔해 필드를 소각하시겠습니까? 이 작업은 되돌릴 수 없습니다.',
    ],

    // -------------------------------------------------------------------------
    // Research page
    // -------------------------------------------------------------------------

    'research_page' => [
        'basic'    => '기초 연구',
        'drive'    => '추진 연구',
        'advanced' => '고급 연구',
        'combat'   => '전투 연구',
    ],

    // -------------------------------------------------------------------------
    // Shipyard page
    // -------------------------------------------------------------------------

    'shipyard_page' => [
        'battleships' => '전투함',
        'civil_ships' => '민간 함선',
    ],

    // -------------------------------------------------------------------------
    // Defense page
    // -------------------------------------------------------------------------

    'defense_page' => [
        'page_title'    => '방어',
        'section_title' => '방어 시설',
    ],

    // -------------------------------------------------------------------------
    // Resource settings page
    // -------------------------------------------------------------------------

    'resource_settings' => [
        'production_factor'  => '생산 계수',
        'recalculate'        => '재계산',
        'metal'              => '금속',
        'crystal'            => '크리스탈',
        'deuterium'          => '중수소',
        'energy'             => '에너지',
        'basic_income'       => '기본 수입',
        'level'              => '레벨',
        'number'             => '수량:',
        'items'              => '아이템',
        'geologist'          => '지질학자',
        'mine_production'    => '광산 생산량',
        'engineer'           => '엔지니어',
        'energy_production'  => '에너지 생산량',
        'character_class'    => '캐릭터 클래스',
        'commanding_staff'   => '사령부 직원',
        'storage_capacity'   => '저장 용량',
        'total_per_hour'     => '시간당 총합:',
        'total_per_day'      => '일일 총합',
        'total_per_week'     => '주간 총합:',
        'events'             => '이벤트',
    ],

    // -------------------------------------------------------------------------
    // Destroy rockets dialog (facilities page)
    // -------------------------------------------------------------------------

    'facilities_destroy' => [
        'silo_description'  => '미사일 사일로는 행성간 미사일과 대탄도 미사일을 건설, 저장 및 발사하는 데 사용됩니다. 사일로 레벨마다 행성간 미사일 5개 또는 대탄도 미사일 10개를 저장할 수 있습니다. 행성간 미사일 1개는 대탄도 미사일 2개와 동일한 공간을 사용합니다. 동일한 사일로에 두 종류의 미사일을 함께 저장할 수 있습니다.',
        'silo_capacity'     => '레벨 :level 미사일 사일로는 행성간 미사일 :ipm개 또는 대탄도 미사일 :abm개를 보유할 수 있습니다.',
        'type'              => '유형',
        'number'            => '수량',
        'tear_down'         => '철거',
        'proceed'           => '진행',
        'enter_minimum'     => '파괴할 미사일을 최소 1개 이상 입력하십시오',
        'not_enough_abm'    => '대탄도 미사일이 그만큼 없습니다',
        'not_enough_ipm'    => '행성간 미사일이 그만큼 없습니다',
        'destroyed_success' => '미사일이 성공적으로 파괴되었습니다',
        'destroy_failed'    => '미사일 파괴에 실패했습니다',
        'error'             => '오류가 발생했습니다. 다시 시도하십시오.',
    ],

    // -------------------------------------------------------------------------
    // Fleet pages (dispatch + movement)
    // -------------------------------------------------------------------------

    'fleet' => [
        // Page / step headers
        'dispatch_1_title'         => '함대 파견 I',
        'dispatch_2_title'         => '함대 파견 II',
        'dispatch_3_title'         => '함대 파견 III',
        'movement_title'           => '함대 이동',
        'to_movement'              => '함대 이동으로',

        // Status bar
        'fleets'                   => '함대',
        'expeditions'              => '원정',
        'reload'                   => '새로고침',
        'clock'                    => '시계',
        'load_dots'                => '로딩...',
        'never'                    => '없음',

        // Fleet slot info
        'tooltip_slots'            => '사용 중/전체 함대 슬롯',
        'no_free_slots'            => '사용 가능한 함대 슬롯이 없습니다',
        'tooltip_exp_slots'        => '사용 중/전체 원정 슬롯',
        'market_slots'             => '제안',
        'tooltip_market_slots'     => '사용 중/전체 거래 함대',

        // Warning / impossible states
        'fleet_dispatch'           => '함대 파견',
        'dispatch_impossible'      => '함대 파견 불가능',
        'no_ships'                 => '이 행성에 함선이 없습니다.',
        'in_combat'                => '함대가 현재 전투 중입니다.',
        'vacation_error'           => '휴가 모드에서는 함대를 보낼 수 없습니다!',
        'not_enough_deuterium'     => '중수소가 부족합니다!',
        'no_target'                => '유효한 목표를 선택해야 합니다.',
        'cannot_send_to_target'    => '이 목표로 함대를 보낼 수 없습니다.',
        'cannot_start_mission'     => '이 임무를 시작할 수 없습니다.',

        // Status bar labels (no trailing colon — add : in template where needed)
        'mission_label'            => '임무',
        'target_label'             => '목표',
        'player_name_label'        => "플레이어 이름",
        'no_selection'             => '선택된 것이 없습니다',
        'no_mission_selected'      => '임무가 선택되지 않았습니다!',

        // Step 1 – ship selection
        'combat_ships'             => '전투 함선',
        'civil_ships'              => '민간 함선',
        'standard_fleets'          => '표준 함대',
        'edit_standard_fleets'     => '표준 함대 편집',
        'select_all_ships'         => '모든 함선 선택',
        'reset_choice'             => '선택 초기화',
        'api_data'                 => '이 데이터는 호환되는 전투 시뮬레이터에 입력할 수 있습니다:',
        'tactical_retreat'         => '전술적 후퇴',
        'tactical_retreat_tooltip' => '전술적 후퇴당 중수소 사용량 표시',
        'continue'                 => '계속',
        'back'                     => '뒤로',

        // Step 2 – destination
        'origin'                   => '출발지',
        'destination'              => '목적지',
        'planet'                   => '행성',
        'moon'                     => '달',
        'coordinates'              => '좌표',
        'distance'                 => '거리',
        'debris_field'             => '잔해 필드',
        'debris_field_lower'       => '잔해 필드',
        'shortcuts'                => '바로가기',
        'combat_forces'            => '전투 병력',
        'player_label'             => '플레이어',
        'player_name'              => "플레이어 이름",

        // Step 3 – mission selection
        'select_mission'           => '목표에 대한 임무 선택',
        'bashing_disabled'         => '목표에 대한 공격이 너무 많아 공격 임무가 비활성화되었습니다.',

        // Mission names
        'mission_expedition'       => '원정',
        'mission_colonise'         => '개척',
        'mission_recycle'          => '잔해 필드 재활용',
        'mission_transport'        => '운송',
        'mission_deploy'           => '배치',
        'mission_espionage'        => '첩보',
        'mission_acs_defend'       => 'ACS 방어',
        'mission_attack'           => '공격',
        'mission_acs_attack'       => 'ACS 공격',
        'mission_destroy_moon'     => '달 파괴',

        // Mission descriptions
        'desc_attack'              => '상대의 함대와 방어를 공격합니다.',
        'desc_acs_attack'          => '강력한 플레이어가 ACS를 통해 참여하면 명예로운 전투가 불명예스러운 전투가 될 수 있습니다. 공격자의 총 군사 점수 합계와 방어자의 총 군사 점수 합계 비교가 여기서 결정적인 요소입니다.',
        'desc_transport'           => '자원을 다른 행성으로 운송합니다.',
        'desc_deploy'              => '함대를 제국의 다른 행성으로 영구적으로 보냅니다.',
        'desc_acs_defend'          => '팀원의 행성을 방어합니다.',
        'desc_espionage'           => '외계 황제의 세계를 정찰합니다.',
        'desc_colonise'            => '새로운 행성을 개척합니다.',
        'desc_recycle'             => '재활용선을 잔해 필드로 보내 떠다니는 자원을 수집합니다.',
        'desc_destroy_moon'        => '적의 달을 파괴합니다.',
        'desc_expedition'          => '함선을 우주의 가장 먼 곳으로 보내 흥미진진한 퀘스트를 완료합니다.',

        // ACS Attack – federation overlay
        'fleet_union'              => '함대 연합',
        'union_created'            => '함대 연합이 성공적으로 생성되었습니다.',
        'union_edited'             => '함대 연합이 성공적으로 편집되었습니다.',
        'err_union_max_fleets'     => '최대 16개의 함대가 공격할 수 있습니다.',
        'err_union_max_players'    => '최대 5명의 플레이어가 공격할 수 있습니다.',
        'err_union_too_slow'        => '이 함대에 합류하기에는 너무 느립니다.',
        'err_union_target_mismatch' => '함대는 함대 연합과 동일한 위치를 목표로 해야 합니다.',
        'union_name'               => '연합 이름',
        'buddy_list'               => '친구 목록',
        'buddy_list_loading'       => '로딩 중...',
        'buddy_list_empty'         => '사용 가능한 친구가 없습니다',
        'buddy_list_error'         => '친구 로드 실패',
        'search_user'              => '사용자 검색',
        'search'                   => '검색',
        'union_user'               => '연합 사용자',
        'invite'                   => '초대',
        'kick'                     => '추방',
        'ok'                       => '확인',
        'own_fleet'                => '자신의 함대',

        // Briefing section (no trailing colons — add : in template where needed)
        'briefing'                 => '브리핑',
        'load_resources'           => '자원 적재',
        'load_all_resources'       => '모든 자원 적재',
        'all_resources'            => '모든 자원',
        'flight_duration'          => '비행 시간 (편도)',
        'federation_duration'      => '비행 시간 (함대 연합)',
        'arrival'                  => '도착',
        'return_trip'              => '귀환',
        'speed'                    => '속도:',
        'max_abbr'                 => '최대',
        'hour_abbr'                => '시간',
        'deuterium_consumption'    => '중수소 소비',
        'empty_cargobays'          => '빈 화물칸',
        'hold_time'                => '대기 시간',
        'expedition_duration'      => '원정 기간',
        'cargo_bay'                => '화물칸',
        'cargo_space'              => '사용 가능 공간 / 최대 화물 공간',
        'send_fleet'               => '함대 보내기',
        'retreat_on_defender'      => '방어자 후퇴 시 귀환',
        'retreat_tooltip'          => '이 옵션이 활성화되면 상대가 도망칠 경우 함대도 전투 없이 철수합니다.',
        'plunder_food'             => '식량 약탈',

        // Resources labels (for loca object)
        'metal'                    => '금속',
        'crystal'                  => '크리스탈',
        'deuterium'                => '중수소',

        // Movement page
        'fleet_details'            => '함대 세부 정보',
        'ships'                    => '함선',
        'shipment'                 => '화물',
        'recall'                   => '귀환',
        'start_time'               => '출발 시간',
        'time_of_arrival'          => '도착 시간',
        'deep_space'               => '우주 깊은 곳',

        // Target / player status indicators
        'uninhabited_planet'       => '무인 행성',
        'no_debris_field'          => '잔해 필드 없음',
        'player_vacation'          => '플레이어가 휴가 모드입니다',
        'admin_gm'                 => '관리자 또는 GM',
        'noob_protection'          => '초보자 보호',
        'player_too_strong'        => '플레이어가 너무 강해서 이 행성을 공격할 수 없습니다!',
        'no_moon'                  => '사용 가능한 달이 없습니다.',
        'no_recycler'              => '사용 가능한 재활용선이 없습니다.',
        'no_events'                => '현재 실행 중인 이벤트가 없습니다.',
        'planet_already_reserved'  => '이 행성은 이미 이주를 위해 예약되었습니다.',
        'max_planet_warning'       => '주의! 현재 더 이상 행성을 개척할 수 없습니다. 새로운 식민지마다 천체물리학 연구 2레벨이 필요합니다. 그래도 함대를 보내시겠습니까?',

        // Galaxy / network
        'empty_systems'            => '빈 시스템',
        'inactive_systems'         => '비활성 시스템',
        'network_on'               => '켜짐',
        'network_off'              => '꺼짐',

        // Error codes (used in errorCodeMap)
        'err_generic'              => '오류가 발생했습니다',
        'err_no_moon'              => '오류, 달이 없습니다',
        'err_newbie_protection'    => "오류, 초보자 보호로 인해 플레이어에게 접근할 수 없습니다",
        'err_too_strong'           => '플레이어가 너무 강해서 공격할 수 없습니다',
        'err_vacation_mode'        => '오류, 플레이어가 휴가 모드입니다',
        'err_own_vacation'         => '휴가 모드에서는 함대를 보낼 수 없습니다!',
        'err_not_enough_ships'     => '오류, 사용 가능한 함선이 부족합니다, 최대 수량 전송:',
        'err_no_ships'             => '오류, 사용 가능한 함선이 없습니다',
        'err_no_slots'             => '오류, 사용 가능한 함대 슬롯이 없습니다',
        'err_no_deuterium'         => "오류, 중수소가 부족합니다",
        'err_no_planet'            => '오류, 그곳에 행성이 없습니다',
        'err_no_cargo'             => '오류, 화물 용량이 부족합니다',
        'err_multi_alarm'          => '다중 경보',
        'err_attack_ban'           => '공격 금지',
    ],

    // -------------------------------------------------------------------------
    // Galaxy page
    // -------------------------------------------------------------------------

    'galaxy' => [
        // Vacation mode
        'vacation_error'               => '휴가 모드에서는 은하 보기를 사용할 수 없습니다!',

        // Navigation / header
        'system'                       => '시스템',
        'go'                           => '이동!',

        // System action buttons
        'system_phalanx'               => '시스템 팔랑스',
        'system_espionage'             => '시스템 첩보',
        'discoveries'                  => '발견',
        'discoveries_tooltip'          => '가능한 모든 위치에 발견 임무 시작',

        // Header stats row labels
        'probes_short'                 => '정찰기',
        'recycler_short'               => '재활용선',
        'ipm_short'                    => '행성간 미사일',
        'used_slots'                   => '사용 중인 슬롯',

        // Table header columns
        'planet_col'                   => '행성',
        'name_col'                     => '이름',
        'moon_col'                     => '달',
        'debris_short'                 => 'DF',
        'player_status'                => '플레이어 (상태)',
        'alliance'                     => '동맹',
        'action'                       => '행동',

        // Expedition / deep space row
        'planets_colonized'            => '개척된 행성',
        'expedition_fleet'             => '원정 함대',
        'admiral_needed'               => '이 기능을 사용하려면 제독이 필요합니다.',
        'send'                         => '보내기',

        // Legend tooltip
        'legend'                       => '범례',
        'status_admin_abbr'            => 'A',
        'legend_admin'                 => '관리자',
        'status_strong_abbr'           => 's',
        'legend_strong'                => '더 강한 플레이어',
        'status_noob_abbr'             => 'n',
        'legend_noob'                  => '더 약한 플레이어 (초보자)',
        'status_outlaw_abbr'           => 'o',
        'legend_outlaw'                => '무법자 (임시)',
        'status_vacation_abbr'         => 'v',
        'vacation_mode'                => '휴가 모드',
        'status_banned_abbr'           => 'b',
        'legend_banned'                => '정지됨',
        'status_inactive_abbr'         => 'i',
        'legend_inactive_7'            => '7일 비활성',
        'status_longinactive_abbr'     => 'I',
        'legend_inactive_28'           => '28일 비활성',
        'status_honorable_abbr'        => 'hp',
        'legend_honorable'             => '명예로운 목표',

        // loca JS object (unique galaxy strings)
        'phalanx_restricted'           => '시스템 팔랑스는 동맹 클래스 연구자만 사용할 수 있습니다!',
        'astro_required'               => '먼저 천체물리학을 연구해야 합니다.',
        'galaxy_nav'                   => '은하',
        'activity'                     => '활동',
        'no_action'                    => '사용 가능한 행동이 없습니다.',
        'time_minute_abbr'             => '분',
        'moon_diameter_km'             => '달의 직경 (km)',
        'km'                           => 'km',
        'pathfinders_needed'           => '필요한 패스파인더',
        'recyclers_needed'             => '필요한 재활용선',
        'mine_debris'                  => '채굴',
        'phalanx_no_deut'              => '팔랑스를 배치하기에 중수소가 부족합니다.',
        'use_phalanx'                  => '팔랑스 사용',
        'colonize_error'               => '개척선 없이는 행성을 개척할 수 없습니다.',
        'ranking'                      => '순위',
        'espionage_report'             => '첩보 리포트',
        'missile_attack'               => '미사일 공격',
        'rank'                         => '순위',
        'alliance_member'              => '회원',
        'alliance_class'               => '동맹 클래스',
        'espionage_not_possible'       => '첩보 불가능',
        'espionage'                    => '첩보',
        'hire_admiral'                 => '제독 고용',
        'dark_matter'                  => '암흑물질',
        'outlaw_explanation'           => '무법자가 되면 더 이상 공격 보호가 없으며 모든 플레이어가 공격할 수 있습니다.',
        'honorable_target_explanation' => '이 목표와의 전투에서 명예 점수를 받고 50% 더 많은 전리품을 약탈할 수 있습니다.',

        // galaxyLoca JS object
        'relocate_success'             => '위치가 예약되었습니다. 식민지 이주가 시작되었습니다.',
        'relocate_title'               => '행성 이주',
        'relocate_question'            => '행성을 이 좌표로 이주시키시겠습니까? 이주 비용으로 :cost 암흑물질이 필요합니다.',
        'deut_needed_relocate'         => '중수소가 부족합니다! 중수소 10단위가 필요합니다.',
        'fleet_attacking'              => '함대가 공격 중입니다!',
        'fleet_underway'               => '함대가 이동 중입니다',
        'discovery_send'               => '탐사선 파견',
        'discovery_success'            => '탐사선이 파견되었습니다',
        'discovery_unavailable'        => '이 위치로 탐사선을 파견할 수 없습니다.',
        'discovery_underway'           => '탐사선이 이미 이 행성에 접근 중입니다.',
        'discovery_locked'             => '새로운 생명체를 발견하기 위한 연구를 아직 잠금 해제하지 않았습니다.',
        'discovery_title'              => '탐사선',
        'discovery_question'           => '이 행성으로 탐사선을 파견하시겠습니까?<br/>금속: 5000 크리스탈: 1000 중수소: 500',

        // Phalanx result dialog (JS strings inside Blade-rendered script block)
        'sensor_report'                => '센서 리포트',
        'refresh'                      => '새로고침',
        'arrived'                      => '도착함',

        // Missile attack dialog
        'target'                       => '목표',
        'flight_duration'              => '비행 시간',
        'ipm_full'                     => '행성간 미사일',
        'primary_target'               => '주 목표',
        'no_primary_target'            => '주 목표가 선택되지 않음: 무작위 목표',
        'target_has'                   => '목표 보유',
        'abm_full'                     => '대탄도 미사일',
        'fire'                         => '발사',
        'valid_missile_count'          => '유효한 미사일 수를 입력하십시오',
        'not_enough_missiles'          => '미사일이 부족합니다',
        'launched_success'             => '미사일이 성공적으로 발사되었습니다!',
        'launch_failed'                => '미사일 발사에 실패했습니다',
        'insufficient_range'           => '행성간 미사일의 사거리가 부족합니다 (임펄스 추진 연구 레벨)!',
    ],

    // -------------------------------------------------------------------------
    // Buddy system (buddy requests + player ignore — used in galaxy page)
    // -------------------------------------------------------------------------

    'buddy' => [
        'request_sent'   => '친구 요청이 성공적으로 전송되었습니다!',
        'request_failed' => '친구 요청 전송에 실패했습니다.',
        'request_to'     => '친구 요청 대상',
        'ignore_confirm' => '정말 무시하시겠습니까',
        'ignore_success' => '플레이어가 성공적으로 무시되었습니다!',
        'ignore_failed'  => '플레이어 무시에 실패했습니다.',
    ],

    // -------------------------------------------------------------------------
    // Messages page
    // -------------------------------------------------------------------------

    'messages' => [
        // Main tabs
        'tab_fleets'        => '함대',
        'tab_communication' => '통신',
        'tab_economy'       => '경제',
        'tab_universe'      => '우주',
        'tab_system'        => 'OGame',
        'tab_favourites'    => '즐겨찾기',

        // Fleet subtabs
        'subtab_espionage'   => '첩보',
        'subtab_combat'      => '전투 리포트',
        'subtab_expeditions' => '원정',
        'subtab_transport'   => '연합/운송',
        'subtab_other'       => '기타',

        // Communication subtabs
        'subtab_messages'         => '메시지',
        'subtab_information'      => '정보',
        'subtab_shared_combat'    => '공유된 전투 리포트',
        'subtab_shared_espionage' => '공유된 첩보 리포트',

        // General UI
        'news_feed'          => '뉴스 피드',
        'loading'            => '로딩...',
        'error_occurred'     => '오류가 발생했습니다',
        'mark_favourite'     => '즐겨찾기로 표시',
        'remove_favourite'   => '즐겨찾기에서 제거',
        'from'               => '보낸 사람',
        'no_messages'        => '현재 이 탭에 사용 가능한 메시지가 없습니다',
        'new_alliance_msg'   => '새 동맹 메시지',
        'to'                 => '받는 사람',
        'all_players'        => '모든 플레이어',
        'only_rank'          => '순위만',
        'send'               => '보내기',
        'delete_buddy_title' => '친구 삭제',
        'report_to_operator' => '이 메시지를 게임 운영자에게 신고하시겠습니까?',
        'too_few_chars'      => '문자가 너무 적습니다! 최소 2자 이상 입력하십시오.',

        // BBCode editor (localizedBBCode)
        'bbcode_bold'           => '굵게',
        'bbcode_italic'         => '기울임',
        'bbcode_underline'      => '밑줄',
        'bbcode_stroke'         => '취소선',
        'bbcode_sub'            => '아래 첨자',
        'bbcode_sup'            => '위 첨자',
        'bbcode_font_color'     => '글꼴 색상',
        'bbcode_font_size'      => '글꼴 크기',
        'bbcode_bg_color'       => '배경 색상',
        'bbcode_bg_image'       => '배경 이미지',
        'bbcode_tooltip'        => '툴팁',
        'bbcode_align_left'     => '왼쪽 정렬',
        'bbcode_align_center'   => '가운데 정렬',
        'bbcode_align_right'    => '오른쪽 정렬',
        'bbcode_align_justify'  => '양쪽 정렬',
        'bbcode_block'          => '줄바꿈',
        'bbcode_code'           => '코드',
        'bbcode_spoiler'        => '스포일러',
        'bbcode_moreopts'       => '더 많은 옵션',
        'bbcode_list'           => '목록',
        'bbcode_hr'             => '수평선',
        'bbcode_picture'        => '이미지',
        'bbcode_link'           => '링크',
        'bbcode_email'          => '이메일',
        'bbcode_player'         => '플레이어',
        'bbcode_item'           => '아이템',
        'bbcode_coordinates'    => '좌표',
        'bbcode_preview'        => '미리보기',
        'bbcode_text_ph'        => '텍스트...',
        'bbcode_player_ph'      => '플레이어 ID 또는 이름',
        'bbcode_item_ph'        => '아이템 ID',
        'bbcode_coord_ph'       => '은하:시스템:위치',
        'bbcode_chars_left'     => '남은 문자 수',
        'bbcode_ok'             => '확인',
        'bbcode_cancel'         => '취소',
        'bbcode_repeat_x'       => '가로 반복',
        'bbcode_repeat_y'       => '세로 반복',

        // Espionage report
        'spy_player'          => '플레이어',
        'spy_activity'        => '활동',
        'spy_minutes_ago'     => '분 전',
        'spy_class'           => '클래스',
        'spy_unknown'         => '알 수 없음',
        'spy_alliance_class'  => '동맹 클래스',
        'spy_no_alliance_class' => '선택된 동맹 클래스 없음',
        'spy_resources'       => '자원',
        'spy_loot'            => '전리품',
        'spy_counter_esp'     => '역첩보 가능성',
        'spy_no_info'         => '스캔에서 이 유형의 신뢰할 수 있는 정보를 검색할 수 없었습니다.',
        'spy_debris_field'    => '잔해 필드',
        'spy_no_activity'     => '첩보 활동은 행성 대기에 이상을 표시하지 않습니다. 지난 1시간 동안 행성에 활동이 없었던 것으로 보입니다.',
        'spy_fleets'          => '함대',
        'spy_defense'         => '방어',
        'spy_research'        => '연구',
        'spy_building'        => '건물',
        'spy_api_key'         => '이 데이터는 호환 가능한 전투 시뮬레이터에 입력할 수 있습니다',

        // Battle report (brief)
        'battle_attacker'    => '공격자',
        'battle_defender'    => '방어자',
        'battle_resources'   => '자원',
        'battle_loot'        => '전리품',
        'battle_debris_new'       => '잔해 필드 (새로 생성됨)',
        'battle_wreckage_created'  => '잔해 생성됨',
        'battle_attacker_wreckage' => '공격자 잔해',
        'battle_repaired'    => '실제 수리됨',
        'battle_moon_chance' => '달 생성 확률',

        // Battle report (full)
        'battle_report'          => '전투 리포트',
        'battle_planet'          => '행성',
        'battle_fleet_command'   => '함대 사령부',
        'battle_from'            => '출발지',
        'battle_tactical_retreat' => '전술적 후퇴',
        'battle_total_loot'      => '총 전리품',
        'battle_debris'          => '잔해 (새것)',
        'battle_recycler'        => '재활용선',
        'battle_mined_after'     => '전투 후 채굴됨',
        'battle_reaper'          => '리퍼',
        'battle_debris_left'     => '잔해 필드 (남은 것)',
        'battle_honour_points'   => '명예 점수',
        'battle_dishonourable'   => '불명예스러운 전투',
        'battle_vs'              => 'vs',
        'battle_honourable'      => '명예로운 전투',
        'battle_class'           => '클래스',
        'battle_weapons'         => '무기',
        'battle_shields'         => '보호막',
        'battle_armour'          => '장갑',
        'battle_combat_ships'    => '전투 함선',
        'battle_civil_ships'     => '민간 함선',
        'battle_defences'        => '방어',
        'battle_repaired_def'    => '수리된 방어',
        'battle_share'           => '메시지 공유',
        'battle_attack'          => '공격',
        'battle_espionage'       => '첩보',
        'battle_delete'          => '삭제',
        'battle_favourite'       => '즐겨찾기로 표시',
        'battle_hamill'          => '경전투기가 전투 시작 전에 데스스타 하나를 파괴했습니다!',
        'battle_retreat_tooltip'  => '데스스타, 정찰기, 태양광 위성 및 ACS 방어 임무의 함대는 도망칠 수 없습니다. 전술적 후퇴는 명예로운 전투에서도 비활성화됩니다. 후퇴는 수동으로 비활성화되었거나 중수소 부족으로 인해 방지되었을 수도 있습니다. 무법자와 500,000점 이상의 플레이어는 절대 후퇴하지 않습니다.',
        'battle_no_flee'         => '방어 함대는 도망치지 않았습니다.',
        'battle_rounds'          => '라운드',
        'battle_start'           => '시작',
        'battle_player_from'     => '출발지',
        'battle_attacker_fires'  => ':attacker이(가) :defender에게 총 :hits발을 발사하여 총 :strength의 공격력을 가했습니다. :defender2의 보호막이 :absorbed 데미지를 흡수했습니다.',
        'battle_defender_fires'  => ':defender이(가) :attacker에게 총 :hits발을 발사하여 총 :strength의 공격력을 가했습니다. :attacker2의 보호막이 :absorbed 데미지를 흡수했습니다.',
        'battle_api_key'         => '이 데이터는 호환 가능한 전투 시뮬레이터에 입력할 수 있습니다',
    ],

    // -------------------------------------------------------------------------
    // Alliance page
    // -------------------------------------------------------------------------

    'alliance' => [
        // Page / navigation
        'page_title'                    => '동맹',
        'tab_overview'                  => '개요',
        'tab_management'                => '관리',
        'tab_communication'             => '통신',
        'tab_applications'              => '신청',
        'tab_classes'                   => '동맹 클래스',
        'tab_create'                    => '동맹 생성',
        'tab_search'                    => '동맹 검색',
        'tab_apply'                     => '신청',

        // Overview – alliance info table
        'your_alliance'                 => '당신의 동맹',
        'name'                          => '이름',
        'tag'                           => '태그',
        'created'                       => '생성일',
        'member'                        => '회원',
        'your_rank'                     => '당신의 직급',
        'homepage'                      => '홈페이지',
        'logo'                          => '동맹 로고',
        'open_page'                     => '동맹 페이지 열기',
        'highscore'                     => '동맹 순위',
        'leave_wait_warning'            => '동맹을 탈퇴하면 다른 동맹에 가입하거나 생성하기 전에 3일을 기다려야 합니다.',
        'leave_btn'                     => '동맹 탈퇴',

        // Overview – member list
        'member_list'                   => '회원 목록',
        'no_members'                    => '회원을 찾을 수 없습니다',
        'assign_rank_btn'               => '직급 할당',
        'kick_tooltip'                  => '동맹 회원 추방',
        'write_msg_tooltip'             => '메시지 작성',
        'col_name'                      => '이름',
        'col_rank'                      => '직급',
        'col_coords'                    => '좌표',
        'col_joined'                    => '가입일',
        'col_online'                    => '온라인',
        'col_function'                  => '기능',

        // Overview – text sections
        'internal_area'                 => '내부 구역',
        'external_area'                 => '외부 구역',

        // Management – privileges
        'configure_privileges'          => '권한 구성',
        'col_rank_name'                 => '직급 이름',
        'col_applications_group'        => '신청',
        'col_member_group'              => '회원',
        'col_alliance_group'            => '동맹',
        'delete_rank'                   => '직급 삭제',
        'save_btn'                      => '저장',
        'rights_warning_html'           => '<strong>경고!</strong> 자신이 가진 권한만 부여할 수 있습니다.',
        'rights_warning_loca'           => '[b]경고![/b] 자신이 가진 권한만 부여할 수 있습니다.',
        'rights_legend'                 => '권한 범례',
        'create_rank_btn'               => '새 직급 생성',
        'rank_name_placeholder'         => '직급 이름',
        'no_ranks'                      => '직급을 찾을 수 없습니다',

        // Management – permissions (icon titles and legend)
        'perm_see_applications'         => '신청 보기',
        'perm_edit_applications'        => '신청 처리',
        'perm_see_members'              => '회원 목록 보기',
        'perm_kick_user'                => '사용자 추방',
        'perm_see_online'               => '온라인 상태 보기',
        'perm_send_circular'            => '순환 메시지 작성',
        'perm_disband'                  => '동맹 해산',
        'perm_manage'                   => '동맹 관리',
        'perm_right_hand'               => '오른팔',
        'perm_right_hand_long'          => '`오른팔` (창설자 직급 이전에 필요)',
        'perm_manage_classes'           => '동맹 클래스 관리',

        // Management – texts section
        'manage_texts'                  => '텍스트 관리',
        'internal_text'                 => '내부 텍스트',
        'external_text'                 => '외부 텍스트',
        'application_text'              => '신청 텍스트',

        // Management – options/settings
        'options'                       => '옵션',
        'alliance_logo_label'           => '동맹 로고',
        'applications_field'            => '신청',
        'status_open'                   => '가능 (동맹 열림)',
        'status_closed'                 => '불가능 (동맹 닫힘)',
        'rename_founder'                => '창설자 직급 이름 변경',
        'rename_newcomer'               => '신참 직급 이름 변경',
        'no_settings_perm'              => '동맹 설정을 관리할 권한이 없습니다.',

        // Management – change tag/name
        'change_tag_name'               => '동맹 태그/이름 변경',
        'change_tag'                    => '동맹 태그 변경',
        'change_name'                   => '동맹 이름 변경',
        'former_tag'                    => '이전 동맹 태그:',
        'new_tag'                       => '새 동맹 태그:',
        'former_name'                   => '이전 동맹 이름:',
        'new_name'                      => '새 동맹 이름:',
        'former_tag_short'              => '이전 동맹 태그',
        'new_tag_short'                 => '새 동맹 태그',
        'former_name_short'             => '이전 동맹 이름',
        'new_name_short'                => '새 동맹 이름',
        'no_tagname_perm'               => '동맹 태그/이름을 변경할 권한이 없습니다.',

        // Management – disband / pass on
        'delete_pass_on'                => '동맹 삭제/동맹 넘기기',
        'delete_btn'                    => '이 동맹 삭제',
        'no_delete_perm'                => '동맹을 삭제할 권한이 없습니다.',
        'handover'                      => '동맹 넘기기',
        'takeover_btn'                  => '동맹 인수',
        'loca_continue'                 => '계속',
        'loca_change_founder'           => '창설자 직급 이전 대상:',
        'loca_no_transfer_error'        => '회원 중 누구도 필요한 `오른팔` 권한을 가지고 있지 않습니다. 동맹을 넘길 수 없습니다.',
        'loca_founder_inactive_error'   => '창설자가 동맹을 인수할 만큼 충분히 오랫동안 비활성 상태가 아닙니다.',

        // Management – leave alliance section (non-founders)
        'leave_section_title'           => '동맹 탈퇴',
        'leave_consequences'            => '동맹을 탈퇴하면 모든 직급 권한과 동맹 혜택을 잃게 됩니다.',

        // Applications tab
        'no_applications'               => '신청을 찾을 수 없습니다',
        'accept_btn'                    => '수락',
        'deny_btn'                      => '신청자 거부',
        'report_btn'                    => '신청 신고',
        'app_date'                      => '신청일',
        'action_col'                    => '행동',
        'answer_btn'                    => '답변',
        'reason_label'                  => '이유',

        // Apply page
        'apply_title'                   => '동맹 신청',
        'apply_heading'                 => '신청 대상',
        'send_application_btn'          => '신청 보내기',
        'chars_remaining'               => '남은 문자 수',
        'msg_too_long'                  => '메시지가 너무 깁니다 (최대 2000자)',

        // Broadcast
        'addressee'                     => '받는 사람',
        'all_players'                   => '모든 플레이어',
        'only_rank'                     => '직급만:',
        'send_btn'                      => '보내기',

        // Info popup
        'info_title'                    => '동맹 정보',
        'apply_confirm'                 => '이 동맹에 신청하시겠습니까?',
        'redirect_confirm'              => '이 링크를 따라가면 OGame을 떠나게 됩니다. 계속하시겠습니까?',

        // Classes tab
        'class_selection_header'        => '클래스 선택',
        'select_class_title'            => '동맹 클래스 선택',
        'select_class_note'             => '특별 보너스를 받으려면 동맹 클래스를 선택하십시오. 필요한 권한이 있으면 동맹 메뉴에서 동맹 클래스를 변경할 수 있습니다.',
        'class_warriors'                => '전사 (동맹)',
        'class_traders'                 => '상인 (동맹)',
        'class_researchers'             => '연구자 (동맹)',
        'class_label'                   => '동맹 클래스',
        'buy_for'                       => '구매 가격',
        'no_dark_matter'                => '사용 가능한 암흑물질이 부족합니다',
        'loca_deactivate'               => '비활성화',
        'loca_activate_dm'              => '#darkmatter# 암흑물질로 동맹 클래스 #allianceClassName#을(를) 활성화하시겠습니까? 이렇게 하면 현재 동맹 클래스를 잃게 됩니다.',
        'loca_activate_item'            => '동맹 클래스 #allianceClassName#을(를) 활성화하시겠습니까? 이렇게 하면 현재 동맹 클래스를 잃게 됩니다.',
        'loca_deactivate_note'          => '정말 동맹 클래스 #allianceClassName#을(를) 비활성화하시겠습니까? 재활성화하려면 500,000 암흑물질에 대한 동맹 클래스 변경 아이템이 필요합니다.',
        'loca_class_change_append'      => '<br><br>현재 동맹 클래스: #currentAllianceClassName#<br><br>마지막 변경일: #lastAllianceClassChange#',
        'loca_no_dm'                    => '사용 가능한 암흑물질이 부족합니다! 지금 구매하시겠습니까?',
        'loca_reference'                => '참고',
        'loca_language'                 => '언어:',
        'loca_loading'                  => '로딩...',
        'warrior_bonus_1'               => '동맹 회원 간 비행하는 함선 속도 +10%',
        'warrior_bonus_2'               => '전투 연구 레벨 +1',
        'warrior_bonus_3'               => '첩보 연구 레벨 +1',
        'warrior_bonus_4'               => '첩보 시스템을 사용하여 전체 시스템을 스캔할 수 있습니다.',
        'trader_bonus_1'                => '수송선 속도 +10%',
        'trader_bonus_2'                => '광산 생산량 +5%',
        'trader_bonus_3'                => '에너지 생산량 +5%',
        'trader_bonus_4'                => '행성 저장 용량 +10%',
        'trader_bonus_5'                => '달 저장 용량 +10%',
        'researcher_bonus_1'            => '개척 시 행성 크기 +5%',
        'researcher_bonus_2'            => '원정 목적지까지 속도 +10%',
        'researcher_bonus_3'            => '시스템 팔랑스를 사용하여 전체 시스템의 함대 이동을 스캔할 수 있습니다.',
        'class_not_implemented'         => '동맹 클래스 시스템이 아직 구현되지 않았습니다',

        // Create alliance form
        'create_tag_label'              => '동맹 태그 (3-8자)',
        'create_name_label'             => '동맹 이름 (3-30자)',
        'create_btn'                    => '동맹 생성',
        'loca_ally_tag_chars'           => '동맹 태그 (3-30자)',
        'loca_ally_name_chars'          => '동맹 이름 (3-8자)',
        'loca_ally_name_label'          => '동맹 이름 (3-30자)',
        'loca_ally_tag_label'           => '동맹 태그 (3-8자)',
        'validation_min_chars'          => '문자가 부족합니다',
        'validation_special'            => '잘못된 문자가 포함되어 있습니다.',
        'validation_underscore'         => '이름은 밑줄로 시작하거나 끝날 수 없습니다.',
        'validation_hyphen'             => '이름은 하이픈으로 시작하거나 끝날 수 없습니다.',
        'validation_space'              => '이름은 공백으로 시작하거나 끝날 수 없습니다.',
        'validation_max_underscores'    => '이름에는 총 3개 이하의 밑줄이 포함될 수 있습니다.',
        'validation_max_hyphens'        => '이름에는 총 3개 이하의 하이픈이 포함될 수 있습니다.',
        'validation_max_spaces'         => '이름에는 총 3개 이하의 공백이 포함될 수 있습니다.',
        'validation_consec_underscores' => '두 개 이상의 밑줄을 연속으로 사용할 수 없습니다.',
        'validation_consec_hyphens'     => '두 개 이상의 하이픈을 연속으로 사용할 수 없습니다.',
        'validation_consec_spaces'      => '두 개 이상의 공백을 연속으로 사용할 수 없습니다.',

        // JS confirm dialogs
        'confirm_leave'                 => '정말 동맹을 탈퇴하시겠습니까?',
        'confirm_kick'                  => '정말 :username을(를) 동맹에서 추방하시겠습니까?',
        'confirm_deny'                  => '정말 이 신청을 거부하시겠습니까?',
        'confirm_deny_title'            => '신청 거부',
        'confirm_disband'               => '정말 동맹을 삭제하시겠습니까?',
        'confirm_pass_on'               => '정말 동맹을 넘기시겠습니까?',
        'confirm_takeover'              => '정말 이 동맹을 인수하시겠습니까?',
        'confirm_abandon'               => '이 동맹을 포기하시겠습니까?',
        'confirm_takeover_long'         => '이 동맹을 인수하시겠습니까?',

        // Controller / AJAX success & error messages
        'msg_already_in'                => '이미 동맹에 가입되어 있습니다',
        'msg_not_in_alliance'           => '동맹에 가입되어 있지 않습니다',
        'msg_not_found'                 => '동맹을 찾을 수 없습니다',
        'msg_id_required'               => '동맹 ID가 필요합니다',
        'msg_closed'                    => '이 동맹은 신청을 받지 않습니다',
        'msg_created'                   => '동맹이 성공적으로 생성되었습니다',
        'msg_applied'                   => '신청이 성공적으로 제출되었습니다',
        'msg_accepted'                  => '신청이 수락되었습니다',
        'msg_rejected'                  => '신청이 거부되었습니다',
        'msg_kicked'                    => '회원이 동맹에서 추방되었습니다',
        'msg_kicked_success'            => '회원이 성공적으로 추방되었습니다',
        'msg_left'                      => '동맹을 탈퇴했습니다',
        'msg_rank_assigned'             => '직급이 할당되었습니다',
        'msg_rank_assigned_to'          => ':name에게 직급이 성공적으로 할당되었습니다',
        'msg_ranks_assigned'            => '직급이 성공적으로 할당되었습니다',
        'msg_rank_perms_updated'        => '직급 권한이 업데이트되었습니다',
        'msg_texts_updated'             => '동맹 텍스트가 업데이트되었습니다',
        'msg_text_updated'              => '동맹 텍스트가 업데이트되었습니다',
        'msg_settings_updated'          => '동맹 설정이 업데이트되었습니다',
        'msg_tag_updated'               => '동맹 태그가 업데이트되었습니다',
        'msg_name_updated'              => '동맹 이름이 업데이트되었습니다',
        'msg_tag_name_updated'          => '동맹 태그와 이름이 업데이트되었습니다',
        'msg_disbanded'                 => '동맹이 해산되었습니다',
        'msg_broadcast_sent'            => '순환 메시지가 성공적으로 전송되었습니다',
        'msg_rank_created'              => '직급이 성공적으로 생성되었습니다',
        'msg_apply_success'             => '신청이 성공적으로 제출되었습니다',
        'msg_apply_error'               => '신청 제출에 실패했습니다',
        'msg_leave_error'               => '동맹 탈퇴에 실패했습니다',
        'msg_assign_error'              => '직급 할당에 실패했습니다',
        'msg_kick_error'                => '회원 추방에 실패했습니다',
        'msg_invalid_action'            => '잘못된 작업',
        'msg_error'                     => '오류가 발생했습니다',
    ],

    // -------------------------------------------------------------------
    // Techtree module
    // -------------------------------------------------------------------
    'techtree' => [
        // Navigation tabs
        'tab_techtree'                          => '기술 트리',
        'tab_applications'                      => '응용',
        'tab_techinfo'                          => '기술 정보',
        'tab_technology'                        => '기술',

        // Common
        'page_title'                            => '기술',
        'no_requirements'                       => '사용 가능한 요구 사항이 없습니다',
        'is_requirement_for'                    => '다음의 요구 사항입니다',
        'level'                                 => '레벨',

        // Shared table columns
        'col_level'                             => '레벨',
        'col_difference'                        => '차이',
        'col_diff_per_level'                    => '레벨당 차이',
        'col_protected'                         => '보호됨',
        'col_protected_percent'                 => '보호됨 (백분율)',

        // Production table
        'production_energy_balance'             => '에너지 균형',
        'production_per_hour'                   => '시간당 생산량',
        'production_deuterium_consumption'      => '중수소 소비',

        // Properties table (ships/defense)
        'properties_technical_data'             => '기술 데이터',
        'properties_structural_integrity'       => '구조적 무결성',
        'properties_shield_strength'            => '보호막 강도',
        'properties_attack_strength'            => '공격력',
        'properties_speed'                      => '속도',
        'properties_cargo_capacity'             => '화물 용량',
        'properties_fuel_usage'                 => '연료 사용량 (중수소)',

        // Property tooltip
        'tooltip_basic_value'                   => '기본 값',

        // Rapidfire
        'rapidfire_from'                        => '받는 연사',
        'rapidfire_against'                     => '공격하는 연사',

        // Storage table
        'storage_capacity'                      => '저장 용량',

        // Plasma table
        'plasma_metal_bonus'                    => '금속 보너스 %',
        'plasma_crystal_bonus'                  => '크리스탈 보너스 %',
        'plasma_deuterium_bonus'                => '중수소 보너스 %',

        // Astrophysics table
        'astrophysics_max_colonies'             => '최대 식민지',
        'astrophysics_max_expeditions'          => '최대 원정',
        'astrophysics_note_1'                   => '레벨 4부터 위치 3과 13을 개척할 수 있습니다.',
        'astrophysics_note_2'                   => '레벨 6부터 위치 2와 14를 개척할 수 있습니다.',
        'astrophysics_note_3'                   => '레벨 8부터 위치 1과 15를 개척할 수 있습니다.',
    ],

    // -------------------------------------------------------------------
    // Options (user settings) module
    // -------------------------------------------------------------------
    'options' => [
        // Page title
        'page_title'                                => '설정',

        // Tabs
        'tab_userdata'                              => '사용자 데이터',
        'tab_general'                               => '일반',
        'tab_display'                               => '표시',
        'tab_extended'                              => '확장',

        // Tab 1 – Player name
        'section_playername'                        => '플레이어 이름',
        'your_player_name'                          => '당신의 플레이어 이름:',
        'new_player_name'                           => '새 플레이어 이름:',
        'username_change_once_week'                 => '주당 한 번 사용자 이름을 변경할 수 있습니다.',
        'username_change_hint'                      => '변경하려면 화면 상단의 이름이나 설정을 클릭하십시오.',

        // Tab 1 – Password
        'section_password'                          => '비밀번호 변경',
        'old_password'                              => '기존 비밀번호 입력:',
        'new_password'                              => '새 비밀번호 (최소 4자):',
        'repeat_password'                           => '새 비밀번호 반복:',
        'password_check'                            => '비밀번호 확인:',
        'password_strength_low'                     => '낮음',
        'password_strength_medium'                  => '보통',
        'password_strength_high'                    => '높음',
        'password_properties_title'                 => '비밀번호는 다음 속성을 포함해야 합니다',
        'password_min_max'                          => '최소 4자, 최대 128자',
        'password_mixed_case'                       => '대문자 및 소문자',
        'password_special_chars'                    => '특수 문자 (예: !?:_., )',
        'password_numbers'                          => '숫자',
        'password_length_hint'                      => '비밀번호는 최소 <strong>4자</strong>이어야 하며 <strong>128자</strong>보다 길 수 없습니다.',

        // Tab 1 – Email
        'section_email'                             => '이메일 주소',
        'current_email'                             => '현재 이메일 주소:',
        'send_validation_link'                      => '확인 링크 보내기',
        'email_sent_success'                        => '이메일이 성공적으로 전송되었습니다!',
        'email_sent_error'                          => '오류! 계정이 이미 확인되었거나 이메일을 보낼 수 없습니다!',
        'email_too_many_requests'                   => "너무 많은 이메일을 요청했습니다!",
        'new_email'                                 => '새 이메일 주소:',
        'new_email_confirm'                         => '새 이메일 주소 (확인용):',
        'enter_password_confirm'                    => '비밀번호 입력 (확인용):',
        'email_warning'                             => '경고! 계정 확인 성공 후 이메일 주소를 다시 변경하려면 <b>7일</b> 기간이 지나야 합니다.',

        // Tab 2 – General
        'section_spy_probes'                        => '정찰기',
        'spy_probes_amount'                         => '첩보 정찰기 수량:',
        'section_chat'                              => '채팅',
        'disable_chat_bar'                          => '채팅 바 비활성화:',
        'section_warnings'                          => '경고',
        'disable_outlaw_warning'                    => '5배 강한 상대 공격 시 무법자 경고 비활성화:',

        // Tab 3 – Display > General
        'section_general_display'                   => '일반',
        'show_mobile_version'                       => '모바일 버전 표시:',
        'show_alt_dropdowns'                        => '대체 드롭다운 표시:',
        'activate_autofocus'                        => '순위에서 자동 포커스 활성화:',
        'always_show_events'                        => '항상 이벤트 표시:',
        'events_hide'                               => '숨기기',
        'events_above'                              => '콘텐츠 위',
        'events_below'                              => '콘텐츠 아래',

        // Tab 3 – Display > Planets
        'section_planets'                           => '행성',
        'sort_planets_by'                           => '행성 정렬 기준:',
        'sort_emergence'                            => '생성 순서',
        'sort_coordinates'                          => '좌표',
        'sort_alphabet'                             => '알파벳',
        'sort_size'                                 => '크기',
        'sort_used_fields'                          => '사용된 필드',
        'sort_sequence'                             => '정렬 순서:',
        'sort_order_up'                             => '오름차순',
        'sort_order_down'                           => '내림차순',

        // Tab 3 – Display > Overview
        'section_overview_display'                  => '현황',
        'highlight_planet_info'                     => '행성 정보 강조 표시:',
        'animated_detail_display'                   => '애니메이션 세부 표시:',
        'animated_overview'                         => '애니메이션 현황:',

        // Tab 3 – Display > Overlays
        'section_overlays'                          => '오버레이',
        'overlays_hint'                             => '다음 설정을 사용하면 해당 오버레이가 게임 내가 아닌 추가 브라우저 창으로 열립니다.',
        'popup_notes'                               => '추가 창에 메모:',
        'popup_combat_reports'                      => '추가 창에 전투 리포트:',

        // Tab 3 – Display > Messages
        'section_messages_display'                  => '메시지',
        'hide_report_pictures'                      => '리포트에서 이미지 숨기기:',
        'msgs_per_page'                             => '페이지당 표시되는 메시지 수:',
        'auctioneer_notifications'                  => '경매인 알림:',
        'economy_notifications'                     => '경제 메시지 생성:',

        // Tab 3 – Display > Galaxy
        'section_galaxy_display'                    => '은하',
        'detailed_activity'                         => '상세 활동 표시:',
        'preserve_galaxy_system'                    => '행성 변경 시 은하/시스템 유지:',

        // Tab 4 – Extended > Vacation Mode
        'section_vacation'                          => '휴가 모드',
        'vacation_active'                           => '현재 휴가 모드입니다.',
        'vacation_can_deactivate_after'             => '다음 이후 비활성화할 수 있습니다:',
        'vacation_cannot_activate'                  => '휴가 모드를 활성화할 수 없습니다 (활성 함대)',
        'vacation_description_1'                    => '휴가 모드는 게임에서 장기간 부재하는 동안 보호하도록 설계되었습니다. 이동 중인 함대가 없을 때만 활성화할 수 있습니다. 건설 및 연구 명령이 보류됩니다.',
        'vacation_description_2'                    => '휴가 모드가 활성화되면 새로운 공격으로부터 보호됩니다. 그러나 이미 시작된 공격은 계속되며 생산이 0으로 설정됩니다. 휴가 모드는 계정이 35일 이상 비활성 상태이고 구매한 DM이 없는 경우 계정 삭제를 방지하지 않습니다.',
        'vacation_description_3'                    => '휴가 모드는 최소 48시간 지속됩니다. 이 시간이 만료된 후에만 비활성화할 수 있습니다.',
        'vacation_tooltip_min_days'                 => '휴가는 최소 2일 지속됩니다.',
        'vacation_deactivate_btn'                   => '비활성화',
        'vacation_activate_btn'                     => '활성화',

        // Tab 4 – Extended > Account
        'section_account'                           => '계정',
        'delete_account'                            => '계정 삭제',
        'delete_account_hint'                       => '7일 후 자동 삭제되도록 계정을 표시하려면 여기를 선택하십시오.',

        // Submit
        'use_settings'                              => '설정 사용',

        // Language (added for i18n-ko Phase 2)
        'tab_display_section_language'              => '언어',
        'language_select'                           => '언어 선택',
        'language_saved'                            => '언어 설정이 저장되었습니다.',

        // JS validationEngine rules
        'validation_not_enough_chars'               => '문자가 부족합니다',
        'validation_pw_too_short'                   => '입력한 비밀번호가 너무 짧습니다 (최소 4자)',
        'validation_pw_too_long'                    => '입력한 비밀번호가 너무 깁니다 (최대 20자)',
        'validation_invalid_email'                  => '유효한 이메일 주소를 입력해야 합니다!',
        'validation_special_chars'                  => '잘못된 문자가 포함되어 있습니다.',
        'validation_no_begin_end_underscore'        => '이름은 밑줄로 시작하거나 끝날 수 없습니다.',
        'validation_no_begin_end_hyphen'            => '이름은 하이픈으로 시작하거나 끝날 수 없습니다.',
        'validation_no_begin_end_whitespace'        => '이름은 공백으로 시작하거나 끝날 수 없습니다.',
        'validation_max_three_underscores'          => '이름에는 총 3개 이하의 밑줄이 포함될 수 있습니다.',
        'validation_max_three_hyphens'              => '이름에는 총 3개 이하의 하이픈이 포함될 수 있습니다.',
        'validation_max_three_spaces'               => '이름에는 총 3개 이하의 공백이 포함될 수 있습니다.',
        'validation_no_consecutive_underscores'     => '두 개 이상의 밑줄을 연속으로 사용할 수 없습니다.',
        'validation_no_consecutive_hyphens'         => '두 개 이상의 하이픈을 연속으로 사용할 수 없습니다.',
        'validation_no_consecutive_spaces'          => '두 개 이상의 공백을 연속으로 사용할 수 없습니다.',

        // JS preferenceLoca object
        'js_change_name_title'                      => '새 플레이어 이름',
        'js_change_name_question'                   => '플레이어 이름을 %newName%으로 변경하시겠습니까?',
        'js_planet_move_question'                   => '주의! 이 임무는 이주 기간이 시작될 때 여전히 실행 중일 수 있으며, 이 경우 프로세스가 취소됩니다. 정말 이 작업을 계속하시겠습니까?',
        'js_tab_disabled'                           => '이 옵션을 사용하려면 확인되어야 하며 휴가 모드에 있으면 안 됩니다!',
        'js_vacation_question'                      => '휴가 모드를 활성화하시겠습니까? 휴가는 2일 후에만 종료할 수 있습니다.',

        // Controller messages
        'msg_settings_saved'                        => '설정이 저장되었습니다',
        'msg_password_incorrect'                    => '입력한 현재 비밀번호가 올바르지 않습니다.',
        'msg_password_mismatch'                     => '새 비밀번호가 일치하지 않습니다.',
        'msg_password_length_invalid'               => '새 비밀번호는 4자에서 128자 사이여야 합니다.',
        'msg_vacation_activated'                    => '휴가 모드가 활성화되었습니다. 최소 48시간 동안 새로운 공격으로부터 보호됩니다.',
        'msg_vacation_deactivated'                  => '휴가 모드가 비활성화되었습니다.',
        'msg_vacation_min_duration'                 => '최소 기간 48시간이 지난 후에만 휴가 모드를 비활성화할 수 있습니다.',
        'msg_vacation_fleets_in_transit'            => '이동 중인 함대가 있는 동안에는 휴가 모드를 활성화할 수 없습니다.',
        'msg_probes_min_one'                        => '첩보 정찰기 수량은 최소 1이어야 합니다',
    ],

    // -------------------------------------------------------------------------
    // Layout (main.blade.php) — header, menu, resource bar, footer, JS loca
    // -------------------------------------------------------------------------
    'layout' => [
        // Header bar
        'player'                    => '플레이어',
        'change_player_name'        => '플레이어 이름 변경',
        'highscore'                 => '순위',
        'notes'                     => '메모',
        'notes_overlay_title'       => '내 메모',
        'buddies'                   => '친구',
        'search'                    => '검색',
        'search_overlay_title'      => '우주 검색',
        'options'                   => '설정',
        'support'                   => '지원',
        'log_out'                   => '로그아웃',
        'unread_messages'           => '읽지 않은 메시지',
        'loading'                   => '로딩...',
        'no_fleet_movement'         => '함대 이동 없음',
        'under_attack'              => '공격받고 있습니다!',

        // Character class
        'class_none'                => '선택된 클래스 없음',
        'class_selected'            => '당신의 클래스: :name',
        'class_click_select'        => '캐릭터 클래스를 선택하려면 클릭하십시오',

        // Resource bar
        'res_available'             => '사용 가능',
        'res_storage_capacity'      => '저장 용량',
        'res_current_production'    => '현재 생산량',
        'res_den_capacity'          => '소굴 용량',
        'res_consumption'           => '소비',
        'res_purchase_dm'           => '암흑물질 구매',
        'res_metal'                 => '금속',
        'res_crystal'               => '크리스탈',
        'res_deuterium'             => '중수소',
        'res_energy'                => '에너지',
        'res_dark_matter'           => '암흑물질',

        // Menu sidebar — item labels
        'menu_overview'             => '현황',
        'menu_resources'            => '자원',
        'menu_facilities'           => '시설',
        'menu_merchant'             => '상인',
        'menu_research'             => '연구',
        'menu_shipyard'             => '조선소',
        'menu_defense'              => '방어',
        'menu_fleet'                => '함대',
        'menu_galaxy'               => '은하',
        'menu_alliance'             => '동맹',
        'menu_officers'             => '장교 모집',
        'menu_shop'                 => '상점',
        'menu_directives'           => '지시',

        // Menu sidebar — icon tooltip titles
        'menu_rewards_title'        => '보상',
        'menu_resource_settings_title' => '자원 설정',
        'menu_jump_gate'            => '점프 게이트',
        'menu_resource_market_title' => '자원 시장',
        'menu_technology_title'     => '기술',
        'menu_fleet_movement_title' => '함대 이동',
        'menu_inventory_title'      => '인벤토리',

        // Planet sidebar
        'planets'                   => '행성',

        // Chat bar
        'contacts_online'           => ':count 명의 연락처 온라인',

        // Scroll button
        'back_to_top'               => '맨 위로',

        // Footer
        'all_rights_reserved'       => '모든 권리 보유.',
        'patch_notes'               => '패치 노트',
        'server_settings'           => '서버 설정',
        'help'                      => '도움말',
        'rules'                     => '규칙',
        'legal'                     => '법적 고지',
        'board'                     => '게시판',

        // JS — jsloca
        'js_internal_error'         => "이전에 알려지지 않은 오류가 발생했습니다. 안타깝게도 마지막 작업을 실행할 수 없습니다!",
        'js_notify_info'            => '정보',
        'js_notify_success'         => '성공',
        'js_notify_warning'         => '경고',
        'js_combatsim_planning'     => '계획 중',
        'js_combatsim_pending'      => '시뮬레이션 실행 중...',
        'js_combatsim_done'         => '완료',
        'js_msg_restore'            => '복원',
        'js_msg_delete'             => '삭제',
        'js_copied'                 => '클립보드에 복사됨',
        'js_report_operator'        => '이 메시지를 게임 운영자에게 신고하시겠습니까?',

        // JS — LocalizationStrings
        'js_time_done'              => '완료',
        'js_question'               => '질문',
        'js_ok'                     => '확인',
        'js_outlaw_warning'         => '더 강한 플레이어를 공격하려고 합니다. 이렇게 하면 공격 방어가 7일 동안 차단되고 모든 플레이어가 처벌 없이 공격할 수 있습니다. 계속하시겠습니까?',
        'js_last_slot_moon'         => '이 건물은 마지막 사용 가능한 건물 슬롯을 사용합니다. 더 많은 공간을 얻으려면 달 기지를 확장하십시오. 정말 이 건물을 건설하시겠습니까?',
        'js_last_slot_planet'       => '이 건물은 마지막 사용 가능한 건물 슬롯을 사용합니다. 더 많은 슬롯을 얻으려면 테라포머를 확장하거나 행성 필드 아이템을 구매하십시오. 정말 이 건물을 건설하시겠습니까?',
        'js_forced_vacation'        => '계정이 확인될 때까지 일부 게임 기능을 사용할 수 없습니다.',
        'js_more_details'           => '더 많은 세부 정보',
        'js_less_details'           => '더 적은 세부 정보',
        'js_planet_lock'            => '배치 잠금',
        'js_planet_unlock'          => '배치 잠금 해제',
        'js_activate_item_question' => '기존 아이템을 교체하시겠습니까? 이 과정에서 이전 보너스가 손실됩니다.',
        'js_activate_item_header'   => '아이템을 교체하시겠습니까?',

        // JS — chatLoca
        'chat_text_empty'           => '메시지가 어디 있습니까?',
        'chat_text_too_long'        => '메시지가 너무 깁니다.',
        'chat_same_user'            => '자신에게 메시지를 보낼 수 없습니다.',
        'chat_ignored_user'         => '이 플레이어를 무시했습니다.',
        'chat_not_activated'        => "이 기능은 계정 활성화 후에만 사용할 수 있습니다.",
        'chat_new_chats'            => '#+# 읽지 않은 메시지',
        'chat_more_users'           => '더 보기',

        // JS — eventboxLoca
        'eventbox_mission'          => '임무',
        'eventbox_missions'         => '임무',
        'eventbox_next'             => '다음',
        'eventbox_type'             => '유형',
        'eventbox_own'              => '자신',
        'eventbox_friendly'         => '우호적',
        'eventbox_hostile'          => '적대적',

        // JS — planetMoveLoca
        'planet_move_ask_title'     => '행성 이주',
        'planet_move_ask_cancel'    => '이 행성 이주를 취소하시겠습니까? 정상 대기 시간이 유지됩니다.',
        'planet_move_success'       => '행성 이주가 성공적으로 취소되었습니다.',

        // JS — locaPremium
        'premium_building_half'     => '총 건설 시간의 50%를 <b>750 암흑물질<\/b>로 단축하시겠습니까?',
        'premium_building_full'     => '건설 명령을 <b>750 암흑물질<\/b>로 즉시 완료하시겠습니까?',
        'premium_ships_half'        => '총 건조 시간의 50%를 <b>750 암흑물질<\/b>로 단축하시겠습니까?',
        'premium_ships_full'        => '건조 명령을 <b>750 암흑물질<\/b>로 즉시 완료하시겠습니까?',
        'premium_research_half'     => '총 연구 시간의 50%를 <b>750 암흑물질<\/b>로 단축하시겠습니까?',
        'premium_research_full'     => '연구 명령을 <b>750 암흑물질<\/b>로 즉시 완료하시겠습니까?',

        // JS — loca object
        'loca_error_not_enough_dm'  => '사용 가능한 암흑물질이 부족합니다! 지금 구매하시겠습니까?',
        'loca_notice'               => '참고',
        'loca_planet_giveup'        => '정말 행성 %planetName% %planetCoordinates%을(를) 포기하시겠습니까?',
        'loca_moon_giveup'          => '정말 달 %planetName% %planetCoordinates%을(를) 포기하시겠습니까?',

        // Welcome dialog
        'welcome_title'             => 'OGame에 오신 것을 환영합니다!',
        'welcome_message'           => '게임 시작을 돕기 위해 Commodore Nebula라는 이름을 지정해 드렸습니다. 사용자 이름을 클릭하여 언제든지 변경할 수 있습니다.<br/>함대 사령부에서 시작에 필요한 정보를 받은 편지함에 남겨두었으니 확인해 주세요.<br/><br/>즐거운 게임 되세요!',

        // Space dock wreckage icon
        'wreckage'                  => '잔해',
    ],

    // ── Highscore ───────────────────────────────────────────────────────────
    'highscore' => [
        'player_highscore'      => '플레이어 순위',
        'alliance_highscore'    => '동맹 순위',
        'own_position'          => '내 위치',
        'own_position_hidden'   => '내 위치 (-)',
        'points'                => '점수',
        'economy'               => '경제',
        'research'              => '연구',
        'military'              => '군사',
        'military_built'        => '건설된 군사 점수',
        'military_destroyed'    => '파괴된 군사 점수',
        'military_lost'         => '손실된 군사 점수',
        'honour_points'         => '명예 점수',
        'position'              => '순위',
        'player_name_honour'    => "플레이어 이름 (명예 점수)",
        'action'                => '행동',
        'alliance'              => '동맹',
        'member'                => '회원',
        'average_points'        => '평균 점수',
        'no_alliances_found'    => '동맹을 찾을 수 없습니다',
        'write_message'         => '메시지 작성',
        'buddy_request'         => '친구 요청',
        'buddy_request_to'      => '친구 요청 대상',
        'total_ships'           => '총 함선',
        'buddy_request_sent'    => '친구 요청이 성공적으로 전송되었습니다!',
        'buddy_request_failed'  => '친구 요청 전송에 실패했습니다.',
        'are_you_sure_ignore'   => '정말 무시하시겠습니까',
        'player_ignored'        => '플레이어가 성공적으로 무시되었습니다!',
        'player_ignored_failed' => '플레이어 무시에 실패했습니다.',
    ],

    // ── Premium / Officers ──────────────────────────────────────────────────
    'premium' => [
        'recruit_officers'           => '장교 모집',
        'your_officers'              => '당신의 장교',
        'intro_text'                 => '장교와 함께 제국을 가장 야심찬 꿈 이상의 규모로 이끌 수 있습니다 - 필요한 것은 암흑물질뿐이며 근로자와 조언자가 더욱 열심히 일할 것입니다!',
        'info_dark_matter'           => '암흑물질에 대한 자세한 정보',
        'info_commander'             => '사령관에 대한 자세한 정보',
        'info_admiral'               => '제독에 대한 자세한 정보',
        'info_engineer'              => '엔지니어에 대한 자세한 정보',
        'info_geologist'             => '지질학자에 대한 자세한 정보',
        'info_technocrat'            => '기술관료에 대한 자세한 정보',
        'info_commanding_staff'      => '사령부 직원에 대한 자세한 정보',
        'hire_commander_tooltip'     => '사령관 고용|+40 즐겨찾기, 건설 대기열, 바로가기, 운송 스캐너, 광고 없음* <span style=\'font-size: 10px; line-height: 10px\'>(*게임 관련 참조 제외)</span>',
        'hire_admiral_tooltip'       => "제독 고용|최대 함대 슬롯 +2,
최대 원정 +1,
향상된 함대 탈출률,
전투 시뮬레이션 저장 슬롯 +20",
        'hire_engineer_tooltip'      => '엔지니어 고용|방어 손실 절반 감소, +10% 에너지 생산',
        'hire_geologist_tooltip'     => '지질학자 고용|+10% 광산 생산',
        'hire_technocrat_tooltip'    => '기술관료 고용|+2 첩보 레벨, 연구 시간 25% 감소',
        'remaining_officers'         => ':current / :max',
        'benefit_fleet_slots_title'  => '동시에 더 많은 함대를 파견할 수 있습니다.',
        'benefit_fleet_slots'        => '최대 함대 슬롯 +1',
        'benefit_energy_title'       => '발전소와 태양광 위성이 2% 더 많은 에너지를 생산합니다.',
        'benefit_energy'             => '+2% 에너지 생산',
        'benefit_mines_title'        => '광산이 2% 더 많이 생산합니다.',
        'benefit_mines'              => '+2% 광산 생산',
        'benefit_espionage_title'    => '첩보 연구에 1레벨이 추가됩니다.',
        'benefit_espionage'          => '+1 첩보 레벨',
    ],

    // ── Shop ────────────────────────────────────────────────────────────────
    'shop' => [
        'page_title'               => '상점',
        'tooltip_shop'             => '여기서 아이템을 구매할 수 있습니다.',
        'tooltip_inventory'        => '여기서 구매한 아이템의 개요를 볼 수 있습니다.',
        'btn_shop'                 => '상점',
        'btn_inventory'            => '인벤토리',
        'category_special_offers'  => '특별 제안',
        'category_all'             => '전체',
        'category_resources'       => '자원',
        'category_buddy_items'     => '친구 아이템',
        'category_construction'    => '건설',
        'btn_get_more_resources'   => '더 많은 자원 얻기',
        'btn_purchase_dark_matter' => '암흑물질 구매',
        'feature_coming_soon'      => '기능 출시 예정',
        // Item tiers
        'tier_gold'                => '골드',
        'tier_silver'              => '실버',
        'tier_bronze'              => '브론즈',
        // Tooltip labels inside item cards
        'tooltip_duration'         => '기간',
        'duration_now'             => '즉시',
        'tooltip_price'            => '가격',
        'tooltip_in_inventory'     => '인벤토리에',
        'dark_matter'              => '암흑물질',
        'dm_abbreviation'          => 'DM',
        'item_duration'            => '기간',
        'now'                      => '즉시',
        'item_price'               => '가격',
        'item_in_inventory'        => '인벤토리에',
        // JS loca keys (consumed by inventory.js)
        'loca_extend'              => '연장',
        'loca_activate'            => '활성화',
        'loca_buy_activate'        => '구매 및 활성화',
        'loca_buy_extend'          => '구매 및 연장',
        'loca_buy_dm'              => '암흑물질이 부족합니다. 지금 구매하시겠습니까?',
    ],

    // -------------------------------------------------------------------------
    // Search overlay
    // -------------------------------------------------------------------------

    'search' => [
        'input_hint'              => '플레이어, 동맹 또는 행성 이름 입력',
        'search_btn'              => '검색',
        'tab_players'             => '플레이어 이름',
        'tab_alliances'           => '동맹/태그',
        'tab_planets'             => '행성 이름',
        'no_search_term'          => '검색어가 입력되지 않았습니다',
        'searching'               => '검색 중...',
        'search_failed'           => '검색에 실패했습니다. 다시 시도하십시오.',
        'no_results'              => '결과를 찾을 수 없습니다',
        'player_name'             => '플레이어 이름',
        'planet_name'             => '행성 이름',
        'coordinates'             => '좌표',
        'tag'                     => '태그',
        'alliance_name'           => '동맹 이름',
        'member'                  => '회원',
        'points'                  => '점수',
        'action'                  => '행동',
        'apply_for_alliance'      => '이 동맹 신청',
    ],

    // -------------------------------------------------------------------------
    // Notes overlay
    // -------------------------------------------------------------------------

    'notes' => [
        'no_notes_found'          => '메모를 찾을 수 없습니다',
    ],

    // -------------------------------------------------------------------------
    // Planet abandon / rename overlay
    // -------------------------------------------------------------------------

    'planet_abandon' => [
        // Page description
        'description'                   => '이 메뉴를 사용하여 행성 및 달 이름을 변경하거나 완전히 포기할 수 있습니다.',

        // Rename section
        'rename_heading'                => '이름 변경',
        'new_planet_name'               => '새 행성 이름',
        'new_moon_name'                 => '새 달 이름',
        'rename_btn'                    => '이름 변경',

        // Tooltips (HTML content – escaped automatically by {{ }} in title attributes)
        'tooltip_rules_title'           => '규칙',
        'tooltip_rename_planet'         => '여기서 행성 이름을 변경할 수 있습니다.<br /><br />행성 이름은 <span style="font-weight: bold;">2자에서 20자</span> 사이여야 합니다.<br />행성 이름에는 소문자, 대문자 및 숫자가 포함될 수 있습니다.<br />하이픈, 밑줄 및 공백을 포함할 수 있지만 다음과 같이 배치할 수 없습니다:<br />- 이름의 시작 또는 끝<br />- 서로 바로 옆<br />- 이름에 3번 이상',
        'tooltip_rename_moon'           => '여기서 달 이름을 변경할 수 있습니다.<br /><br />달 이름은 <span style="font-weight: bold;">2자에서 20자</span> 사이여야 합니다.<br />달 이름에는 소문자, 대문자 및 숫자가 포함될 수 있습니다.<br />하이픈, 밑줄 및 공백을 포함할 수 있지만 다음과 같이 배치할 수 없습니다:<br />- 이름의 시작 또는 끝<br />- 서로 바로 옆<br />- 이름에 3번 이상',

        // Abandon section headings
        'abandon_home_planet'           => '모성 포기',
        'abandon_moon'                  => '달 포기',
        'abandon_colony'                => '식민지 포기',
        'abandon_home_planet_btn'       => '모성 포기',
        'abandon_moon_btn'              => '달 포기',
        'abandon_colony_btn'            => '식민지 포기',

        // Abandon warnings
        'home_planet_warning'           => '모성을 포기하면 다음 로그인 시 즉시 다음으로 개척한 행성으로 이동됩니다.',
        'items_lost_moon'               => '달에 활성화된 아이템이 있으면 달을 포기할 때 손실됩니다.',
        'items_lost_planet'             => '행성에 활성화된 아이템이 있으면 행성을 포기할 때 손실됩니다.',

        // Abandon confirm form
        'confirm_password'              => ':type [:coordinates] 삭제를 확인하려면 비밀번호를 입력하십시오',
        'confirm_btn'                   => '확인',
        'type_moon'                     => '달',
        'type_planet'                   => '행성',

        // Validation messages (JS)
        'validation_min_chars'          => '문자가 부족합니다',
        'validation_pw_min'             => '입력한 비밀번호가 너무 짧습니다 (최소 4자)',
        'validation_pw_max'             => '입력한 비밀번호가 너무 깁니다 (최대 20자)',
        'validation_email'              => '유효한 이메일 주소를 입력해야 합니다!',
        'validation_special'            => '잘못된 문자가 포함되어 있습니다.',
        'validation_underscore'         => '이름은 밑줄로 시작하거나 끝날 수 없습니다.',
        'validation_hyphen'             => '이름은 하이픈으로 시작하거나 끝날 수 없습니다.',
        'validation_space'              => '이름은 공백으로 시작하거나 끝날 수 없습니다.',
        'validation_max_underscores'    => '이름에는 총 3개 이하의 밑줄이 포함될 수 있습니다.',
        'validation_max_hyphens'        => '이름에는 총 3개 이하의 하이픈이 포함될 수 있습니다.',
        'validation_max_spaces'         => '이름에는 총 3개 이하의 공백이 포함될 수 있습니다.',
        'validation_consec_underscores' => '두 개 이상의 밑줄을 연속으로 사용할 수 없습니다.',
        'validation_consec_hyphens'     => '두 개 이상의 하이픈을 연속으로 사용할 수 없습니다.',
        'validation_consec_spaces'      => '두 개 이상의 공백을 연속으로 사용할 수 없습니다.',

        // Controller messages
        'msg_invalid_planet_name'       => '새 행성 이름이 유효하지 않습니다. 다시 시도하십시오.',
        'msg_invalid_moon_name'         => '새 달 이름이 유효하지 않습니다. 다시 시도하십시오.',
        'msg_planet_renamed'            => '행성 이름이 성공적으로 변경되었습니다.',
        'msg_moon_renamed'              => '달 이름이 성공적으로 변경되었습니다.',
        'msg_wrong_password'            => '잘못된 비밀번호!',
        'msg_confirm_title'             => '확인',
        'msg_confirm_deletion'          => ':type [:coordinates] (:name) 삭제를 확인하면 해당 :type에 있는 모든 건물, 함선 및 방어 시스템이 계정에서 제거됩니다. :type에 활성화된 아이템이 있으면 :type을 포기할 때 손실됩니다. 이 프로세스는 되돌릴 수 없습니다!',
        'msg_reference'                 => '참고',
        'msg_abandoned'                 => ':type이(가) 성공적으로 포기되었습니다!',
        'msg_type_moon'                 => '달',
        'msg_type_planet'               => '행성',
        'msg_yes'                       => '예',
        'msg_no'                        => '아니오',
        'msg_ok'                        => '확인',
    ],

    // -------------------------------------------------------------------------
    // Rewards page
    // -------------------------------------------------------------------------
    'rewards' => [
        'page_title'          => '보상',
        'info_tooltip'        => '보상은 매일 배송되며 수동으로 수집할 수 있습니다. 7일째부터는 더 이상 보상이 발송되지 않습니다. 첫 번째 보상은 등록 2일째에 제공됩니다.',
        'new_awards'          => '새로운 보상',
        'awards_not_reached'  => '아직 도달하지 못한 보상',
        'collected_awards'    => '수집된 보상',
        'not_fulfilled'       => '충족되지 않음',

        // Reward items
        'reward_1_title'      => '황제여, 출발하라',
        'reward_1_text'       => '황제 중위 큐피드님께 인사드립니다!

식민지 함선의 보급품이 하역되어 이제 귀하의 세계를 발전시키는 데 도움이 될 것입니다. 제국의 개선을 추진할 완벽한 시기입니다!

행운을 빕니다!
OGame 스타터 지원',
        'reward_2_title'      => '식민지가 성장하고 있습니다!',
        'reward_2_text'       => '황제 중위 큐피드님께 인사드립니다!

부하들이 도움이 되고 싶어 합니다. 식민지 개선을 가속화하는 데 도움이 되는 KRAKEN 로봇을 제공했습니다. 생산을 늘리면 곧 제국이 엄청난 힘으로 꽃피울 것입니다!

행운을 빕니다!
OGame 스타터 지원',
        'reward_4_title'      => '공급과 수요',
        'reward_4_text'       => '황제 중위 큐피드님께 인사드립니다!

금속 저장소가 넘치고 크리스탈이 없어 조립 라인이 멈췄을 때는 자원 상인을 방문하기 좋은 시기입니다. 지금 그의 제안을 확인하는 것이 좋습니다.

행운을 빕니다!
OGame 스타터 지원',
        'reward_8_title'      => '기술을 통한 진보',
        'reward_8_text'       => '황제 중위 큐피드님께 인사드립니다!

식민지는 적 황제로부터 보호되어야 합니다. 로켓 발사기는 공격하는 우주선에 맞서 싸우는 효과적인 수단입니다. 새 집을 보호하십시오!

행운을 빕니다!
OGame 스타터 지원',
        'reward_16_title'     => '기술을 통한 진보',
        'reward_16_text'      => '황제 중위 큐피드님께 인사드립니다!

과학자들이 골머리를 앓고 있습니다. 열심히 일하는 그들을 조금 지원하는 것은 어떨까요? NEWTRON 로봇이 그들에게 유용할 것입니다.

행운을 빕니다!
OGame 스타터 지원',
        'reward_32_title'     => '우주를 정복하라',
        'reward_32_text'      => '황제 중위 큐피드님께 인사드립니다!

적의 장난감이 되고 싶지 않다면 군사력을 강화해야 합니다. DETROID 로봇은 조선소의 생산을 가속화할 수 있습니다. 그렇게 하면 함대가 항상 준비될 것입니다!

행운을 빕니다!
OGame 스타터 지원',
        'reward_64_title'     => '제국의 확장',
        'reward_64_text'      => '황제 중위 큐피드님께 인사드립니다!

강력한 제국의 기초가 마련되었습니다. 지휘 참모진이 이제 3일 동안 귀하의 제국 강화를 지원할 수 있습니다. 연구를 추진하면 곧 새로운 세계가 열리고 정착민들이 사용할 수 있게 될 것입니다!

행운을 빕니다!
OGame 스타터 지원',
    ],

    // -------------------------------------------------------------------------
    // Chat page
    // -------------------------------------------------------------------------
    'chat' => [
        'page_title'          => '채팅',
        'buddy'               => '친구',
        'your_alliance'       => '내 동맹',
        'online'              => '온라인',
        'offline'             => '오프라인',
        'status_not_visible'  => '상태가 보이지 않음',
        'highscore_ranking'   => '하이스코어 순위',
        'alliance'            => '동맹',
        'planet'              => '행성',
        'no_messages_yet'     => '아직 메시지가 없습니다. 대화를 시작하세요!',
        'submit'              => '전송',
        'alliance_chat'       => '동맹 채팅',
        'list_of_chats'       => '채팅 목록',
        'alliance_group_chat' => '동맹 그룹 채팅',
        'no_conversations'    => '아직 대화가 없습니다.',
        'player_list'         => '플레이어 목록',
        'buddies'             => '친구',
        'no_buddies'          => '친구 없음',
        'strangers'           => '낯선 사람',
        'no_strangers'        => '낯선 사람 없음',
    ],

    // -------------------------------------------------------------------------
    // Character class page
    // -------------------------------------------------------------------------
    'characterclass' => [
        'page_title'             => '클래스 선택',
        'choose_class_title'     => '클래스를 선택하세요',
        'choose_class_desc'      => '추가 혜택을 받으려면 클래스를 선택하십시오. 오른쪽 상단의 클래스 선택 섹션에서 클래스를 변경할 수 있습니다.',
        'deactivate'             => '비활성화',
        'select_for_free'        => '무료로 선택',
        'buy_for'                => '구매 가격',
        'select_title'           => '캐릭터 클래스 선택',
        'confirm'                => '확인',
        'cancel'                 => '취소',
        'activate_free_confirm'  => ':className 클래스를 무료로 활성화하시겠습니까?',
        'activate_paid_confirm'  => ':price 다크 매터로 :className 클래스를 활성화하시겠습니까? 그렇게 하면 현재 클래스를 잃게 됩니다.',
        'selected_success'       => '캐릭터 클래스가 성공적으로 선택되었습니다!',
        'not_enough_dm_title'    => '다크 매터 부족',
        'not_enough_dm_desc'     => '다크 매터가 충분하지 않습니다! 지금 구매하시겠습니까?',
        'buy_dm'                 => '다크 매터 구매',
        'error_occurred'         => '오류가 발생했습니다. 다시 시도하십시오.',
        'deactivate_title'       => '캐릭터 클래스 비활성화',
        'deactivate_confirm'     => '정말로 캐릭터 클래스를 비활성화하시겠습니까? 재활성화에는 :cost 다크 매터가 필요합니다.',
        'deactivated_success'    => '캐릭터 클래스가 성공적으로 비활성화되었습니다!',
    ],

    // -------------------------------------------------------------------------
    // Admin menu (admin-menu.blade.php)
    // -------------------------------------------------------------------------
    'admin_menu' => [
        'brand'                  => '시스템 관리',
        'home'                   => '홈',
        'users'                  => '사용자 관리',
        'translations'           => '번역 관리',
        'developer_shortcuts'    => '개발자 단축키',
        'server_settings'        => '서버 설정',
        'fleet_timing'           => '함대 타이밍',
        'rules_legal'            => '규칙 및 약관',
        'server_administration'  => '서버 관리',
    ],

    // -------------------------------------------------------------------------
    // Admin: Fleet Timing (admin/fleettiming.blade.php)
    // -------------------------------------------------------------------------
    'admin' => [
        'fleet_timing' => [
            'title'                     => '함대 타이밍 제어',
            'active_missions'           => '활성 미션',
            'server_time'               => '서버 시간',
            'refresh'                   => '새로고침',
            'filter_by_player'          => '플레이어 필터',
            'player'                    => '플레이어',
            'active'                    => '활성',
            'search'                    => '검색',
            'go'                        => '이동',
            'clear'                     => '지우기',
            'results_per_page'          => '페이지당 결과',
            'global_action'             => '전역 액션',
            'confirm_fast_forward_all'  => '모든 활성 미션을 즉시 도착시키시겠습니까?',
            'sets_arrival_now'          => '모든 보이는 미션의 time_arrival을 현재로, time_holding을 0으로 설정합니다.',
            'arrive_all_this_player'    => '모두 즉시 도착 (이 플레이어)',
            'arrive_all_all_players'    => '모두 즉시 도착 (모든 플레이어)',
            'no_missions'               => '활성 함대 미션을 찾을 수 없습니다.',
            'id'                        => 'ID',
            'type'                      => '유형',
            'from'                      => '출발지',
            'to'                        => '목적지',
            'hold_s'                    => '대기 (초)',
            'departure'                 => '출발',
            'arrival'                   => '도착',
            'time_left'                 => '남은 시간',
            'actions'                   => '작업',
            'user_id'                   => '사용자 #:id',
            'type_id'                   => '유형 :id',
            'arrived'                   => '도착함',
            'hold'                      => '대기',
            'now'                       => '즉시',
            'confirm_arrive_mission'    => '미션 #:id를 즉시 도착시키시겠습니까?',
            'min'                       => '분',
            'reduce'                    => '감소',
            'showing_range'             => ':total개 미션 중 :first–:last 표시',
            'previous'                  => '이전',
            'next'                      => '다음',
            'showing_total'             => ':total개 미션 표시',
        ],
        'translations' => [
            'title'                 => '번역 관리',
            'select_namespace'      => '네임스페이스를 선택하여 en/ko 번역을 편집하세요.',
            'total_ns'              => '전체 NS',
            'total_keys'            => '전체 키',
            'translated'            => '번역 완료',
            'untranslated'          => '미번역',
            'placeholder_mismatch'  => 'placeholder 불일치',
            'ko_translation_rate'   => 'ko 번역률',
            'placeholder_ok'        => 'placeholder OK',
            'mismatch_count'        => 'mismatch: :count',
        ],
        'server_settings' => [
            'title' => '서버 설정',
            'basic_settings' => '기본 설정.',
            'universe_name' => '우주 이름:',
            'change_info' => '아래에서 서버 설정을 변경할 수 있습니다. 변경사항은 즉시 적용됩니다.',
            'economy_speed' => '경제 속도:',
            'research_speed' => '연구 속도:',
            'war_fleet_speed' => '전쟁 함대 속도:',
            'holding_fleet_speed' => '대기 함대 속도:',
            'peaceful_fleet_speed' => '평화 함대 속도:',
            'planet_fields_bonus' => '행성 필드 보너스',
            'basic_income_note' => '참고: 아래 기본 수입 값은 경제 속도가 곱해집니다.',
            'basic_metal_income' => '시간당 기본 금속 수입:',
            'basic_crystal_income' => '시간당 기본 크리스탈 수입:',
            'basic_deuterium_income' => '시간당 기본 듀테륨 수입:',
            'basic_energy_income' => '시간당 기본 에너지 수입:',
            'new_player_settings' => '신규 플레이어 설정.',
            'registration_planet_amount' => '등록 시 플레이어에게 제공할 행성 수',
            'dark_matter_bonus' => '암흑 물질 보너스:',
            'dark_matter_regen_settings' => '암흑 물질 재생 설정.',
            'dark_matter_regen_info' => '모든 플레이어에 대한 주기적인 암흑 물질 재생을 활성화합니다. 이는 공식 게임 동작과 일치하도록 기본적으로 비활성화되어 있습니다. 활성화하면 플레이어는 설정된 간격으로 자동으로 암흑 물질을 받게 됩니다.',
            'dark_matter_regen_enabled' => '암흑 물질 재생 활성화:',
            'dark_matter_regen_amount' => '암흑 물질 재생 수량:',
            'dark_matter_regen_period' => '암흑 물질 재생 주기 (초):',
            'planet_relocation_settings' => '행성 이전 설정.',
            'planet_relocation_cost' => '행성 이전 비용 (암흑 물질):',
            'planet_relocation_duration' => '행성 이전 소요 시간 (초):',
            'alliance_settings' => '동맹 설정.',
            'alliance_cooldown_days' => '동맹 쿨다운 (일):',
            'alliance_cooldown_desc' => '동맹 탈퇴 후 다른 동맹에 가입하거나 생성하기 전 대기해야 하는 일수',
            'battle_settings' => '전투 설정.',
            'battle_engine' => '전투 엔진:',
            'battle_engine_desc' => 'Rust 전투 엔진은 PHP보다 최대 200배 더 우수한 성능을 제공합니다. 서버에서 Rust를 실행할 수 없는 경우에만 PHP로 전환하세요.',
            'alliance_combat_system' => '동맹 전투 시스템:',
            'debris_field_from_ships' => '파괴된 함선의 잔해장 비율:',
            'debris_field_from_defense' => '방어 구조물의 잔해장 비율:',
            'debris_field_deuterium' => '잔해장의 듀테륨:',
            'wreck_field_min_resources_loss' => '난파장 생성 최소 파괴량:',
            'wreck_field_min_resources_loss_desc' => '난파장 생성을 위해 손실되어야 하는 최소 자원 가치.',
            'wreck_field_min_fleet_percentage' => '최소 함대 파괴 비율:',
            'wreck_field_min_fleet_percentage_desc' => '난파장 생성을 위해 파괴되어야 하는 방어자 함대의 최소 비율.',
            'wreck_field_lifetime_hours' => '난파장 수명 (시간):',
            'wreck_field_lifetime_hours_desc' => '수리하지 않으면 난파장이 만료되는 시간.',
            'wreck_field_repair_max_hours' => '최대 수리 시간 (시간):',
            'wreck_field_repair_max_hours_desc' => '우주 도크에서 함선 수리를 위한 최대 시간.',
            'wreck_field_repair_min_minutes' => '최소 수리 시간 (분):',
            'wreck_field_repair_min_minutes_desc' => '우주 도크에서 함선을 수리하기 전 최소 대기 시간.',
            'maximum_moon_chance' => '최대 달 생성 확률:',
            'hamill_probability' => '하밀 기동 확률 (X분의 1 확률):',
            'expedition_settings' => '원정 설정.',
            'expedition_slots_rewards' => '원정 슬롯 및 보상 배수.',
            'expedition_slots_rewards_desc' => '보너스 원정 슬롯은 천체물리학 연구의 기본 슬롯에 추가됩니다. 보상 배수는 경제 속도와 곱해지며 최종 보상 금액에 적용됩니다 (1.0 = 기본, 2.0 = 2배 보상).',
            'bonus_expedition_slots' => '보너스 원정 슬롯:',
            'expedition_reward_multiplier_resources' => '자원 보상 배수:',
            'expedition_reward_multiplier_ships' => '함선 보상 배수:',
            'expedition_reward_multiplier_dark_matter' => '암흑 물질 보상 배수:',
            'expedition_reward_multiplier_items' => '아이템 보상 배수:',
            'expedition_outcome_weights' => '원정 결과 가중치.',
            'expedition_outcome_weights_desc' => '결과 가중치는 각 원정 결과의 상대적 확률을 결정합니다. 값이 높을수록 발생 빈도가 높습니다. 가중치는 서로 상대적입니다 (예: 가중치 20은 가중치 10보다 2배 더 자주 발생). 결과를 비활성화하려면 0으로 설정하세요.',
            'expedition_default_percentages' => '기본 비율:',
            'expedition_default_percentages_values' => '아무것도 없음: 25% | 자원: 35% | 함선: 17% | 지연: 7.5% | 가속: 2.75% | 암흑 물질: 7.5% | 해적: 3% | 외계인: 1.5% | 아이템: 0.5% | 상인: 0.4% | 블랙홀: 0.2%',
            'expedition_weight_ships' => '함선 가중치:',
            'expedition_weight_resources' => '자원 가중치:',
            'expedition_weight_delay' => '지연 가중치:',
            'expedition_weight_speedup' => '가속 가중치:',
            'expedition_weight_nothing' => '아무것도 없음/실패 가중치:',
            'expedition_weight_black_hole' => '블랙홀 가중치:',
            'expedition_weight_pirates' => '해적 가중치:',
            'expedition_weight_aliens' => '외계인 가중치:',
            'expedition_weight_dark_matter' => '암흑 물질 가중치:',
            'expedition_weight_merchant' => '상인 가중치:',
            'expedition_weight_items' => '아이템 가중치:',
            'highscore_settings' => '명예의 전당 설정.',
            'highscore_admin_visible' => '명예의 전당에 관리자 표시:',
            'highscore_admin_visible_desc' => '활성화하면 관리자 사용자는 주황색으로 강조된 이름으로 명예의 전당에 표시됩니다. 비활성화 (기본값)하면 관리자는 순위에서 완전히 제외됩니다.',
            'galaxy_settings' => '은하 설정.',
            'ignore_empty_systems' => '빈 시스템 무시:',
            'ignore_inactive_systems' => '비활성 시스템 무시:',
            'number_of_galaxies' => '은하 수:',
            'save_settings' => '설정 저장',
        ],
        'server_administration' => [
            'title' => '서버 관리',
            'masquerade_title' => '사용자로 가장',
            'username' => '사용자명:',
            'enter_username' => '사용자명 입력',
            'masquerade_button' => '가장하기',
            'flagged_accounts' => '플래그된 계정',
            'no_suspicious_accounts' => '의심스러운 계정이 감지되지 않았습니다.',
            'dismissed' => '무시됨',
            'shared_ip_groups' => '공유 IP 그룹',
            'unusual_activity' => '비정상적인 활동',
            'id' => 'ID',
            'username_header' => '사용자명',
            'email' => '이메일',
            'registered' => '등록일',
            'last_active' => '마지막 활동',
            'status' => '상태',
            'action' => '작업',
            'banned' => '차단됨',
            'active' => '활성',
            'quick_ban' => '빠른 차단',
            'unban' => '차단 해제',
            'dismiss' => '무시',
            'cross_account_missions' => '계정 간 임무 감지됨',
            'round_the_clock' => '24시간 활동',
            'instant_redispatch' => '즉시 재파견',
            'instant_fleetsave' => '즉시 함대 저장',
            'bot_detection_settings' => '봇 탐지 설정',
            'signal_1_title' => '신호 1 — 24시간 활동',
            'signal_2_title' => '신호 2 — 즉시 원정 재파견',
            'signal_3_title' => '신호 3 — 공격 후 즉시 함대 저장',
            'lookback_period' => '조회 기간 (일):',
            'min_active_hours' => '최소 활동 시간/일:',
            'min_missions_per_slot' => '최소 임무/슬롯/일:',
            'min_total_missions' => '최소 총 임무 수 (하한):',
            'max_redispatch_gap' => '최대 재파견 간격 (초):',
            'min_occurrences' => '플래그 최소 발생 횟수:',
            'max_reaction_gap' => '최대 반응 간격 (초):',
            'save_settings' => '설정 저장',
            'refresh_detection' => '탐지 결과 새로 고침',
            'ban_player_title' => '플레이어 차단',
            'reason' => '사유:',
            'reason_for_ban' => '차단 사유',
            'reason_header' => '사유',
            'duration' => '기간:',
            'duration_1_day' => '1일',
            'duration_3_days' => '3일',
            'duration_7_days' => '7일',
            'duration_30_days' => '30일',
            'duration_permanent' => '영구',
            'ban_player' => '플레이어 차단',
            'banned_players_title' => '현재 차단된 플레이어',
            'no_banned_players' => '현재 차단된 플레이어가 없습니다.',
            'banned_until' => '차단 종료일',
            'banned_at' => '차단일',
            'ban_history_title' => '차단 이력',
        ],
        'developer_shortcuts' => [
            'title' => '개발자 단축키',
            'update_current_planet' => '현재 행성 업데이트:',
            'set_all_mines' => '모든 광산을 레벨 30으로 설정',
            'set_all_storages' => '모든 저장소를 레벨 15로 설정',
            'set_all_shipyard' => '모든 조선소 시설을 레벨 12로 설정',
            'set_all_research_10' => '모든 연구를 레벨 10으로 설정',
            'add_x_units' => '현재 행성에 유닛 X개 추가:',
            'amount_of_units' => '추가할 유닛 수:',
            'light_fighter' => '경전투기',
            'set_building_level' => '현재 행성의 건물 레벨 설정:',
            'level_to_set' => '설정할 레벨:',
            'set_research_level' => '현재 플레이어의 연구 레벨 설정:',
            'character_class_settings' => '캐릭터 클래스 설정',
            'disable_free_class_changes' => '무료 클래스 변경 비활성화',
            'enable_free_class_changes' => '무료 클래스 변경 활성화',
            'reset_character_class' => '캐릭터 클래스 초기화',
            'go_to_class_selection' => '클래스 선택으로 이동',
            'reset_planet' => '행성 초기화',
            'set_buildings_to_0' => '모든 건물을 레벨 0으로 설정',
            'set_research_to_0' => '모든 연구를 레벨 0으로 설정',
            'remove_all_units' => '모든 유닛 제거',
            'set_resources_to_0' => '모든 자원을 0으로 설정',
            'add_subtract_resources' => '좌표에서 자원 추가/차감:',
            'resources_desc' => '선택한 자원에 추가하거나 차감할 양수 또는 음수 값을 입력할 수 있습니다. k/m/b 접미사를 지원합니다 (예: 1k, 2m, 3b)',
            'coordinates' => '좌표:',
            'galaxy' => '은하:',
            'system' => '시스템:',
            'position' => '위치:',
            'resources_to_add_subtract' => '추가/차감할 자원:',
            'create_planet_moon' => '좌표에 행성/달 생성:',
            'moon_size' => '달 크기 (달 생성용):',
            'debris_amount' => '잔해 양:',
            'x_factor' => 'X 계수 (10-20):',
            'create_planet' => '행성 생성',
            'create_moon' => '달 생성',
            'delete_planet' => '행성 삭제',
            'delete_moon' => '달 삭제',
            'create_delete_debris' => '좌표에 잔해장 생성/삭제:',
            'resources_to_add' => '추가할 자원:',
            'create_append_debris' => '잔해장 생성/추가',
            'delete_debris_field' => '잔해장 삭제',
            'add_subtract_dark_matter' => '좌표의 플레이어에 대한 암흑 물질 추가/차감:',
            'dark_matter_desc' => '암흑 물질을 추가하려면 양수 값을, 차감하려면 음수 값을 입력하세요. k/m/b 접미사를 지원합니다.',
            'dark_matter_amount' => '암흑 물질 양:',
            'update_dark_matter' => '암흑 물질 업데이트',
        ],
    ],
];
