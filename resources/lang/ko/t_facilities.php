<?php

return [
    // Space Dock Building
    'space_dock' => [
        'name' => '우주 도크',
        'description' => '우주 도크에서 잔해를 수리할 수 있습니다.',
        'description_long' => '우주 도크는 전투에서 파괴되어 잔해가 된 함선을 수리할 수 있습니다. 수리 시간은 최대 12시간이며, 함선을 다시 투입하기까지 최소 30분이 소요됩니다.

우주 도크는 궤도에 떠 있으므로 행성 필드를 차지하지 않습니다.',
        'requirements' => '조선소 레벨 2 필요',
        'field_consumption' => '행성 필드를 차지하지 않습니다 (궤도 체류)',

        // Space Dock Interface
        'wreck_field_section' => '잔해 필드',
        'no_wreck_field' => '이 위치에 사용 가능한 잔해 필드가 없습니다.',
        'wreck_field_info' => '수리 가능한 함선이 포함된 잔해 필드가 있습니다.',
        'ships_available' => '수리 가능한 함선: {count}척',
        'repair_capacity' => '우주 도크 레벨 {level} 기준 수리 용량',

        // Repair Actions
        'start_repair' => '잔해 필드 수리 시작',
        'repair_in_progress' => '수리 진행 중',
        'repair_completed' => '수리 완료',
        'deploy_ships' => '수리된 함선 배치',
        'burn_wreck_field' => '잔해 필드 소각',

        // Repair Information
        'repair_time' => '예상 수리 시간: {time}',
        'repair_progress' => '수리 진행률: {progress}%',
        'completion_time' => '완료: {time}',
        'auto_deploy_warning' => '수동으로 배치하지 않으면 수리 완료 후 {hours}시간 뒤에 함선이 자동으로 배치됩니다.',

        // Level Effects
        'level_effects' => [
            'repair_speed' => '수리 속도 {bonus}% 증가',
            'capacity_increase' => '수리 가능한 최대 함선 수 증가',
        ],

        // Status Messages
        'status' => [
            'no_dock' => '잔해 필드를 수리하려면 우주 도크가 필요합니다',
            'level_too_low' => '잔해 필드를 수리하려면 우주 도크 레벨 1이 필요합니다',
            'no_wreck_field' => '사용 가능한 잔해 필드가 없습니다',
            'repairing' => '잔해 필드 수리 중',
            'ready_to_deploy' => '수리 완료, 함선 배치 준비 완료',
        ],
    ],

    // General Facilities Messages
    'actions' => [
        'build' => '건설',
        'upgrade' => '레벨 {level}(으)로 업그레이드',
        'downgrade' => '레벨 {level}(으)로 다운그레이드',
        'demolish' => '철거',
        'cancel' => '취소',
    ],

    // Requirements
    'requirements' => [
        'met' => '요구사항 충족',
        'not_met' => '요구사항 미충족',
        'research' => '연구: {requirement}',
        'building' => '건물: {requirement} 레벨 {level}',
    ],

    // Resources
    'cost' => [
        'metal' => '금속: {amount}',
        'crystal' => '크리스탈: {amount}',
        'deuterium' => '중수소: {amount}',
        'energy' => '에너지: {amount}',
        'dark_matter' => '암흑물질: {amount}',
        'total' => '총 비용: {amount}',
    ],

    // Time
    'construction_time' => '건설 시간: {time}',
    'upgrade_time' => '업그레이드 시간: {time}',
];
