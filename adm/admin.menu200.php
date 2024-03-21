<?php
$menu['menu200'] = array(
    array('200000', '회원관리', G5_ADMIN_URL . '/member_list', 'member'),
    array('200100', '회원관리', G5_ADMIN_URL . '/member_list', 'mb_list'),
    array('200300', '회원메일발송', G5_ADMIN_URL . '/mail_list', 'mb_mail'),
    array('200800', '접속자집계', G5_ADMIN_URL . '/visit_list', 'mb_visit', 1),
    array('200810', '접속자검색', G5_ADMIN_URL . '/visit_search', 'mb_search', 1),
    array('200820', '접속자로그삭제', G5_ADMIN_URL . '/visit_delete', 'mb_delete', 1),
    array('200200', '포인트관리', G5_ADMIN_URL . '/point_list', 'mb_point'),
    array('200900', '투표관리', G5_ADMIN_URL . '/poll_list', 'mb_poll')
);
