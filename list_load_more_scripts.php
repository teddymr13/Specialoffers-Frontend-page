<script type="text/javascript" nonce="<?php echo $nonceScript; ?>">
    var hlm = 1;
    var jumlah_all_content = <?php echo $total_list; ?>;
    function load_more(){
        hlm = main_load_more(<?php echo $limitervalue; ?>, hlm, jumlah_all_content, "ajax/<?php echo $url_iso_country."/".MainHelper::getStrPage('url').'/'; ?>ajax_load_more_<?php if(isset($listProduct)&&$listProduct) echo 'product_'; if(isset($listEVoucherManager)&&$listEVoucherManager) echo 'evoucher_manager_'; ?>list<?php if(isset($listIndex) && $listIndex) echo '_index'; ?>.php", "<?php if(isset($ajax_param) && !empty($ajax_param)) echo $ajax_param; ?>&", "div_content_list");

        <?php if($_SESSION['halaman']==7 || $_SESSION['halaman']==10 || $_SESSION['halaman']==11) echo 'load_more_share_button();'; ?>
    }
</script>

