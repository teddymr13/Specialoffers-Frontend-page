<div id="div_loading_filter"></div>
<div id="div_filter_2" class="inner_section div_top_filter">
    <?php
    if (isset($top_menu_categories_check_child) && !empty($top_menu_categories_check_child)) {
        ?>
        <div class="span_2_of_24 col filler_col"></div>
        <div id="div_top_filter_cat" class="span_5_of_24 col">
            <?php
            echo '<div class="elemen_atas_left_right_column_teks style_teks_registry">CATEGORIES</div><table cellspacing="0" cellpadding="0" style="border-collapse: collapse; width: 100%;">';
            for ($i = 1; $i <= 8; $i++) {
                if ($i == 1) $strnya = "Hotels & Resorts";
                if ($i == 2) $strnya = "Recreation";
                if ($i == 3) $strnya = "Gourmet"; //"Happening";
                if ($i == 4) $strnya = "Dining";
                if ($i == 5) $strnya = "Beauty & Wellness";
                if ($i == 6) $strnya = "Sport Leisure";
                if ($i == 7) $strnya = "Seasonal Gift";
                if ($i == 8) $strnya = "Other";

                echo '<tr ';
                if (isset($top_menu_categories_check_child[$i]) && $top_menu_categories_check_child[$i]) {
                    echo ' name="button_tr_top_menu_2lvl" data-halaman="' . $_SESSION['halaman'] . '" data-id-cat="' . $i . '" data-iso-country="' . $url_iso_country . '" data-addtional="">';
                    echo '<td id="top_filter_td_cat_' . $i . '" class="top_filter_td_next_menu" valign="middle">';
                    echo $strnya;
                    echo '</td>';
                    echo '<td class="top_filter_td_next_menu" valign="middle" align="right">';
                    echo '<img class="button_arrow_next_menu" src="assets/images/button-right-small.png"/>';
                }
                echo ' </td></tr>';
            }
            echo '</table>';
            ?>
        </div>
        <div id="div_top_filter_sub" class="span_5_of_24 col"></div>
        <div class="span_12_of_24 col filler_col"></div>

        <div class="elemen_atas_left_right_column_teks style_teks_registry"></div>
        <?php
    }
    ?>
</div>