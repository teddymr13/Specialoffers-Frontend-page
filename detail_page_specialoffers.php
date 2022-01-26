<?php require_once "views/includes/top_menu.php"; ?>

    <div class="section group">
        <div class="inner_section">
            <div class="col span_2_of_24 filler_col"></div>
            <div id="container_intro_main_slider" class="col span_20_of_24">
                <?php require_once "views/includes/slider_main.php"; ?>
            </div>
            <div class="col span_2_of_24 filler_col"></div>
        </div>
    </div>

    <div class="section group">
        <div class="inner_section" style="overflow: visible !important;">
            <div class="span_2_of_24 col filler_col"></div>
            <div align="left" class="span_12_of_24 col">
                <h1><?php echo $h1_title; ?></h1>
                <?php if(isset($str_cap_title) && !empty($str_cap_title)) echo '<div class="color_2">'.$str_cap_title.'</div>'; ?>
            </div>
            <?php
            $status_subs = false;
            $status_newsfeed = true;
            $shareName = $data_specialoffers["judul"];
            $pageUrl = ROOT_URL.$url_iso_country.'/specialoffers/'.$main_cat.'/'.$url_cat.'/'.$data_specialoffers["id"].'/'.$data_specialoffers["url_judul"].'.html';
            require_once "views/includes/detail_page_share_specialoffers.php";
            ?>
            <div class="span_2_of_24 col filler_col"></div>
        </div>
    </div>

    <div class="section group">
        <div class="inner_section">
            <div class="span_2_of_24 col filler_col"></div>
            <div class="span_20_of_24 col">
                <!-- <div align="justify" class="body_text"><?php //echo $data_specialoffers["isi"]; ?></div> -->
            </div>
            <div class="span_2_of_24 col filler_col"></div>
        </div>
    </div>

