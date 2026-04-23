<?php
// i18n-ko seed: copied from en on 2026-04-22. Translate values in Phase 3.

return [
    /*
    |--------------------------------------------------------------------------
    | Outgame / Landing page - English
    |--------------------------------------------------------------------------
    */

    // Browser outdated warning
    'browser_warning' => [
        'title'  => '브라우저가 최신 버전이 아닙니다.',
        'desc1'  => 'Internet Explorer 버전이 기존 표준을 충족하지 못하며 이 웹사이트에서 더 이상 지원되지 않습니다.',
        'desc2'  => '이 웹사이트를 사용하려면 웹 브라우저를 최신 버전으로 업데이트하거나 다른 웹 브라우저를 사용하세요. 이미 최신 버전을 사용 중이라면 페이지를 새로고침하여 올바르게 표시하세요.',
        'desc3'  => "가장 인기 있는 브라우저 목록입니다. 기호 중 하나를 클릭하여 다운로드 페이지로 이동하세요:",
    ],

    // Login form (header)
    'login' => [
        'page_title'        => 'OGame - 우주를 정복하라',
        'btn'               => '로그인',
        'email_label'       => '이메일 주소:',
        'password_label'    => '비밀번호:',
        'universe_label'    => '유니버스:',
        'universe_option_1' => '1. 유니버스',
        'submit'            => '로그인',
        'forgot_password'   => '비밀번호를 잊으셨나요?',
        'forgot_email'      => '이메일 주소를 잊으셨나요?',
        'terms_accept_html' => '로그인함으로써 <a class="" href="#" target="_blank" title="이용약관">이용약관</a>에 동의합니다',
    ],

    // Registration form (sidebar)
    'register' => [
        'play_free'    => '무료로 플레이하세요!',
        'email_label'  => '이메일 주소:',
        'password_label' => '비밀번호:',
        'universe_label' => '유니버스:',
        'distinctions' => '수상 내역',
        'terms_html'   => '게임에서 <a class="" target="_blank" href="#" title="이용약관"> 이용약관 </a> 및 <a class="" target="_blank" href="#" title="개인정보 처리방침"> 개인정보 처리방침 </a>이 적용됩니다',
        'submit'       => '가입',
    ],

    // Top navigation tabs
    'nav' => [
        'home'  => '홈',
        'about' => 'OGame 소개',
        'media' => '미디어',
        'wiki'  => '위키',
    ],

    // Home tab content
    'home' => [
        'title'            => 'OGame - 우주를 정복하라',
        'description_html' => '<em>OGame</em>은 전 세계 수천 명의 플레이어가 동시에 경쟁하는 우주 배경 전략 게임입니다. 일반 웹 브라우저만 있으면 플레이할 수 있습니다.',
        'board_btn'        => '게시판',
        'trailer_title'    => '트레일러',
    ],

    // Footer
    'footer' => [
        'legal'          => '법적 고지',
        'privacy_policy' => '개인정보 처리방침',
        'terms'          => '이용약관',
        'contact'        => '문의',
        'rules'          => '규칙',
        'copyright'      => '© OGameX. All rights reserved.',
    ],

    // Inline JS strings
    'js' => [
        'login'            => '로그인',
        'close'            => '닫기',
        'age_check_failed' => '죄송합니다. 가입 자격이 없습니다. 자세한 내용은 이용약관을 참조하세요.',
    ],

    // jQuery ValidationEngine strings
    'validation' => [
        'required'                  => '필수 입력 항목입니다',
        'make_decision'             => '선택해주세요',
        'accept_terms'              => '이용약관에 동의해야 합니다.',
        'length'                    => '3자에서 20자 사이로 입력하세요.',
        'pw_length'                 => '4자에서 20자 사이로 입력하세요.',
        'email'                     => '유효한 이메일 주소를 입력해야 합니다!',
        'invalid_chars'             => '잘못된 문자가 포함되어 있습니다.',
        'no_begin_end_underscore'   => '이름은 밑줄로 시작하거나 끝날 수 없습니다.',
        'no_begin_end_whitespace'   => '이름은 공백으로 시작하거나 끝날 수 없습니다.',
        'max_three_underscores'     => '이름에는 밑줄이 총 3개를 초과할 수 없습니다.',
        'max_three_whitespaces'     => '이름에는 공백이 총 3개를 초과할 수 없습니다.',
        'no_consecutive_underscores' => '밑줄을 연속으로 2개 이상 사용할 수 없습니다.',
        'no_consecutive_whitespaces' => '공백을 연속으로 2개 이상 사용할 수 없습니다.',
        'username_available'        => '이 사용자명을 사용할 수 있습니다.',
        'username_loading'          => '잠시만 기다려주세요, 불러오는 중...',
        'username_taken'            => '이 사용자명은 더 이상 사용할 수 없습니다.',
        'only_letters'              => '문자만 사용하세요.',
    ],

    // Universe selection characteristics tooltip texts
    'universe_characteristics' => [
        'fleet_speed'     => '함대 속도: 값이 높을수록 공격에 반응할 시간이 줄어듭니다.',
        'economy_speed'   => '경제 속도: 값이 높을수록 건설과 연구가 빠르게 완료되고 자원이 빠르게 수집됩니다.',
        'debris_ships'    => '전투에서 파괴된 함선의 일부가 잔해 필드에 진입합니다.',
        'debris_defence'  => '전투에서 파괴된 방어 구조물의 일부가 잔해 필드에 진입합니다.',
        'dark_matter_gift' => '이메일 주소를 확인하면 보상으로 암흑물질을 받습니다.',
        'aks_on'          => '동맹 전투 시스템 활성화됨',
        'planet_fields'   => '건물 슬롯의 최대 개수가 증가했습니다.',
        'wreckfield'      => '우주 도크 활성화됨: 파괴된 함선 일부를 우주 도크를 사용하여 복원할 수 있습니다.',
        'universe_big'    => '유니버스의 은하 수',
    ],
];
