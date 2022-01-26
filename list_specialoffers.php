<?php require_once "views/includes/top_menu.php"; ?>

<div class="section group">
    <div class="inner_section">
        <div class="span_2_of_24 col filler_col"></div>
        <div align="center" class="span_20_of_24 col">
            <h1 align="right"><?php echo $h1_title; ?></h1>
            <?php if(isset($str_cap_title) && !empty($str_cap_title)) echo '<div align="right" class="color_2">'.$str_cap_title.'</div>'; ?>
        </div>
        <div class="span_2_of_24 col filler_col"></div>
    </div>
</div>
<?php
$countDataList = count($data_list);
if($_SESSION['halaman']==11 && ((isset($specialofferstype) && ($specialofferstype==1||$specialofferstype==2||$specialofferstype==3||$specialofferstype==4||$specialofferstype==5||$specialofferstype==6||$specialofferstype==7||$specialofferstype==8) && isset($list_by) && !empty($list_by))||(isset($listSearch)&&$listSearch))) {
    echo '<div id="div_content_list">';
    require_once "views/specialoffers/list_core_specialoffers.php";
    echo '</div>';
}
else {
    ?>
    <div class="section group">
        <div class="inner_section" id="div_content_list">
            <?php
            if (empty($countDataList)) {
                ?>
                <div class="span_2_of_24 col filler_col"></div>
                <div class="span_20_of_24 col">
                    <?php
                    echo "No ";
                    if((isset($listProduct)&&$listProduct)||(isset($listProductSearch)&&$listProductSearch))
                        echo "Product";
                    elseif ($_SESSION['halaman'] == 11)
                        echo ucfirst(MainHelper::getStrPage('db'));
                    else
                        echo MainHelper::getStrPage();
                    echo " Found."; ?>
                </div>
                <div class="span_2_of_24 col filler_col"></div>
                <?php
            }
            else{
                if(($_SESSION['halaman'] == 2 || $_SESSION['halaman'] == 3 || $_SESSION['halaman'] == 4 || $_SESSION['halaman'] == 9) && ((isset($listProduct) && $listProduct)||(isset($listProductSearch) && $listProductSearch)))
                    require_once "views/includes/list_core_product.php";
                elseif ($_SESSION['halaman'] == 3 || $_SESSION['halaman'] == 4 || $_SESSION['halaman'] == 5 || $_SESSION['halaman'] == 6 || $_SESSION['halaman'] == 9)
                    require_once "views/includes/list_core.php";
                elseif ($_SESSION['halaman'] == 8)
                    require_once "views/magazine/list_core_magazine.php";
                elseif ($_SESSION['halaman'] == 10)
                    require_once "views/evoucher/list_core_voucher.php";
            }
            ?>
        </div>

    </div>
    <?php
}
if ($countDataList > 0 && $total_list > $limitervalue) require_once "views/includes/list_load_more_button.html";
?>