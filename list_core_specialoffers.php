<?php
foreach ($data_list as $item){
    $specialofferstype = $item["stat"];
    if($specialofferstype==1){
        $str_main_cat = "HOTELS & RESORTS";
        $midurl = 'hotels-resorts';
    }
    if($specialofferstype==2){
        $str_main_cat = "RECREATION";
        $midurl = 'recreation';
    }
    if($specialofferstype==3){
        $str_main_cat = "GOURMET";
        $midurl = 'gourmet';
    }
    if($specialofferstype==4){
        $str_main_cat = "DINING";
        $midurl = 'dining';
    }
    if($specialofferstype==5){
        $str_main_cat = "BEAUTY & WELLNESS";
        $midurl = 'beauty-wellness';
    }
    if($specialofferstype==6) {
        $str_main_cat = "SPORT LEISURE";
        $midurl = 'sport-leisure';
    }
    if($specialofferstype==7) {
        $str_main_cat = "SEASONAL GIFT";
        $midurl = 'seasonal-gift';
    }
    if($specialofferstype==8) {
        $str_main_cat = "OTHER";
        $midurl = 'other';
    }
    $shortUrl = $url_iso_country.'/specialoffers/'.$midurl.'/'.$item["url_kat"].'/'.$item["id"].'/'.$item["url_judul"].'.html';
    $pageUrl = ROOT_URL.$shortUrl;
    ?>

    <div class="section group">
        <div class="inner_section event_feed_section">
            <div class="span_4_of_24 col filler_col"></div>
            <div class="col span_6_of_24">
                <div class="ratiobox ratiobox_thumb event_feed_thumb"><a href="<?php echo $shortUrl; ?>" class="ratiobox_content bg_image_div a_img" style="background-image: url('<?php echo $item["url_gbr"]; ?>');"></a></div>
                <div align="center" class="event_feed_share group filler_col">
                    <?php require "views/includes/list_share_widget.php"; ?>
                </div>
            </div>
            <div class="col span_10_of_24">
                <?php
                if(isset($list_by) && !empty($list_by)) {
                    ?>
                    <span class="color_1">
                            <?php
                            if($list_by=='city') echo $str_main_cat.' - '.$item["kategori"];
                            if($list_by=='cat') echo $item["kategori"]/*.' - '.CountryHelper::formatCityStateName($url_iso_country, $item["city"], $item["state"], $item["state_code"])*/;
                            //if($list_by=='sub') echo CountryHelper::formatCityStateName($url_iso_country, $item["city"], $item["state"], $item["state_code"]);
                            ?>
                        </span>
                    <?php
                }
                elseif((isset($listSearch) && $listSearch) || (isset($listIndex) && $listIndex)) echo '<span class="color_1">'.$str_main_cat.' - '.$item["kategori"]/*.", ".CountryHelper::formatCityStateName($url_iso_country, $item["city"], $item["state"], $item["state_code"])*/.'</span>';
                ?>

                <div class="margin_bawah_10">
                    <h2><strong><a class="a_umum" href="<?php echo $shortUrl; ?>"><?php echo $item["judul"] ; ?></a></strong></h2>
                    <div class="spacer_8"></div>
                    <div class="tgl_list">
                        <?php
                        echo $item["formated_tgl"];
                          /*if($item["view_count"] > 0) {
                            echo " - " . MainHelper::formatCounter($item["view_count"]) . " view";
                            if($item["view_count"] > 1) echo "s";
                        }*/
                        ?>
                    </div>
                    <div>
                        <?php echo $item["deskp"]; ?>&nbsp;<a class="a_caption_red" href="<?php echo $shortUrl; ?>"><strong>More Info</strong></a>
                    </div>
                </div>
                <div align="center" class="margin_bawah_10 event_feed_share group mobile_col">
                    <?php require "views/includes/list_share_widget.php"; ?>
                </div>
            </div>
            <div class="span_4_of_24 col filler_col"></div>
        </div>
    </div>
<?php
}
?>
<?php
if(isset($bennersaddsbodytwo) && is_array($bennersaddsbodytwo) && count($bennersaddsbodytwo) > 0){
    foreach ($bennersaddsbodytwo as $banners) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_22_of_24">
                    <div class="col span_16_of_24 col_mobile span_mobile_body">
                        <div class="header-ads-benner">
                            <a href="<?php echo $banners['url_linkadsbodytwo']; ?>">
                                <img class="img-adsbenner imgadsmobileheader" src="<?php echo $banners['url_gbradsbodytwo']; ?>"/>
                                 <span class="btn-gradbody">Ads</span>
                            </a>
                        </div>
                        <div class="spacerAdsBody"></div>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <?php
    }
}
?>
<?php
if(isset($bennersaddsslider) && is_array($bennersaddsslider) && count($bennersaddsslider) > 0){
?>
    <div class="section group">
        <div class="col span_10_of_24 filler_col"></div>
        <div class="col span_24_of_24">
            <div class="col span_16_of_24 col_mobile span_mobile_footer">
                <div class="slider">
                    <?php
                    foreach ($bennersaddsslider as $banners) {
                        ?>
                        <a href="<?php echo $banners['url_linkslider']; ?>"><img src="<?php echo $banners['url_gbrslider']; ?>"/>
                            <span class="btn-gradfooter">Ads</span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="spacerAdsfooter"></div> 
            </div>
        </div>
    </div> 
<?php
}
?>

<?php
if(isset($bennersaddsslidertwo) && is_array($bennersaddsslidertwo) && count($bennersaddsslidertwo) > 0){
    ?>
    <div class="group section">
        <div class="col span_21_of_24 col_mobile span_mobile_slidertwo">
            <div class="slidertwo-ads-benner">
                <div class="slider">
                   <?php
                   foreach ($bennersaddsslidertwo as $banners) {
                    ?>
                    <a href="<?php echo $banners['url_linkslidertwo']; ?>">
                        <img class="img-adsbennerslidertwo imgadsmobileslidertwo" src="<?php echo $banners['url_gbrslidertwo']; ?>"/>
                        <span class="btngradslidertwo">Ads</span>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="spacerslidertwo"></div>
    </div>
</div>
<?php
}
?>