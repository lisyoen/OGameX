<?php

return [
    // Wreck Field Information and Status
    'wreck_field' => '잔해 필드',
    'wreck_field_formed' => '좌표 {coordinates}에 잔해 필드가 생성되었습니다',
    'wreck_field_expired' => '잔해 필드가 만료되었습니다',
    'wreck_field_burned' => '잔해 필드가 소각되었습니다',

    // Wreck Field Conditions
    'formation_conditions' => '최소 {min_resources}의 자원이 손실되고 방어 함대의 {min_percentage}% 이상이 파괴되면 잔해 필드가 생성됩니다.',
    'resources_lost' => '손실 자원: {amount}',
    'fleet_percentage' => '파괴된 함대: {percentage}%',

    // Repair Information
    'repair_time' => '수리 시간',
    'repair_progress' => '수리 진행률',
    'repair_completed' => '수리 완료',
    'repairs_underway' => '수리 진행 중',
    'repair_duration_min' => '최소 수리 시간: {minutes}분',
    'repair_duration_max' => '최대 수리 시간: {hours}시간',
    'repair_speed_bonus' => '우주 도크 레벨 {level}이(가) {bonus}% 수리 속도 보너스를 제공합니다',

    // Ships in Wreck Field
    'ships_in_wreck_field' => '잔해 필드 내 함선',
    'ship_type' => '함선 종류',
    'quantity' => '수량',
    'repairable' => '수리 가능',
    'total_ships' => '총 함선: {count}',

    // Actions
    'start_repairs' => '수리 시작',
    'complete_repairs' => '수리 완료',
    'burn_wreck_field' => '잔해 필드 소각',
    'cancel_repairs' => '수리 취소',

    // Action Messages
    'repair_started' => '수리가 시작되었습니다. 완료 시간: {time}',
    'repairs_completed' => '모든 수리가 완료되었습니다. 함선 배치 준비 완료.',
    'wreck_field_burned_success' => '잔해 필드를 성공적으로 소각했습니다.',
    'cannot_repair' => '이 잔해 필드는 수리할 수 없습니다.',
    'cannot_burn' => '수리 진행 중에는 잔해 필드를 소각할 수 없습니다.',

    // Galaxy View
    'wreck_field_icon' => '잔해',
    'wreck_field_tooltip' => '잔해 필드 ({time_remaining} 남음)',
    'click_to_repair' => '수리하려면 클릭하여 우주 도크로 이동',
    'no_wreck_field' => '잔해 필드 없음',

    // Space Dock Integration
    'space_dock_required' => '잔해 필드를 수리하려면 우주 도크 레벨 1이 필요합니다.',
    'space_dock_level' => '우주 도크 레벨: {level}',
    'upgrade_space_dock' => '더 많은 함선을 수리하려면 우주 도크를 업그레이드하세요',
    'repair_capacity_reached' => '최대 수리 용량에 도달했습니다. 우주 도크를 업그레이드하여 용량을 늘리세요.',

    // Battle Reports
    'wreck_field_section' => '잔해 필드 정보',
    'ships_available_for_repair' => '수리 가능한 함선: {count}',
    'wreck_field_resources' => '잔해 필드에 약 {value}에 해당하는 함선이 있습니다.',

    // Admin Settings
    'settings_title' => '잔해 필드 설정',
    'enabled_description' => '잔해 필드는 우주 도크를 통해 파괴된 함선을 복구할 수 있습니다. 파괴가 특정 조건을 충족하면 함선을 수리할 수 있습니다.',
    'percentage_setting' => '잔해 필드에 남는 파괴 함선 비율:',
    'min_resources_setting' => '잔해 필드 생성 최소 파괴량:',
    'min_fleet_percentage_setting' => '최소 함대 파괴 비율:',
    'lifetime_setting' => '잔해 필드 지속 시간 (시간):',
    'repair_max_time_setting' => '최대 수리 시간 (시간):',
    'repair_min_time_setting' => '최소 수리 시간 (분):',

    // Errors and Warnings
    'error_no_wreck_field' => '이 위치에 잔해 필드가 없습니다.',
    'error_not_owner' => '이 잔해 필드의 소유자가 아닙니다.',
    'error_already_repairing' => '수리가 이미 진행 중입니다.',
    'error_no_ships' => '수리 가능한 함선이 없습니다.',
    'error_space_dock_required' => '잔해 필드를 수리하려면 우주 도크 레벨 1이 필요합니다.',
    'error_cannot_collect_late_added' => '수리 진행 중에 추가된 함선은 수동으로 회수할 수 없습니다. 모든 수리가 자동으로 완료될 때까지 기다려야 합니다.',
    'warning_auto_return' => '수리된 함선은 수리 완료 후 {hours}시간 뒤에 자동으로 투입됩니다.',

    // Time Remaining
    'time_remaining' => '{hours}시간 {minutes}분 남음',
    'expires_soon' => '곧 만료',
    'repair_time_remaining' => '수리 완료: {time}',

    // Status Messages
    'status_active' => '활성',
    'status_repairing' => '수리 중',
    'status_completed' => '완료',
    'status_burned' => '소각됨',
    'status_expired' => '만료',

    // Action Results
    'repairs_started' => '수리를 시작했습니다',
    'all_ships_deployed' => '모든 함선이 투입되었습니다',
    'no_ships_ready' => '회수할 함선이 없습니다',
    'repairs_not_started' => '수리가 아직 시작되지 않았습니다',
];
