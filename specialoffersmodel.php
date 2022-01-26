<?php
require_once 'traits/mainpicmodeltrait.php';

class SpecialOffersModel extends Model{
    use MainPicModelTrait;
    public function getAdsBanner($param = NULL, $sql_str = "SELECT url_gbr FROM ads_registrye"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getAdsBennerBody($param = NULL, $sql_str = "SELECT url_gbradsbody FROM ads_registrye_body"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerFooter($param = NULL, $sql_str = "SELECT url_gbradsfooter FROM ads_registrye_footer"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getSpecialOffers($param = NULL, $sql_str = "SELECT id, judul, url_judul, kk, deskp, isi, iso_country, id_city, DATE_FORMAT(tgl, '%M %d, %Y') as formated_tgl, stat FROM specialoffers"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerHeadertwo($param = NULL, $sql_str = "SELECT url_gbradsheadertwo, url_linkadsheadertwo FROM ads_registrye_headertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerBodytwo($param = NULL, $sql_str = "SELECT  url_gbradsbodytwo, url_linkadsbodytwo FROM ads_registrye_bodytwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerFootertwo($param = NULL, $sql_str = "SELECT url_gbradsfootertwo, url_linkadsfootertwo FROM ads_registrye_footertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerSide($param = NULL, $sql_str = "SELECT url_gbradsside, url_linkadsside FROM ads_registrye_side"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerDetailPage($param = NULL, $sql_str = "SELECT url_gbradsdetailpage, url_linkadsdetailpage FROM ads_registrye_detailpage"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerSlider($param = NULL, $sql_str = "SELECT  url_gbrslider, url_linkslider FROM ads_registrye_slider"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerSliderTwo($param = NULL, $sql_str = "SELECT  url_gbrslidertwo, url_linkslidertwo FROM ads_registrye_slidertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getdataroom($param = NULL, $sql_str = "SELECT id, id_specialoffers, judul_room, deskp, room_size, capasity_room, bedroom, bathroom, capasity_guest, additional_rooms1, additional_rooms2, additional_rooms3, additional_rooms4, room_view, harga, harga_promo, presentase_harga_promo, deksripsi_harga_room, DATE_FORMAT(tgl_tempo, '%d %M %Y') as formated_tgl, tlp_book, textbtnbook, title_deskripsifasilitas, deksripsi_fasilitas, day_oprasional, jam_oprasional, note_text, fasilitas1, fasilitas2, fasilitas3, fasilitas4, fasilitas5, fasilitas6, fasilitas7, fasilitas8, fasilitas9, fasilitas10, fasilitas11, fasilitas12, fasilitas13, fasilitas14, fasilitas15, fasilitas16, fasilitas17, fasilitas18, fasilitas19, fasilitas20, fasilitas21, fasilitas22, fasilitas23, fasilitas24, fasilitas25, fasilitas26, fasilitas27, fasilitas28, fasilitas29, fasilitas30, fasilitas31, fasilitas32, fasilitas33, title_roomservice, deksripsi_roomservice, roomservice1, roomservice2, roomservice3, roomservice4, roomservice5, roomservice6, roomservice7, roomservice8, roomservice9, roomservice10, roomservice11, roomservice12, roomservice13, roomservice14, roomservice15, roomservice16, roomservice17, roomservice18, roomservice19, roomservice20, roomservice21, roomservice22, roomservice23, roomservice24, roomservice25, roomservice26, roomservice27, roomservice28, roomservice29, roomservice30, roomservice31, roomservice32, roomservice33, url_gbr1, url_gbr2, url_gbr3, url_gbr4, url_gbr5, url_gbr6, url_gbr7, url_gbr8, url_gbr9, url_gbr10, url_gbr11, url_gbr12, url_gbr13, url_gbr14, url_gbr15, url_gbr16, url_gbr17, url_gbr18, url_gbr19, url_gbr20, url_gbr21, url_gbr22, url_gbr23, url_gbr24, url_gbr25, url_gbr26, url_gbr27, url_gbr28, url_gbr29, url_gbr30, url_gbr31, url_gbr32, url_gbr33, url_gbr34, url_gbr35 FROM specialoffers_room"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getdataroommenu($param = NULL, $sql_str = "SELECT id, id_specialoffers, judul_menu, title_menu, text_view, deksripsi_menu, url_gbr1, url_gbr2, url_gbr3, url_gbr4, url_gbr5, url_gbr6, url_gbr7, url_gbr8, url_gbr9, url_gbr10, url_gbr11, url_gbr12, url_gbr13, url_gbr14, url_gbr15, url_gbr16, url_gbr17, url_gbr18, url_gbr19, url_gbr20, url_gbr21, url_gbr22, url_gbr23, url_gbr24, url_gbr25, url_gbr26, url_gbr27, url_gbr28, url_gbr29, url_gbr30, title_deskripsi_benefit_menu, benefit_package_menu1, benefit_package_menu2, benefit_package_menu3, benefit_package_menu4, benefit_package_menu5, benefit_package_menu6, benefit_package_menu7, benefit_package_menu8, title_utama1, title_utama2, title_utama3, title_utama4, title_utama5, title_utama6,title_utama7,title_utama8, sub_text_title1, sub_text_title2, sub_text_title3, sub_text_title4, sub_text_title5, sub_text_title6,sub_text_title7,sub_text_title8, note_text1, note_text2, note_text3, note_text4, note_text5, note_text6, note_text7, note_text8, benefit_menu1, benefit_menu2, benefit_menu3, benefit_menu4, benefit_menu5, benefit_menu6, benefit_menu7, benefit_menu8, benefit_menu9, benefit_menu10, benefit_menu11, benefit_menu12, benefit_menu13, benefit_menu14, benefit_menu15, benefit_menu16, benefit_menu17, benefit_menu18, benefit_menu19, benefit_menu20, benefit_menu21, benefit_menu22, benefit_menu22, benefit_menu22, benefit_menu23, benefit_menu24, benefit_menu25, benefit_menu26, benefit_menu27, benefit_menu28, benefit_menu29, benefit_menu30, benefit_menu31, benefit_menu32, benefit_menu33, benefit_menu34, benefit_menu35, benefit_menu36, benefit_menu37, benefit_menu38, benefit_menu39, benefit_menu40, benefit_menu41, benefit_menu42, benefit_menu43, benefit_menu44, benefit_menu45, benefit_menu46, benefit_menu47, benefit_menu48, benefit_menu49, benefit_menu50, benefit_menu51, benefit_menu52, benefit_menu53, benefit_menu54, benefit_menu55, benefit_menu56, benefit_menu57, benefit_menu58, benefit_menu59, benefit_menu60, benefit_menu61, benefit_menu62, benefit_menu63, benefit_menu64, benefit_menu65, benefit_menu66, benefit_menu67, benefit_menu68, benefit_menu69, benefit_menu70, benefit_menu71, benefit_menu72, benefit_menu73, benefit_menu74, benefit_menu75, benefit_menu76, benefit_menu77, benefit_menu78, benefit_menu79, benefit_menu80, benefit_menu81, benefit_menu82, benefit_menu83, benefit_menu84, benefit_menu85, benefit_menu86, benefit_menu87, benefit_menu88, benefit_menu89, benefit_menu90, benefit_menu91, benefit_menu92, benefit_menu93, benefit_menu94, benefit_menu95, benefit_menu96, title_deskripsitermconditions_menu, term_conditions_menu, termsandconditions1, termsandconditions2, termsandconditions3, termsandconditions4, termsandconditions5, termsandconditions6, termsandconditions7, termsandconditions8, termsandconditions9, termsandconditions10, termsandconditions11, termsandconditions12, termsandconditions13, termsandconditions14, termsandconditions15, termsandconditions16, termsandconditions17, termsandconditions18, termsandconditions19, termsandconditions20, termsandconditions21, termsandconditions21, termsandconditions22, termsandconditions23, termsandconditions24, termsandconditions25, termsandconditions26, termsandconditions27, termsandconditions28, termsandconditions29, termsandconditions30, title_deskripsicancelpolicy_menu, cancel_policy_menu FROM specialoffers_room_menu"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getSpecialOffersSubCategories($param = NULL, $sql_str = "SELECT id, kategori, url_kat FROM specialoffers_categories"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getRelatedSpecialOffers($id, $iso_country, $stat){
        $this->query("SELECT specialoffers.id, specialoffers.judul, specialoffers.url_judul, specialoffers.url_gbr, specialoffers_categories.url_kat FROM specialoffers LEFT JOIN specialoffers_categories ON specialoffers.kategori = specialoffers_categories.id WHERE specialoffers.id <> :id AND specialoffers.iso_country = :iso AND specialoffers.stat = :stat ORDER BY specialoffers.tgl DESC LIMIT 5");
        $this->bind(":id", $id);
        $this->bind(":iso", $iso_country);
        $this->bind(":stat", $stat);
        return $this->resultSet();
    }

    public function getLatestFeed(){
        $this->query("SELECT specialoffers.id, specialoffers.judul, specialoffers.url_judul, specialoffers.deskp, specialoffers.url_gbr, specialoffers.stat, (SELECT COUNT(view_counter.id) FROM view_counter WHERE view_counter.page_id = specialoffers.id) as view_count, specialoffers_categories.url_kat FROM specialoffers LEFT JOIN specialoffers_categories ON specialoffers.kategori = specialoffers_categories.id WHERE specialoffers.iso_country = :iso AND specialoffers.stat > 0 ORDER BY specialoffers.tgl DESC LIMIT 3");
        $this->bind(":iso", $this->registry->url_iso_country);
        return $this->resultSet();
    }

    public function getHasItemSpecialOffersSubCategories($idcat){
        $this->query("SELECT id, kategori, url_kat FROM specialoffers_categories WHERE id > 0 AND id IN (SELECT DISTINCT kategori FROM specialoffers WHERE iso_country = :iso AND stat = :specialofferstype) ORDER BY kategori");
        $this->bind(":iso", $this->registry->url_iso_country);
        $this->bind(':specialofferstype', $idcat);
        return $this->resultSet();
    }

    public function getTopMenuLocations($specialofferstype = NULL, $idcat = NULL){
        $db_city = "ma_cities_" . $this->registry->url_iso_country;
        $db_state = "ma_states_" . $this->registry->url_iso_country;
        $sql_str = "SELECT ".$db_city.".id as idnya, ".$db_city.".city as kotanya, ".$db_city.".state_code as scnya, ".$db_state.".state as propnya FROM " . $db_city . " LEFT JOIN ".$db_state." ON ".$db_city.".state_code = ".$db_state.".id WHERE ".$db_city.".id IN (SELECT DISTINCT specialoffers.id_city FROM specialoffers WHERE specialoffers.iso_country = :iso";
        if(!empty($specialofferstype)) $sql_str = $sql_str . " AND specialoffers.stat = :specialofferstype";
        if(!empty($idcat)) $sql_str = $sql_str . " AND specialoffers.kategori = :idcat";
        $sql_str = $sql_str . ") ORDER BY propnya, kotanya";
        $this->query($sql_str);
        $this->bind(':iso', $this->registry->url_iso_country);
        if(!empty($specialofferstype)) $this->bind(':specialofferstype', $specialofferstype);
        if(!empty($idcat)) $this->bind(':idcat', $idcat);
        return $this->resultSet();
    }

    public function getSpecialOffersList($specialofferstype = NULL, $idcat = NULL, $idcity = NULL, $order_by = NULL, $limitervalue = NULL, $str_in_sub = NULL, $str_in_city = NULL, $str_q_search = NULL){
        $sql_str_search = "";
        if (!empty($str_q_search)) {
            $keyword = explode(' ', $str_q_search);
            if (count($keyword) > 0) {

                $writeprecond = false;
                $writespace = false;
                for ($i = 0; $i < (count($keyword)); $i++) {
                    $keyword[$i] = Validator::checkWord($keyword[$i]);
                    if (!empty($keyword[$i])) {
                        if (!$writeprecond) {
                            $sql_str_search = " ( SELECT ars.id AS id, ars.judul AS judul, ars.url_judul AS url_judul, ars.kk AS kk, ars.deskp AS deskp, ars.url_gbr AS url_gbr, ars.tgl AS tgl, ars.kategori AS kategori, ars.id_city AS id_city, ars.author AS author, ars.iso_country AS iso_country, ars.stat AS stat, MATCH (ars.judul, ars.kk, ars.deskp) AGAINST ('";
                            $writeprecond = true;
                        }
                        if ($writespace) $sql_str_search = $sql_str_search . " ";
                        else $writespace = true;
                        $sql_str_search = $sql_str_search . "+" . $keyword[$i];
                    }
                }

                if ($writeprecond) {
                    $sql_str_search = $sql_str_search . "' IN BOOLEAN MODE) as score FROM specialoffers ars )";

                    $writeprecond2 = false;
                    for ($i = 0; $i < (count($keyword)); $i++) {
                        $keyword[$i] = Validator::checkWord($keyword[$i]);
                        if (!empty($keyword[$i])) {
                            if (!$writeprecond2) {
                                $sql_str_search = " ( SELECT ars2.id AS id, ars2.judul AS judul, ars2.url_judul AS url_judul, ars2.deskp AS deskp, ars2.url_gbr AS url_gbr, ars2.tgl AS tgl, ars2.kategori AS kategori, ars2.id_city AS id_city, ars2.author AS author, ars2.iso_country AS iso_country, ars2.stat AS stat, ars2.score AS score FROM " . $sql_str_search . " as ars2 WHERE";
                                $writeprecond2 = true;
                            } else $sql_str_search = $sql_str_search . " OR ";
                            $sql_str_search = $sql_str_search . " ars2.judul LIKE '%" . $keyword[$i] . "%' OR ars2.kk LIKE '%" . $keyword[$i] . "%' OR ars2.deskp LIKE '%" . $keyword[$i] . "%'";
                        }
                    }

                    if ($writeprecond2) $sql_str_search = $sql_str_search . " ) as";
                }

            }
        }

        $db_city = "ma_cities_".$this->registry->url_iso_country;
        $db_state = "ma_states_".$this->registry->url_iso_country;
        $sql_str = "SELECT specialoffers.id, specialoffers.judul, specialoffers.url_judul, specialoffers.deskp, specialoffers.url_gbr, DATE_FORMAT(specialoffers.tgl, '%M %d, %Y') as formated_tgl, specialoffers.stat, (SELECT COUNT(view_counter.id) FROM view_counter WHERE view_counter.page_id = specialoffers.id) as view_count";
        if(!empty($sql_str_search)) $sql_str = $sql_str . ", specialoffers.score";
        $sql_str = $sql_str . ", specialoffers_categories.kategori, specialoffers_categories.url_kat, ".$db_city.".city, ".$db_city.".state_code, ".$db_state.".state, user_login.nama FROM";
        if(!empty($sql_str_search)) $sql_str = $sql_str . $sql_str_search;
        $sql_str = $sql_str . " specialoffers LEFT JOIN specialoffers_categories ON specialoffers.kategori = specialoffers_categories.id LEFT JOIN ".$db_city." ON ".$db_city.".id = specialoffers.id_city LEFT JOIN ".$db_state." ON ".$db_city.".state_code = ".$db_state.".state_code LEFT JOIN user_login ON specialoffers.author = user_login.id WHERE specialoffers.iso_country = :iso AND specialoffers.stat > 0";
        if(!empty($specialofferstype))$sql_str = $sql_str . " AND specialoffers.stat = :specialofferstype";
        if(!empty($idcat))$sql_str = $sql_str . " AND specialoffers.kategori = :idcat";
        elseif (isset($str_in_sub) && !empty($str_in_sub)){
            $str_in_sub = preg_replace('/[^0-9,]/s', '', $str_in_sub);
            if (!empty($str_in_sub)) $sql_str = $sql_str . " AND specialoffers.kategori IN (".$str_in_sub.")";
        }
        if(!empty($idcity))$sql_str = $sql_str . " AND specialoffers.id_city = :idcity";
        elseif (isset($str_in_city) && !empty($str_in_city)){
            $str_in_city = preg_replace('/[^0-9,]/s', '', $str_in_city);
            if (!empty($str_in_city)) $sql_str = $sql_str . " AND specialoffers.id_city IN (".$str_in_city.")";
        }
        $order_cond = " specialoffers.tgl DESC";
        if($order_by==2) $order_cond = " specialoffers.judul ASC";
        elseif($order_by==3) $order_cond = " specialoffers.judul DESC";
        elseif(!empty($sql_str_search) && $order_by==0) $order_cond = " specialoffers.score DESC";
        $sql_str = $sql_str . " ORDER BY" . $order_cond;

        $sql_str = $sql_str . $this->concatLimiter($limitervalue);

        //echo $sql_str."<br/>".$specialofferstype;

        $this->query($sql_str);
        $this->bind(":iso", $this->registry->url_iso_country);
        if(!empty($specialofferstype))$this->bind(":specialofferstype", $specialofferstype);
        if(!empty($idcat))$this->bind(":idcat", $idcat);
        if(!empty($idcity))$this->bind(":idcity", $idcity);
        return $this->resultSet();
    }
}