<?php
$sub_menu = '400810';
include_once('_common.php');

auth_check_menu($auth, $sub_menu, "r");

$sql_common = " from {$g5['g5_shop_coupon_zone_table']} ";

$sql_search = " where (1) ";
if ($stx) {
    $sql_search .= " and cz_subject like '%$stx%' ";
}

if (!$sst) {
    $sst  = "cz_id";
    $sod = "desc";
}
$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt
            {$sql_common}
            {$sql_search}
            {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select *
            {$sql_common}
            {$sql_search}
            {$sql_order}
            limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$g5['title'] = '쿠폰존관리';
include_once (G5_ADMIN_PATH.'/admin.head.php');

$colspan = 9;
?>

<div class="local_ov">
    <span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num"> <?php echo number_format($total_count) ?> 개</span></span>
</div>
<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">

<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
<input type="submit" class="btn_submit" value="검색">
</form>


<form name="fcouponlist" id="fcouponzonelist" method="post" action="./couponzonelist_delete" onsubmit="return fcouponzonelist_submit(this);">
<input type="hidden" name="stx" value="<?php echo $stx; ?>">
<input type="hidden" name="page" value="<?php echo $page; ?>">
<input type="hidden" name="token" value="">

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?></caption>
    <thead>
    <tr>
        <th scope="col">
            <label for="chkall" class="sound_only">쿠폰 전체</label>
            <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
        </th>
        <th scope="col">쿠폰이름</th>
        <th scope="col">쿠폰종류</th>
        <th scope="col">적용대상</th>
        <th scope="col">쿠폰금액</th>
        <th scope="col">쿠폰사용기한</th>
        <th scope="col">다운로드</th>
        <th scope="col">사용기한</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        switch($row['cz_type']) {
            case '1':
                $cz_type = '포인트쿠폰';
                break;
            default:
                $cz_type = '다운로드쿠폰';
                break;
        }

        switch($row['cp_method']) {
            case '0':
                $row3 = get_shop_item($row['cp_target'], true);
                $cp_method = '개별상품할인';
                $cp_target = get_text($row3['it_name']);
                break;
            case '1':
                $sql3 = " select ca_name from {$g5['g5_shop_category_table']} where ca_id = '{$row['cp_target']}' ";
                $row3 = sql_fetch($sql3);
                $cp_method = '카테고리할인';
                $cp_target = get_text($row3['ca_name']);
                break;
            case '2':
                $cp_method = '주문금액할인';
                $cp_target = '주문금액';
                break;
            case '3':
                $cp_method = '배송비할인';
                $cp_target = '배송비';
                break;
        }

        if($row['cp_type'])
            $cp_price = $row['cp_price'].'%';
        else
            $cp_price = number_format($row['cp_price']).'원';

        $bg = 'bg'.($i%2);
    ?>

    <tr class="<?php echo $bg; ?>">
        <td class="td_chk">
            <input type="hidden" id="cz_id_<?php echo $i; ?>" name="cz_id[<?php echo $i; ?>]" value="<?php echo $row['cz_id']; ?>">
            <input type="checkbox" id="chk_<?php echo $i; ?>" name="chk[]" value="<?php echo $i; ?>" title="내역선택">
        </td>
        <td class="td_left"><?php echo get_text($row['cz_subject']); ?></td>
        <td class="td_type"><?php echo $cz_type; ?></td>
        <td class="td_type"><?php echo $cp_method; ?></td>
        <td class="td_odrnum2"><?php echo $cp_price; ?></td>
        <td  class="td_type">다운로드 후 <?php echo $row['cz_period']; ?>일</td>
        <td class="td_num"><?php echo number_format($row['cz_download']); ?></td>
        <td class="td_datetime"><?php echo substr($row['cz_start'], 2, 8); ?> ~ <?php echo substr($row['cz_end'], 2, 8); ?></td>
        <td class="td_mng td_mng_s">
            <a href="./couponzoneform?w=u&amp;cz_id=<?php echo $row['cz_id']; ?>&amp;<?php echo $qstr; ?>" class="btn btn_03"><span class="sound_only"><?php echo get_text($row['cz_subject']); ?> </span>수정</a>
        </td>
    </tr>

    <?php
    }

    if ($i == 0)
        echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
    ?>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
     <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_02">
   <a href="./couponzoneform" id="coupon_add" class="btn btn_01">쿠폰 추가</a>
</div>

</form>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>

<script>
function fcouponzonelist_submit(f)
{
    if (!is_checked("chk[]")) {
        alert(document.pressed+" 하실 항목을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택삭제") {
        if(!confirm("선택한 자료를 정말 삭제하시겠습니까?")) {
            return false;
        }
    }

    return true;
}
</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');