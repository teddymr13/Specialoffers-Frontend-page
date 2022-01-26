<div id="div_loading_filter"></div>
<div id="div_filter_2" class="inner_section div_top_filter">
    <div class="span_2_of_24 col filler_col"></div>
    <div class="span_6_of_24 col">
        <div id="div_triger_content_filter_1" class="group elemen_atas_left_right_column_teks"><div class="style_teks_registry pull_left">SORT</div><div class="pull_right mobile_col"><i class="fa fa-angle-down" aria-hidden="true"></i></div> </div>
        <div id="div_content_filter_1" class="content_filter">
            <select id="pilih_urut" name="pilih_urut">
                <option value="0">Relevance</option>
                <option value="1">Latest</option>
                <option value="2">Title Ascending</option>
                <option value="3">Title Descending</option>
            </select>
        </div>
    </div>

    <div class="span_6_of_24 col">
        <div id="div_triger_content_filter_2" class="group elemen_atas_left_right_column_teks"><div class="style_teks_registry pull_left">CATEGORIES</div><div class="pull_right mobile_col"><i class="fa fa-angle-down" aria-hidden="true"></i></div> </div>
        <div id="div_content_filter_2" class="content_filter">
            <select id="pilih_kategori" name="pilih_kategori">
                <option value="">-choose-</option>
                <option value="1">Hotels & Resorts</option>
                <option value="2">Recreation</option>
                <option value="3">Gourmet<!--Happening--></option>
                <option value="4">Dining</option>
                <option value="5">Beauty & Wellness</option>
                <option value="6">Sport Leisure</option>
                <option value="7">Seasonal Gift</option>
                <option value="8">Other</option>
            </select>
            <div class="spacer_8"></div>
            <div id="div_container_subcat"><input type="hidden" id="check_subcat" name="check_subcat" value="" /></div>
        </div>
    </div>

    <?php
    if (count($top_menu_cities) > 0) {
        echo '<div class="span_6_of_24 col">';
        echo '<div id="div_triger_content_filter_3" class="group elemen_atas_left_right_column_teks hide"><div class="style_teks_registry pull_left">LOCATIONS</div><div class="pull_right mobile_col"><i class="fa fa-angle-down" aria-hidden="true"></i></div> </div>';
        //echo '<div id="div_content_filter_3" class="content_filter">';
        echo '<div id="div_content_filter_3" class="hide">';
        $tulis_br = false;
        foreach ($top_menu_cities as $item) {
            if ($tulis_br) echo '<br/>';
            else $tulis_br = true;
            ?>
            <input type="checkbox" name="check_kota" value="<?php echo $item["idnya"]; ?>"/>
            <?php
            echo CountryHelper::formatCityStateName($url_iso_country, $item["kotanya"], $item["propnya"], $item["scnya"]);
        }
        echo '</div></div>';
    }
    ?>

    <div class="span_4_of_24 col filler_col"></div>
    <div class="elemen_atas_left_right_column_teks style_teks_registry"></div>
</div>