<?php
if(isset($data_room) && is_array($data_room) && count($data_room) > 0) {
    foreach ($data_room as $items) {
     if($items["judul_room"]!=''){
?>
<!-- hsihihshihiu -->
<div class="section group">
    <div class="inner_section">
        <div class="span_2_of_24 col filler_col margin_left"></div>
        <div class="span_20_of_24 col">
            <div class="rowss">
                <div class="example-1 cardss">
                    <div class="wrappers">
                        <div class="image">
                            <div class="carousel">
                                <?php
                                if($items["url_gbr1"]!=''){
                                    ?>
                                    <div class="carousel-cell">
                                         <img class="book-image" style="background-image: url('<?php echo $items["url_gbr1"]; ?>');">
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if($items["url_gbr2"]!=''){
                                    ?>
                                    <div class="carousel-cell">
                                           <img class="book-image" style="background-image: url('<?php echo $items["url_gbr2"]; ?>');">
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                                if($items["url_gbr3"]!=''){
                                    ?>
                                    <div class="carousel-cell">
                                          <img class="book-image" style="background-image: url('<?php echo $items["url_gbr3"]; ?>');">
                                    </div>
                                    <?php
                                }
                                if($items["url_gbr4"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr4"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr5"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr5"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr6"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr6"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr7"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr7"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr8"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr8"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr9"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr9"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr10"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr10"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr11"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr11"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr12"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr12"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr13"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr13"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr14"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr14"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr15"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr15"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr16"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr16"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr17"]!=''){
                                ?>
                                 <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr17"]; ?>');">
                                </div>
                                <?php
                                }
                                if($items["url_gbr18"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr18"]; ?>');">
                                </div>
                                 <?php
                                }
                                if($items["url_gbr19"]!=''){
                                ?>
                                <div class="carousel-cell">
                                  <img class="book-image" style="background-image: url('<?php echo $items["url_gbr19"]; ?>');">
                                </div>
                                   <?php
                                }
                                if($items["url_gbr20"]!=''){
                                ?>
                                  <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr20"]; ?>');">
                                  </div>
                                <?php
                                }
                                if($items["url_gbr21"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr21"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr22"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr22"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr23"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr23"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr24"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr24"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr25"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr25"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr26"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr26"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr27"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr27"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr28"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr28"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr29"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr29"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr30"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr30"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr31"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr31"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr32"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr32"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr33"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr33"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr34"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr34"]; ?>');">
                                    </div>
                                <?php
                                }
                                if($items["url_gbr35"]!=''){
                                ?>
                                    <div class="carousel-cell">
                                      <img class="book-image" style="background-image: url('<?php echo $items["url_gbr35"]; ?>');">
                                    </div>
                                <?php
                                }   
                                ?>
                            </div>
                        </div>

                        <div class="data">
                            <div class="content">
                              
                                <div class="margin_left1"><strong><a class="a_umum3"><?php echo $items["judul_room"] ; ?></a></strong>
                                <!-- &nbsp;<span class="btntype"><?php //echo $items["deskp"]; ?></span> --></div>
                                <div class="spacer_8 margin_molbil1"></div>
                                <?php
                                if($items["deskp"]!=''){
                                ?>
                                <span class="btntype"><?php echo $items["deskp"]; ?></span>
                                <?php
                                }
                                if($items["day_oprasional"]!=''){
                                ?>
                                <span class="btntype"><?php echo $items["day_oprasional"]; ?></span>
                                <?php
                                }
                                if($items["jam_oprasional"]!=''){
                                ?>
                                <span class="btntype"><?php echo $items["jam_oprasional"]; ?></span>
                                <?php
                                }
                                if($items["presentase_harga_promo"]!=''){
                                ?>
                                <span class="btndiscount text_diskon1">Discount &nbsp;<?php echo $items["presentase_harga_promo"]; ?>%</span>
                                <?php
                                }
                                ?>
                                <div class="spacer_8 margin_molbile"></div>
                                <span align="justify" class="text_span">
                                    <?php
                                    if($items["capasity_room"]!=''){
                                    ?>
                                    <?php echo $items["capasity_room"]; ?>
                                    <?php
                                    }
                                    if($items["bedroom"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["bedroom"]; ?>
                                    <?php
                                    }
                                    if($items["bathroom"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["bathroom"]; ?>
                                    <?php
                                    }
                                    if($items["capasity_guest"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["capasity_guest"]; ?>
                                    <?php
                                    }
                                    if($items["additional_rooms1"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["additional_rooms1"]; ?> 
                                    <?php
                                    }
                                    if($items["additional_rooms2"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["additional_rooms2"]; ?>
                                    <?php
                                    }
                                    if($items["additional_rooms3"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["additional_rooms3"]; ?>
                                    <?php
                                    }
                                    if($items["additional_rooms4"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["additional_rooms4"]; ?>
                                    <?php
                                    }
                                    if($items["room_view"]!=''){
                                    ?>
                                    -&nbsp;<?php echo $items["room_view"]; ?>
                                    <?php
                                    }
                                    ?>
                                </span>
                                <div class="text">                          
                                    <div align="justify"><?php echo $items["room_size"]; ?></div>
                                </div>

                                <!--room service-->
                                <?php
                                    if($items["title_roomservice"]!=''){
                                ?>
                                <br/>
                                <div class="margin_bawah1">
                                    <div align="justify" class="fonts-juduls1 margin_left2"><strong><?php echo $items["title_roomservice"]; ?></strong></div>
                                    <div align="justify" class="fonts-juduls1 deksripsi_roomservice"><?php echo $items["deksripsi_roomservice"]; ?></div>
                                    <div class="rowws">
                                        <div class="column" style="background-color:#ffffff;">
                                            <ul class="table_list1">
                                                <?php
                                                if($items["roomservice1"]!=''){
                                                    ?>
                                                    <li><?php echo $items["roomservice1"]; ?></li>
                                                <?php
                                                }
                                                if($items["roomservice2"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice2"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice3"]!=''){
                                                ?>
                                                   <li><?php echo $items["roomservice3"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice4"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice4"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice5"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice5"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice11"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice11"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice12"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice12"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice13"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice13"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice14"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice14"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice15"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice15"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice21"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice21"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice22"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice22"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice23"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice23"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice24"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice24"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice25"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice25"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice31"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice31"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice33"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice33"]; ?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="column" style="background-color:#ffffff;">
                                            <ul class="table_list1">
                                                <?php
                                                if($items["roomservice6"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice6"]; ?></li>
                                                <?php
                                                }
                                                if($items["roomservice7"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice7"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice8"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice8"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice9"]!=''){
                                                ?>
                                                    <li><?php echo $items["roomservice9"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice10"]!=''){
                                                ?>
                                                   <li><?php echo $items["roomservice10"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice16"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice16"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice17"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice17"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice18"]!=''){
                                                ?>
                                                   <li><?php echo $items["roomservice18"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice19"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice19"]; ?></li>
                                                <?php
                                                }
                                                   if($items["roomservice20"]!=''){
                                                ?>
                                                 <li><?php echo $items["roomservice20"]; ?></li>
                                                <?php
                                                }
                                                  if($items["roomservice26"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice26"]; ?></li>
                                                <?php
                                                }
                                                  if($items["roomservice27"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice27"]; ?></li>
                                                <?php
                                                }
                                                  if($items["roomservice28"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice28"]; ?></li>
                                                <?php
                                                }
                                                  if($items["roomservice29"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice29"]; ?></li>
                                                <?php
                                                }
                                                  if($items["roomservice30"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice30"]; ?></li>
                                                <?php
                                                }
                                                 if($items["roomservice32"]!=''){
                                                ?>
                                                  <li><?php echo $items["roomservice32"]; ?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- room service -->
                                <div class="spacer_8 margin_molbil1"></div>
                                <!-- Fasilitas -->
                                <?php
                                    if($items["title_deskripsifasilitas"]!=''){
                                ?>
                                <div class="margin_bawah">
                                    <a class="accordions cordion_btn1 button1"><?php echo $items["title_deskripsifasilitas"]; ?></a>&nbsp;
                                    <div class="panel">
                                        <div align="justify" class="fonts-juduls1"><?php echo $items["deksripsi_fasilitas"]; ?></div>
                                        <br/>
                                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text"]; ?></div>
                                        <div class="rowws">
                                            <div class="column">
                                                <ul class="table_list">
                                                    <?php
                                                    if($items["fasilitas1"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas1"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas2"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas2"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas4"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas4"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas5"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas5"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas8"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas8"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas9"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas9"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas12"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas12"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas13"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas13"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas16"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas16"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas17"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas17"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas20"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas20"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas21"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas21"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas24"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas24"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas25"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas25"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas28"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas28"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas29"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas29"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas32"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas32"]; ?></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="column">
                                                <ul class="table_list">
                                                    <?php
                                                    if($items["fasilitas2"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas2"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas3"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas3"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas6"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas6"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas7"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas7"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas10"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas10"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas11"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas11"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas14"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas14"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas15"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas15"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas18"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas18"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas19"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas19"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas22"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas22"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas23"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas23"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas26"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas26"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas27"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas27"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas30"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas30"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas31"]!=''){
                                                        ?>
                                                        <li><?php echo $items["fasilitas31"]; ?></li>
                                                        <?php
                                                    }
                                                    if($items["fasilitas33"]!=''){
                                                    ?>
                                                     <li><?php echo $items["fasilitas33"]; ?></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            ?>
                            <!-- Fasilitas -->
                            </div>
                            <div class="spacer_15 margin_molbil1"></div>
                            <span>
                            <?php
                                echo '<div class="font_size_product">';
                                if (!empty($items["harga_promo"]) && $items["harga_promo"] < $items["harga"]) {
                                    echo '<strike>Rp.' . MainHelper::formatMoney2($items["harga"], 'Rp.') . '</strike>';
                                    echo '&nbsp;';
                                    echo '<strong class="color_1">Rp.' . MainHelper::formatMoney2($items["harga_promo"], 'Rp.') . '</strong>';
                                }
                                else {
                                    ?>
                                   <?php
                                    echo '<strong> Rp.' . MainHelper::formatMoney2($items["harga"], 'Rp.') . '</strong>';
                                }
                                echo '</div>';
                            ?>
                            </span>
                            <?php
                            if($items["deksripsi_harga_room"]!=''){
                            ?>
                           <div class="text_hider2">&nbsp;<?php echo $items["deksripsi_harga_room"]; ?></div>
                            <?php
                            }
                            if($items["formated_tgl"]!=''){
                            ?>
                            <div class="tgl_list">
                            &nbsp;&nbsp;&nbsp;&nbsp;Valid Until <?php echo $items["formated_tgl"];?>
                            </div>
                           <?php
                            }
                            if($items["tlp_book"]!=''){
                           ?>
                           <div class="margin_jarak margin_molbile"></div>
                            <a class="btn" href="https://wa.me/<?php echo $items["tlp_book"]; ?>"><p><?php echo $items["textbtnbook"];?>&nbsp;<i class="fa fa-angle-double-right iconbook" style="font-size:13px"></i></p></a>
                            <?php
                            }
                           ?>   
                    </div>
                  </div>
              </div>
          </div>
          <div class="span_2_of_24 col filler_col"></div>
      </div>
    </div>
</div>
<?php
        }
    }
}
?>

<?php
if(isset($data_roommenu) && is_array($data_roommenu) && count($data_roommenu) > 0) {
    foreach ($data_roommenu as $items) {
     if($items["judul_menu"]!=''){
?>
<br/>
<div class="section group jarak2">
    <div class="inner_section">
        <div class="span_2_of_24 col filler_col"></div>
          <?php
          if($items["title_deskripsi_benefit_menu"]!=''){
            ?>
            <div class="span_20_of_24 col">
                <div class="shadow1">
                    <div class="spacer_15 jarak2"></div>
                    <strong><a class="a_umum3 text_hider"><?php echo $items["title_deskripsi_benefit_menu"]; ?></a></strong>
                    <div class="spacer_8"></div>
                    <div class="line-style2"></div>
                    <div align="justify" class="jarak1">
                       <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama1"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title1"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title1"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu1"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu1"]; ?></div>
                        <?php
                        }
                        ?>
                          <ul class="table_list">
                            <?php
                             if($items["benefit_menu1"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu1"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu2"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu2"]; ?></li>
                            <?php
                            }
                             if($items["benefit_menu3"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu3"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu4"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu4"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu5"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu5"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu6"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu6"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu7"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu7"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu8"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu8"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu9"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu9"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu10"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu10"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu11"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu11"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu12"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu12"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text1"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text1"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama2"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title2"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title2"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu2"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu2"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu13"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu13"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu14"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu14"]; ?></li>
                            <?php
                            }
                             if($items["benefit_menu15"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu15"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu16"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu16"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu17"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu17"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu18"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu18"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu19"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu19"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu20"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu20"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu21"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu21"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu22"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu22"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu23"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu23"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu24"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu24"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text2"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text2"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama3"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title3"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title3"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu3"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu3"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu25"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu25"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu26"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu26"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu27"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu27"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu28"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu28"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu29"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu29"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu30"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu30"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu31"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu31"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu32"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu32"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu33"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu33"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu34"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu34"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu35"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu35"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu36"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu36"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text3"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text3"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama4"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title4"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title4"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu4"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu4"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu37"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu37"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu38"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu38"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu39"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu39"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu40"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu40"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu41"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu41"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu42"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu42"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu43"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu43"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu44"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu44"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu45"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu45"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu46"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu46"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu47"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu47"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu48"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu48"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text4"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text4"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama5"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title5"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title5"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu5"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu5"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu49"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu49"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu50"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu50"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu51"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu51"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu52"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu52"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu53"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu53"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu54"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu54"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu55"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu55"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu56"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu56"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu57"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu57"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu58"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu58"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu59"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu59"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu60"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu60"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text5"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text5"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama6"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title6"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title6"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu6"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu6"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu61"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu61"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu62"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu62"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu63"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu63"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu64"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu64"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu65"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu65"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu66"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu66"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu67"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu67"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu68"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu68"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu69"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu69"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu70"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu70"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu71"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu71"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu72"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu72"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                        if($items["note_text6"]!=''){
                            ?>
                            <div class="margin_bawah3"></div>
                            <div align="justify" class="fonts-juduls1"><?php echo $items["note_text6"]; ?></div>
                            <?php
                        }
                        ?>
                   
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama7"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title7"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title7"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu7"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu7"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu73"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu73"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu74"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu74"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu75"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu75"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu76"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu76"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu77"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu77"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu78"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu78"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu79"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu79"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu80"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu80"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu81"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu81"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu82"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu82"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu83"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu83"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu84"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu84"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text7"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text7"]; ?></div>
                        <?php
                        }
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls1"><strong><?php echo $items["title_utama8"]; ?></strong></div>
                        <?php
                            if($items["sub_text_title8"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["sub_text_title8"]; ?></div>
                        <?php
                        }
                         if($items["benefit_package_menu8"]!=''){
                        ?>
                        <div class="margin_bawah2"></div>
                        <div align="justify" class="fonts-juduls2"><?php echo $items["benefit_package_menu8"]; ?></div>
                        <?php
                        }
                        ?>
                        <ul class="table_list">
                            <?php
                             if($items["benefit_menu85"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu85"]; ?></li>
                            <?php
                            }
                               if($items["benefit_menu86"]!=''){
                            ?>
                                <li><?php echo $items["benefit_menu86"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu87"]!=''){
                            ?>
                               <li><?php echo $items["benefit_menu87"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu88"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu88"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu89"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu89"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu90"]!=''){
                            ?>
                              <li><?php echo $items["benefit_menu90"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu91"]!=''){
                            ?>
                            <li><?php echo $items["benefit_menu91"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu92"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu92"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu93"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu93"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu94"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu94"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu95"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu95"]; ?></li>
                            <?php
                            }
                            if($items["benefit_menu96"]!=''){
                            ?>
                             <li><?php echo $items["benefit_menu96"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                         if($items["note_text8"]!=''){
                        ?>
                        <div class="margin_bawah3"></div>
                        <div align="justify" class="fonts-juduls1"><?php echo $items["note_text8"]; ?></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>           
                <div class="span_2_of_24 col filler_col"></div>
            </div>
        <?php
        }
        ?>
  </div>
</div>
<br/>
<div class="section group jarak2">
    <div class="inner_section">
        <div class="span_2_of_24 col filler_col"></div>
          <?php
          if($items["title_deskripsitermconditions_menu"]!=''){
            ?>
            <div class="span_20_of_24 col">
                <div class="shadow1">
                    <div class="spacer_15 jarak2"></div>
                    <strong><a class="a_umum3 text_hider"><?php echo $items["title_deskripsitermconditions_menu"]; ?></a></strong>
                    <div class="spacer_8"></div>
                    <div class="line-style2"></div>
                
                    <div align="justify" class="jarak1">
                        <div align="justify" class="fonts-juduls1"><?php echo $items["term_conditions_menu"]; ?></div>
                        <ul class="table_list">
                        <?php
                        if($items["termsandconditions1"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions1"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions2"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions2"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions3"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions3"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions4"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions4"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions5"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions5"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions6"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions6"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions7"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions7"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions8"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions8"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions9"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions9"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions10"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions10"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions11"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions11"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions12"]!=''){
                        ?>
                            <li><?php echo $items["termsandconditions12"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions13"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions13"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions14"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions14"]; ?></li>
                         <?php
                        }
                         if($items["termsandconditions15"]!=''){
                        ?>
                        <li><?php echo $items["termsandconditions15"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions16"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions16"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions17"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions17"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions18"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions18"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions19"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions19"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions20"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions20"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions21"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions21"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions22"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions22"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions23"]!=''){
                        ?>
                        <li><?php echo $items["termsandconditions23"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions24"]!=''){
                        ?>
                        <li><?php echo $items["termsandconditions24"]; ?></li>
                        <?php
                        }
                        if($items["termsandconditions25"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions25"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions26"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions26"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions27"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions27"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions28"]!=''){
                        ?>
                          <li><?php echo $items["termsandconditions28"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions29"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions29"]; ?></li>
                        <?php
                        }
                         if($items["termsandconditions30"]!=''){
                        ?>
                         <li><?php echo $items["termsandconditions30"]; ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                    </div>
                </div>           
                <div class="span_2_of_24 col filler_col"></div>
            </div>
        <?php
        }
        ?>
  </div>
</div>
<br/>

<div class="section group jarak2">
    <div class="inner_section">
        <div class="span_2_of_24 col filler_col"></div>
          <?php
          if($items["title_deskripsicancelpolicy_menu"]!=''){
            ?>
            <div class="span_20_of_24 col">
                <div class="shadow1">
                    <div class="spacer_15 jarak2"></div>
                    <strong><a class="a_umum3 text_hider"><?php echo $items["title_deskripsicancelpolicy_menu"]; ?></a></strong>
                    <div class="spacer_8"></div>
                    <div class="line-style2"></div>
                
                    <div align="justify" class="jarak1">
                        <div align="justify" class="fonts-juduls1"><?php echo $items["cancel_policy_menu"]; ?></div>
                    </div>
                </div>           
                <!-- <div class="span_2_of_24 col filler_col"></div> -->
            </div>
        <?php
        }
        ?>
  </div>
</div>
<?php
      }
    }
}
?>


<?php
    if(isset($bennersaddsbodytwo) && is_array($bennersaddsbodytwo) && count($bennersaddsbodytwo) > 0){
        foreach ($bennersaddsbodytwo as $banners) {
            ?>
            <br>
            <div class="section group">
                <div class="inner_section">
                    <div class="col span_2_of_24 filler_col"></div>
                    <div class="col span_20_of_24">
                        <div class="col span_16_of_24 col_mobile span_mobile_bodydetail">
                            <div class="header-ads-benner">
                                <a href="<?php echo $banners['url_linkadsbodytwo']; ?>">
                                    <img class="img-adsbenner imgadsmobileheader" src="<?php echo $banners['url_gbradsbodytwo']; ?>"/>
                                    <span class="btn-gradbodydetail">Ads</span>
                                </a>
                            </div>
                            <div class="spacerAdsBodydetail"></div>
                        </div>
                    </div>
                    <!-- <div class="col span_2_of_24 filler_col"></div> -->
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
                <!-- <div class="spacerAdsfooter"></div> -->
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


<?php
if(isset($data_related) && is_array($data_related) && count($data_related) > 0) {
    ?>
    <div class="section group">
        <div class="inner_section">
            <div class="span_2_of_24 col filler_col"></div>
            <div class="span_20_of_24 col">
                <div align="center" class="container_h2 related_title"><h2>You May Also Like</h2></div>
            </div>
            <div class="span_2_of_24 col filler_col"></div>
        </div>
    </div>

    <div class="section group">
        <div class="inner_section">
            <?php
            if(count($data_related) > 0) {
                $jumlah = 1;
                foreach ($data_related as $related_item) {
                    if($data_specialoffers["stat"] == 1) $main_cat = "hotels-resorts";
                    if($data_specialoffers["stat"] == 2) $main_cat = "recreation";
                    if($data_specialoffers["stat"] == 3) $main_cat = "gourmet";
                    if($data_specialoffers["stat"] == 4) $main_cat = "dining";
                    if($data_specialoffers["stat"] == 5) $main_cat = "beauty-wellness";
                    if($data_specialoffers["stat"] == 6) $main_cat = "sport-leisure";
                    if($data_specialoffers["stat"] == 7) $main_cat = "seasonal-gift";
                    if($data_specialoffers["stat"] == 8) $main_cat = "other";
                    $hrefurl = $url_iso_country . '/specialoffers/'.$main_cat.'/' . $related_item["url_kat"] . '/' . $related_item["id"] . '/' . $related_item["url_judul"] . '.html';

                    /*desktop list*/
                    if ($jumlah % 5 == 1) echo '<div class="span_2_of_24 col filler_col"></div>';

                    echo '<div align="center" class="col col_list span_4_of_24 ';
                    /*if ($jumlah % 2 == 1) echo 'col_mobile_first ';
                    else echo 'col_mobile_last ';*/
                    echo 'span_mobile_12_of_24 filler_col">';
                    ?>
                    <a class="ratiobox ratiobox16_10 a_img"
                       href="<?php echo $hrefurl; ?>">
                        <div class="ratiobox_content bg_image_div_contain" style="background-image: url(<?php echo $related_item["url_gbr"]; ?>);"></div>
                    </a>
                    <div align="center" class="thumb_caption">
                        <span><a class="a_caption" href="<?php echo $hrefurl; ?>"><?php echo $related_item["judul"]; ?></a></span>
                    </div>
                    <?php
                    echo '</div>';

                    /*if ($jumlah % 2 == 0) {
                        echo '<div class="clearfix mobile_col"></div>';
                    }*/
                    if ($jumlah % 5 == 0) {
                        echo '<div class="span_2_of_24 col filler_col"></div>'; /*'<div class="clearfix filler_col"></div>';*/
                    }

                    $jumlah++;

                    /*mobile list*/
                    ?>
                    <div class="col col_mobile_first span_mobile_12_of_24 mobile_col">
                        <a class="ratiobox ratiobox16_10 a_img"
                           href="<?php echo $hrefurl; ?>">
                            <div class="ratiobox_content bg_image_div_contain" style="background-image: url(<?php echo $related_item["url_gbr"]; ?>);"></div>
                        </a>
                    </div>
                    <div class="col col_mobile_last span_mobile_12_of_24 mobile_col">
                        <a class="a_caption" href="<?php echo $hrefurl; ?>"><strong><?php echo $related_item["judul"]; ?></strong></a>
                    </div>
                    <div class="clearfix mobile_col"></div>
                    <?php
                }
                //MainHelper::properlyEndColList($jumlah);
            }
            ?>
        </div>
    </div>
    <?php
}
?>

<?php
if(isset($bennersaddsdetailpage) && is_array($bennersaddsdetailpage) && count($bennersaddsdetailpage) > 0){
?>
    <br><br>
    <div class="section group">
        <div class="col span_10_of_24 filler_col"></div>
        <div class="col span_24_of_24">
            <div class="col span_16_of_24 col_mobile span_mobile_bodybottom">
                <div class="slider">
                    <?php
                    foreach ($bennersaddsdetailpage as $banners) {
                        ?>
                        <a href="<?php echo $banners['url_linkadsdetailpage']; ?>"><img src="<?php echo $banners['url_gbradsdetailpage']; ?>"/>
                            <span class="btn-gradbodydetailbotom">Ads</span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="spacerAdsBotom"></div>
            </div>
        </div>
    </div> 
<?php
}
?>




