<?php
// i18n-ko seed: copied from en on 2026-04-22. Translate values in Phase 3.

return [
    // Error messages
    'error' => [
        'cannot_send_to_self' => '자신에게 친구 요청을 보낼 수 없습니다.',
        'user_not_found' => '사용자를 찾을 수 없습니다.',
        'cannot_send_to_admin' => '관리자에게는 친구 요청을 보낼 수 없습니다.',
        'cannot_send_to_user' => '이 사용자에게 친구 요청을 보낼 수 없습니다.',
        'already_buddies' => '이 사용자와 이미 친구입니다.',
        'request_exists' => '두 사용자 사이에 이미 친구 요청이 존재합니다.',
        'request_not_found' => '친구 요청을 찾을 수 없습니다.',
        'not_authorized_accept' => '이 요청을 수락할 권한이 없습니다.',
        'not_authorized_reject' => '이 요청을 거절할 권한이 없습니다.',
        'not_authorized_cancel' => '이 요청을 취소할 권한이 없습니다.',
        'already_processed' => '이 요청은 이미 처리되었습니다.',
        'relationship_not_found' => '친구 관계를 찾을 수 없습니다.',
        'cannot_ignore_self' => '자신을 무시할 수 없습니다.',
        'already_ignored' => '플레이어가 이미 무시 목록에 있습니다.',
        'not_in_ignore_list' => '플레이어가 무시 목록에 없습니다.',
        'send_request_failed' => '친구 요청 보내기에 실패했습니다.',
        'ignore_player_failed' => '플레이어 무시에 실패했습니다.',
        'delete_buddy_failed' => '친구 삭제에 실패했습니다',
        'search_too_short' => '글자 수가 너무 적습니다! 최소 2글자 이상 입력해 주세요.',
        'invalid_action' => '유효하지 않은 작업',
    ],

    // Success messages
    'success' => [
        'request_sent' => '친구 요청을 보냈습니다!',
        'request_cancelled' => '친구 요청을 취소했습니다.',
        'request_accepted' => '친구 요청을 수락했습니다!',
        'request_rejected' => '친구 요청을 거절했습니다',
        'request_accepted_symbol' => '✓ 친구 요청 수락됨',
        'request_rejected_symbol' => '✗ 친구 요청 거절됨',
        'buddy_deleted' => '친구를 삭제했습니다!',
        'player_ignored' => '플레이어를 무시 목록에 추가했습니다!',
        'player_unignored' => '플레이어를 무시 목록에서 제거했습니다.',
    ],

    // UI labels and titles
    'ui' => [
        'page_title' => '친구',
        'my_buddies' => '내 친구',
        'ignored_players' => '무시한 플레이어',
        'buddy_request' => '친구 요청',
        'buddy_request_title' => '친구 요청',
        'buddy_request_to' => '친구 요청',
        'buddy_requests' => '친구 요청',
        'new_buddy_request' => '새 친구 요청',
        'write_message' => '메시지 작성',
        'send_message' => '메시지 보내기',
        'send' => '보내기',
        'search_placeholder' => '검색...',
        'no_buddies_found' => '친구를 찾을 수 없습니다',
        'no_buddy_requests' => '현재 친구 요청이 없습니다.',
        'no_requests_sent' => '보낸 친구 요청이 없습니다.',
        'no_ignored_players' => '무시한 플레이어가 없습니다',
        'requests_received' => '받은 요청',
        'requests_sent' => '보낸 요청',
        'new' => '신규',
        'new_label' => '새로움',
        'from' => '보낸 사람:',
        'to' => '받는 사람:',
        'online' => '온라인',
        'status_on' => '켜짐',
        'status_off' => '꺼짐',
        'received_request_from' => '새 친구 요청을 받았습니다:',
        'buddy_request_to_player' => '플레이어에게 친구 요청',
        'ignore_player_title' => '플레이어 무시',
    ],

    // Actions
    'action' => [
        'accept_request' => '친구 요청 수락',
        'reject_request' => '친구 요청 거절',
        'withdraw_request' => '친구 요청 철회',
        'delete_buddy' => '친구 삭제',
        'confirm_delete_buddy' => '정말 이 친구를 삭제하시겠습니까',
        'add_as_buddy' => '친구로 추가',
        'ignore_player' => '정말 무시하시겠습니까',
        'remove_from_ignore' => '무시 목록에서 제거',
        'report_message' => '이 메시지를 게임 운영자에게 신고하시겠습니까?',
    ],

    // Table headers
    'table' => [
        'id' => 'ID',
        'name' => '이름',
        'points' => '점수',
        'rank' => '순위',
        'alliance' => '동맹',
        'coords' => '좌표',
        'actions' => '작업',
    ],

    // Common
    'common' => [
        'yes' => '예',
        'no' => '아니오',
        'caution' => '주의',
    ],
];
