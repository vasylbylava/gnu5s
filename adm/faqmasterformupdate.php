<?php
$sub_menu = '300700';
require_once '_common.php';

if ($w == "u" || $w == "d") {
    check_demo();
}

if ($w == 'd') {
    auth_check_menu($auth, $sub_menu, "d");
} else {
    auth_check_menu($auth, $sub_menu, "w");
}

check_admin_token();

@mkdir(G5_DATA_PATH . "/faq", G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH . "/faq", G5_DIR_PERMISSION);

$fm_id = isset($_REQUEST['fm_id']) ? (int) $_REQUEST['fm_id'] : 0;
$fm_himg_del = isset($_POST['fm_himg_del']) ? (int) $_POST['fm_himg_del'] : 0;
$fm_timg_del = isset($_POST['fm_timg_del']) ? (int) $_POST['fm_timg_del'] : 0;
$fm_subject = isset($_POST['fm_subject']) ? strip_tags(clean_xss_attributes($_POST['fm_subject'])) : '';
$fm_head_html = isset($_POST['fm_head_html']) ? $_POST['fm_head_html'] : '';
$fm_tail_html = isset($_POST['fm_tail_html']) ? $_POST['fm_tail_html'] : '';
$fm_mobile_head_html = isset($_POST['fm_mobile_head_html']) ? $_POST['fm_mobile_head_html'] : '';
$fm_mobile_tail_html = isset($_POST['fm_mobile_tail_html']) ? $_POST['fm_mobile_tail_html'] : '';
$fm_order = isset($_POST['fm_order']) ? (int) $_POST['fm_order'] : 0;

if ($fm_himg_del) {
    @unlink(G5_DATA_PATH . "/faq/{$fm_id}_h");
}
if ($fm_timg_del) {
    @unlink(G5_DATA_PATH . "/faq/{$fm_id}_t");
}

$sql_common = " set fm_subject = '$fm_subject',
                    fm_head_html = '$fm_head_html',
                    fm_tail_html = '$fm_tail_html',
                    fm_mobile_head_html = '$fm_mobile_head_html',
                    fm_mobile_tail_html = '$fm_mobile_tail_html',
                    fm_order = '$fm_order' ";

if ($w == "") {
    $sql = " alter table {$g5['faq_master_table']} auto_increment=1 ";
    sql_query($sql);

    $sql = " insert {$g5['faq_master_table']} $sql_common ";
    sql_query($sql);

    $fm_id = sql_insert_id();
    run_event('admin_faq_master_created', $fm_id);

} elseif ($w == "u") {
    $sql = " update {$g5['faq_master_table']} $sql_common where fm_id = '$fm_id' ";
    sql_query($sql);
    run_event('admin_faq_master_updated', $fm_id);

} elseif ($w == "d") {
    @unlink(G5_DATA_PATH . "/faq/{$fm_id}_h");
    @unlink(G5_DATA_PATH . "/faq/{$fm_id}_t");

    // FAQ삭제
    $sql = " delete from {$g5['faq_master_table']} where fm_id = '$fm_id' ";
    sql_query($sql);

    // FAQ상세삭제
    $sql = " delete from {$g5['faq_table']} where fm_id = '$fm_id' ";
    sql_query($sql);

    run_event('admin_faq_master_deleted', $fm_id);
}

if ($w == "" || $w == "u") {
    if ($_FILES['fm_himg']['name']) {
        $dest_path = G5_DATA_PATH . "/faq/" . $fm_id . "_h";
        @move_uploaded_file($_FILES['fm_himg']['tmp_name'], $dest_path);
        @chmod($dest_path, G5_FILE_PERMISSION);
    }
    if ($_FILES['fm_timg']['name']) {
        $dest_path = G5_DATA_PATH . "/faq/" . $fm_id . "_t";
        @move_uploaded_file($_FILES['fm_timg']['tmp_name'], $dest_path);
        @chmod($dest_path, G5_FILE_PERMISSION);
    }

    goto_url("./faqmasterform?w=u&amp;fm_id=$fm_id");
} else {
    goto_url("./faqmasterlist");
}
