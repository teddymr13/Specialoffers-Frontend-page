<?php
require_once "traits/indextrait.php";
require_once "traits/viewcountertrait.php";
class SpecialOffers extends Controller{
	use IndexTrait, ViewCounterTrait;

	private function setTopMenuCategories($viewmodel){
        $top_menu_categories_check_child = array();
        for ($i=1; $i<=8; $i++){
            $row = $viewmodel->getHasItemSpecialOffersSubCategories($i);
            if($row && count($row) > 0) $top_menu_categories_check_child[$i] = true;
        }
        $this->registry->template->top_menu_categories_check_child = $top_menu_categories_check_child;
    }

    protected function index(){
        $viewmodel = new SpecialOffersModel($this->registry);
        $this->setIndex($viewmodel);
        $this->setTopMenuCategories($viewmodel);
        $limitervalue = 10;
        $total_list = $viewmodel->getSpecialOffersList();
        $this->registry->template->total_list = count($total_list);
        $this->registry->template->data_list = $viewmodel->getSpecialOffersList(NULL, NULL, NULL, NULL, array("count"=>$limitervalue));
        $this->registry->template->limitervalue = $limitervalue;
        $this->registry->template->listIndex = true;
        //$this->registry->template->adsbanner = $viewmodel->getAdsBanner();
        //$this->registry->template->bennersaddsbody = $viewmodel->getAdsBennerBody();
        //$this->registry->template->bennersaddsfooter = $viewmodel->getAdsBennerFooter();
        $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
        $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
        $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
        $this->registry->template->bennersaddsdetailpage = $viewmodel->getAdsBennerDetailPage();
        $this->registry->template->bennersaddsside = $viewmodel->getAdsBennerSide();
        $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
        $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();

        $jsSrc = array();
        $jsSrc[0]["type"] = "php";
        $jsSrc[0]["src"] = "views/includes/scripts/index_scripts.php";
        $jsSrc[1]["type"] = "php";
        $jsSrc[1]["src"] = "views/includes/scripts/list_load_more_scripts.php";
        $jsSrc[2]["type"] = "php";
        $jsSrc[2]["src"] = "views/includes/scripts/index_ads_banner.php";
       
        $this->registry->template->jsSrc = $jsSrc;
        //View
        $this->returnView(true, 'includes/index_intro.php');
    }


    protected function ajax_refresh_top_menu_sub_2lvlcat(){
        $post = filter_input_array(INPUT_POST, array('idc' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 1, 'max_range' => 8))));

        if(!empty($post['idc'])){
            $viewmodel = new SpecialOffersModel($this->registry);
            if($post['idc']==1)$this->registry->template->catUrl = "hotels-resorts";
            if($post['idc']==2)$this->registry->template->catUrl = "recreation";
            if($post['idc']==3)$this->registry->template->catUrl = "gourmet"; //'happening';
            if($post['idc']==4)$this->registry->template->catUrl = "dining";
            if($post['idc']==5)$this->registry->template->catUrl = "beauty-wellness";
            if($post['idc']==6)$this->registry->template->catUrl = "sport-leisure";
            if($post['idc']==7)$this->registry->template->catUrl = "seasonal-gift";
            if($post['idc']==8)$this->registry->template->catUrl = "other";
            $this->registry->template->top_menu_subcategories = $viewmodel->getHasItemSpecialOffersSubCategories($post['idc']);
            $this->returnView(false, "ajax/".$this->action.".php");
        }
    }

    protected function route_specialoffers_list(){
        if(!empty($_GET['main_cat'])){
            if (!empty($_GET['id_city']) && !empty($_GET['url_city']) && empty($_GET['url_cat'])) $this->list_by_city();
            else $this->list_by_category();
        }
    }
    protected function list_by_category(){
        $invalid_url = true;

        $main_cat = strtolower($_GET["main_cat"]);
        $specialofferstype = 0;
        if($main_cat=="hotels-resorts"){
            $str_main_cat = "Hotels & Resorts";
            $specialofferstype = 1;
        }
        if($main_cat=="recreation"){
            $str_main_cat = "Recreation";
            $specialofferstype = 2;
        }
        if($main_cat=="gourmet"){
            $str_main_cat = "Gourmet";
            $specialofferstype = 3;
        }
        if($main_cat=="dining"){
            $str_main_cat = "Dining";
            $specialofferstype = 4;
        }
        if($main_cat=="beauty-wellness"){
            $str_main_cat = "Beauty & Wellness";
            $specialofferstype = 5;
        }
        if($main_cat=="sport-leisure"){
            $str_main_cat = "Sport Leisure";
            $specialofferstype = 6;
        }
        if($main_cat=="seasonal-gift"){
            $str_main_cat = "Seasonal Gift";
            $specialofferstype = 7;
        }
        if($main_cat=="other"){
            $str_main_cat = "Other";
            $specialofferstype = 8;
        }
        if($specialofferstype>=1 && $specialofferstype<=8) {
            $url_cat = '';
            if (isset($_GET['url_cat'])) $url_cat = MainHelper::getUrlString($_GET['url_cat']);
            $id_city = '';
            if (isset($_GET['id_city'])) $id_city = intval(filter_var($_GET['id_city']), FILTER_VALIDATE_INT);
            $url_city = '';
            if (isset($_GET['url_city'])) $url_city = MainHelper::getUrlString($_GET['url_city']);
            if((!empty($id_city)&&empty($url_city))||(empty($id_city)&&!empty($url_city))) $invalid_url = true;
            else {
                $limitervalue = 10;
                $viewmodel = new SpecialOffersModel($this->registry);

                $str_page_title = $str_h1_title = $str_cap_title = "";
                if (!empty($url_cat)) {
                    $data_check_cat = $viewmodel->getSpecialOffersSubCategories(array("url_kat"=>$url_cat));
                    if($data_check_cat && count($data_check_cat)==1 && $data_check_cat[0]["id"] > 0) {
                        $this->registry->template->top_menu_cities = $viewmodel->getTopMenuLocations($specialofferstype, $data_check_cat[0]["id"]);
                        $this->registry->template->url_sub_kat = $data_check_cat[0]["url_kat"];

                        if (!empty($id_city) && !empty($url_city)) {
                            $countrymodel = new CountryModel($this->registry);
                            $data_check_city = $countrymodel->getCityLeftjoinStateName(array("Ci.id"=>$id_city));
                            if($data_check_city && count($data_check_city)==1 && MainHelper::getUrlString($data_check_city[0]["city"]) == $url_city){
                                $total_list = $viewmodel->getSpecialOffers(array("stat"=>$specialofferstype, "kategori"=>$data_check_cat[0]["id"], "id_city"=>$id_city, "iso_country"=>$this->registry->url_iso_country));
                                $data_list = $viewmodel->getSpecialOffersList($specialofferstype, $data_check_cat[0]["id"], $id_city, NULL, array("count"=>$limitervalue));

                                $str_cap_title = CountryHelper::formatCityStateName($this->registry->url_iso_country, $data_check_city[0]["city"], $data_check_city[0]["state"], $data_check_city[0]["state_code"]);
                                $str_page_title = $str_cap_title . " | " . $data_check_cat[0]["kategori"];
                                $str_h1_title = $str_main_cat . " - " . $data_check_cat[0]["kategori"];

                                $this->registry->template->id_city = $id_city;
                                $this->registry->template->ajax_param = "specialofferstype=".$specialofferstype."&id_cat=".$data_check_cat[0]["id"]."&id_city=".$id_city;
                            }
                        }
                        else {
                            $total_list = $viewmodel->getSpecialOffers(array("stat"=>$specialofferstype, "kategori"=>$data_check_cat[0]["id"], "iso_country"=>$this->registry->url_iso_country));
                            $data_list = $viewmodel->getSpecialOffersList($specialofferstype, $data_check_cat[0]["id"], NULL, NULL, array("count"=>$limitervalue));

                            $str_page_title = $data_check_cat[0]["kategori"];
                            $str_h1_title = $str_main_cat . " - " . $data_check_cat[0]["kategori"];

                            $this->registry->template->list_by = 'sub';
                            $this->registry->template->ajax_param = "specialofferstype=".$specialofferstype."&id_cat=".$data_check_cat[0]["id"];

                        }
                    }
                }
                else {
                    $total_list = $viewmodel->getSpecialOffers(array("stat"=>$specialofferstype, "iso_country"=>$this->registry->url_iso_country));
                    $data_list = $viewmodel->getSpecialOffersList($specialofferstype, NULL, NULL, NULL, array("count"=>$limitervalue));
                    
                    $str_page_title = $str_main_cat;
                    $str_h1_title = $str_main_cat;

                    $this->registry->template->top_menu_cities = $viewmodel->getTopMenuLocations($specialofferstype);
                    $this->registry->template->list_by = 'cat';
                    $this->registry->template->ajax_param = "specialofferstype=".$specialofferstype;

                }

                if($data_list && count($data_list)>0){
                    $this->setTopMenuCategories($viewmodel);
                    $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
                    $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
                    $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
                    $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
                    $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();
                    $this->registry->template->data_list = $data_list;
                    $invalid_url = false;
                }
            }
        }

        if(!$invalid_url){
            $this->registry->template->page_title = $str_page_title . " | " . MainHelper::getStrPage() . " - " . $this->registry->template->info_per["sebutan"];
            // $this->registry->template->h1_title = strtolower($str_h1_title);
            $this->registry->template->h1_title = ($str_h1_title);
            $this->registry->template->str_cap_title = $str_cap_title;

            $this->registry->template->specialofferstype = $specialofferstype;
            $this->registry->template->limitervalue = $limitervalue;

            if($total_list && count($total_list)>=0)$this->registry->template->total_list = count($total_list);

            $this->registry->template->cssSrc = array("specialoffers.css");

            $jsSrc = array();
            $jsSrc[0]["type"] = "php";
            $jsSrc[0]["src"] = "views/includes/scripts/list_load_more_scripts.php";
            $jsSrc[1]["type"] = "php";
            $jsSrc[1]["src"] = "views/includes/scripts/index_ads_banner.php";
            $this->setScriptNonce();
            $this->registry->template->jsSrc = $jsSrc;

            $this->returnView(true, "includes/list_specialoffers.php");
        }
        else Redirect::pageNotFound();
    }

    protected function list_by_city(){
        $invalid_url = true;

        $main_cat = strtolower($_GET["main_cat"]);
        $specialofferstype = 0;
        if($main_cat=="hotels-resorts") $specialofferstype = 1;
        if($main_cat=="recreation") $specialofferstype = 2;
        if($main_cat=="gourmet") $specialofferstype = 3;
        if($main_cat=="dining") $specialofferstype = 4;
        if($main_cat=="beauty-wellness") $specialofferstype = 5;
        if($main_cat=="sport-leisure") $specialofferstype = 6;
        if($main_cat=="seasonal-gift") $specialofferstype = 7;
        if($main_cat=="other") $specialofferstype = 8;
        if($specialofferstype>=1 && $specialofferstype<=8) {
            $id_city = '';
            if (isset($_GET['id_city'])) $id_city = intval(filter_var($_GET['id_city'], FILTER_VALIDATE_INT));
            $url_city = '';
            if (isset($_GET['url_city'])) $url_city = MainHelper::getUrlString($_GET['url_city']);

            if(!empty($id_city) && !empty($url_city)){
                $countrymodel = new CountryModel($this->registry);
                $data_check_city = $countrymodel->getCityLeftjoinStateName(array("Ci.id"=>$id_city));
                if($data_check_city && count($data_check_city)==1 && MainHelper::getUrlString($data_check_city[0]["city"]) == $url_city){
                    $limitervalue = 10;
                    $viewmodel = new SpecialOffersModel($this->registry);
                    $data_list = $viewmodel->getSpecialOffersList($specialofferstype, NULL, $id_city, NULL, array("count"=>$limitervalue));
                    if($data_list && count($data_list)>0){
                        $this->setTopMenuCategories($viewmodel);
                        $this->registry->template->top_menu_cities = $viewmodel->getTopMenuLocations($specialofferstype);
                        $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
                        $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
                        $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
                        $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
                        $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();
                        $total_list = $viewmodel->getSpecialOffers(array("stat"=>$specialofferstype, "id_city"=>$id_city, "iso_country"=>$this->registry->url_iso_country));
                        $this->registry->template->data_list = $data_list;
                        $invalid_url = false;
                    }
                }
            }
        }

        if(!$invalid_url){
            $format_cityname = CountryHelper::formatCityStateName($this->registry->url_iso_country, $data_check_city[0]["city"], $data_check_city[0]["state"], $data_check_city[0]["state_code"]);
            $this->registry->template->page_title = $format_cityname . " | " . MainHelper::getStrPage() . " - " . $this->registry->template->info_per["sebutan"];
            $this->registry->template->h1_title = $format_cityname;

            $this->registry->template->specialofferstype = $specialofferstype;
            $this->registry->template->id_city = $id_city;
            $this->registry->template->ajax_param = "specialofferstype=".$specialofferstype."&id_city=".$id_city;
            $this->registry->template->list_by = "city";
           
            $this->registry->template->limitervalue = $limitervalue;

            if($total_list && count($total_list)>=0)$this->registry->template->total_list = count($total_list);

            $this->registry->template->cssSrc = array("specialoffers.css");

            $jsSrc = array();
            $jsSrc[0]["type"] = "php";
            $jsSrc[0]["src"] = "views/includes/scripts/list_load_more_scripts.php";
            $jsSrc[1]["type"] = "php";
            $jsSrc[1]["src"] = "views/includes/scripts/index_ads_banner.php";
            $this->setScriptNonce();
            $this->registry->template->jsSrc = $jsSrc;

            $this->returnView(true, "includes/list_specialoffers.php");
        }
        else Redirect::pageNotFound();
    }

    protected function list_search(){
        $url_q = '';
        if(isset($_POST["top_search_field"])) $url_q = trim(rawurldecode($_POST["top_search_field"]));

        $limitervalue = 10;

        $viewmodel = new SpecialOffersModel($this->registry);
        $data_list = $viewmodel->getSpecialOffersList(NULL, NULL, NULL, NULL, array("count"=>$limitervalue), NULL, NULL, $url_q);

        if(is_array($data_list)){
            $this->registry->template->top_menu_cities = $viewmodel->getTopMenuLocations();

            if(count($data_list)>0){
                $total_list = $viewmodel->getSpecialOffersList(NULL, NULL, NULL, NULL, NULL, NULL, NULL, $url_q);
                if($total_list && count($total_list)>=0)$this->registry->template->total_list = count($total_list);
            }
            else $this->registry->template->total_list = 0;

            $this->registry->template->data_list = $data_list;

            $this->registry->template->page_title = "Search " . MainHelper::getStrPage() . " - " . $this->registry->template->info_per["sebutan"];
            $this->registry->template->h1_title = Validator::xss_block($url_q);

            $this->registry->template->listSearch = true;
            $this->registry->template->limitervalue = $limitervalue;
            $this->registry->template->ajax_param = "q=";
            if(isset($_POST["top_search_field"])) $this->registry->template->ajax_param .= $_POST["top_search_field"];
            $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
            $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
            $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
            $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
            $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();
            $this->registry->template->cssSrc = array("specialoffers.css");

            $jsSrc = array();
            $jsSrc[0]["type"] = "php";
            $jsSrc[0]["src"] = "views/includes/scripts/list_specialoffers_search_scripts.php";
            $jsSrc[1]["type"] = "php";
            $jsSrc[1]["src"] = "views/includes/scripts/index_ads_banner.php";
            $this->setScriptNonce();
            $this->registry->template->jsSrc = $jsSrc;

            $this->returnView(true, "includes/list_specialoffers.php");
        }
    }

       protected function detail_page_specialoffers(){
        $invalid_url = true;

        $main_cat = strtolower($_GET["main_cat"]);
        $url_cat = '';
        if(isset($_GET['url_cat'])) $url_cat = MainHelper::getUrlString($_GET['url_cat']);
        $url_id = '';
        if(isset($_GET['url_id'])) $url_id = intval(filter_var($_GET['url_id'], FILTER_VALIDATE_INT));
        $url_title = '';
        if(isset($_GET['url_title'])) $url_title = MainHelper::getUrlString($_GET['url_title']);
        $args = array(
            'url_id' => FILTER_VALIDATE_INT
        );
        $get = filter_input_array(INPUT_GET, $args);

        if(($main_cat=="hotels-resorts"||$main_cat=="recreation"||$main_cat=="gourmet"||$main_cat=="dining"||$main_cat=="beauty-wellness"||$main_cat=="sport-leisure" ||$main_cat=="seasonal-gift" ||$main_cat=="other") && !empty($url_cat) && !empty($url_id) && !empty($url_title)){
            if($main_cat=="hotels-resorts") $specialofferstype = 1;
            if($main_cat=="recreation") $specialofferstype = 2;
            if($main_cat=="gourmet") $specialofferstype = 3;
            if($main_cat=="dining") $specialofferstype = 4;
            if($main_cat=="beauty-wellness") $specialofferstype = 5;
            if($main_cat=="sport-leisure") $specialofferstype = 6;
            if($main_cat=="seasonal-gift") $specialofferstype = 7;
            if($main_cat=="other") $specialofferstype = 8;
            $this->registry->template->specialofferstype = $specialofferstype;
            $this->registry->template->main_cat = $main_cat;


            $viewmodel = new SpecialOffersModel($this->registry);
            $data_check_cat = $viewmodel->getSpecialOffersSubCategories(array("url_kat"=>$url_cat));
            if($data_check_cat && count($data_check_cat)==1){
                $data_specialoffers = $viewmodel->getSpecialOffers(array("id"=>$url_id, "url_judul"=>$url_title, "kategori"=>$data_check_cat[0]["id"], "stat"=>$specialofferstype));

                if($data_specialoffers && count($data_specialoffers)==1){

                    $this->registry->template->data_specialoffers = $data_specialoffers[0];

                    $this->registry->template->page_title = $data_specialoffers[0]["judul"] . " | " . MainHelper::getStrPage() . " - " . $this->registry->template->info_per["sebutan"];
                    $this->registry->template->meta_description = $data_specialoffers[0]["deskp"];
                    $this->registry->template->meta_keywords = $data_specialoffers[0]["kk"];

                    $this->registry->template->top_menu_cities = $viewmodel->getTopMenuLocations($specialofferstype);
                    $this->setTopMenuCategories($viewmodel);
                    $this->registry->template->h1_title = $data_specialoffers[0]["judul"];
                    $this->registry->template->str_cap_title = $data_specialoffers[0]["formated_tgl"];  
                    $this->registry->template->data_related = $viewmodel->getRelatedSpecialOffers($data_specialoffers[0]["id"], $data_specialoffers[0]["iso_country"], $data_specialoffers[0]["stat"]);

                    //$this->registry->template->adsbanner = $viewmodel->getAdsBanner();
                    //$this->registry->template->bennersaddsbody = $viewmodel->getAdsBennerBody();
                    //$this->registry->template->bennersaddsfooter = $viewmodel->getAdsBennerFooter();
                    $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
                    $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
                    $this->registry->template->bennersaddsdetailpage = $viewmodel->getAdsBennerDetailPage();
                    $this->registry->template->bennersaddsside = $viewmodel->getAdsBennerSide();
                    $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
                    $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
                    $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();
                   
                    
                    $this->registry->template->data_room = $data_room = $viewmodel->getdataroom(array("id_specialoffers"=>$get["url_id"]));
                    $this->registry->template->data_roommenu = $data_roommenu = $viewmodel->getdataroommenu(array("id_specialoffers"=>$get["url_id"]));
                    $this->registry->template->main_pic = $main_pic = $viewmodel->getMainPic(false, $url_id);
                    foreach ($main_pic as $data_pic) {
                        if (!empty($data_pic["url_gbr"])){
                            $this->registry->template->meta_og_image = $data_pic["url_gbr"];
                            break;
                        }
                    }
                    $invalid_url = false;
                }
            }
        }
        
        if(!$invalid_url){
            $this->registry->template->url_cat = $url_cat;
            $this->registry->template->cssSrc = array("specialoffers.css");
            $this->registry->template->viewCounter = count($this->getViewCounterData($url_id));
            // $this->ajax_room_pic($url_id);
            $this->increaseViewCounter($url_id);
            
            $jsSrc = array();
            $jsSrc[0]["type"] = "php";
            $jsSrc[0]["src"] = "views/includes/scripts/index_scripts.php";
            $jsSrc[1]["type"] = "js";
            $jsSrc[1]["src"] = "assets/js/bundles/share.js";
            $jsSrc[2]["type"] = "js";
            $jsSrc[2]["src"] = "assets/js/bundles/detail_page_body_youtube_video.js";
            $jsSrc[3]["type"] = "php";
            $jsSrc[3]["src"] = "views/includes/scripts/index_product_scripts.php";
            $jsSrc[4]["type"] = "php";
            $jsSrc[4]["src"] = "views/includes/scripts/index_ads_banner.php";
            $this->setScriptNonce();
            $this->registry->imageCSP .= ' https://i.ytimg.com';
            $this->registry->template->jsSrc = $jsSrc;

            $this->returnView();
        }
        else Redirect::pageNotFound();
    }

    protected function ajax_load_more_list(){
        if(isset($_POST['specialofferstype'])&&($_POST['specialofferstype']==1||$_POST['specialofferstype']==2||$_POST['specialofferstype']==3||$_POST['specialofferstype']==4||$_POST['specialofferstype']==5||$_POST['specialofferstype']==6||$_POST['specialofferstype']==7||$_POST['specialofferstype']==8)){
            if (isset($_POST['id_city']) && !empty($_POST['id_city']) && (!isset($_SESSION['id_cat'])||empty($_SESSION['id_cat']))) $this->ajax_load_more_list_by_city();
            else $this->ajax_load_more_list_by_category();
        }
    }

    protected function ajax_load_more_list_index(){
        $args = array(
            'hlm' => FILTER_VALIDATE_INT,
            'jmlhlimiter' => FILTER_VALIDATE_INT
        );
        $post = filter_input_array(INPUT_POST, $args);

        if(isset($_POST['hlm'], $_POST['jmlhlimiter']) && !empty($post['hlm']) && $post['hlm'] > 1 && !empty($post['jmlhlimiter']) && $post['jmlhlimiter'] > 0 && ($post['jmlhlimiter'] % 10 == 0)) {

            $jmlh_sudah = ($post['hlm'] - 1) * $post['jmlhlimiter'];
            $viewmodel = new SpecialOffersModel($this->registry);
            $data_list = $viewmodel->getSpecialOffersList(NULL, NULL, NULL, NULL, array("offset" => $jmlh_sudah, "count" => $post['jmlhlimiter']));
            $this->registry->template->listIndex = true;

            if($data_list && count($data_list)>0){
                $this->registry->template->data_list = $data_list;
                $this->returnView(false, "specialoffers/list_core_specialoffers.php");
            }
        }
    }

    protected function ajax_load_more_list_by_category(){
        $args = array(
            'hlm' => FILTER_VALIDATE_INT,
            'jmlhlimiter' => FILTER_VALIDATE_INT,
            'id_cat' => FILTER_VALIDATE_INT,
            'id_city' => FILTER_VALIDATE_INT,
            'specialofferstype' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 1, 'max_range' => 8))
        );
        $post = filter_input_array(INPUT_POST, $args);

        if(isset($_POST['hlm'], $_POST['jmlhlimiter']) && !empty($post['hlm']) && $post['hlm'] > 1 && !empty($post['jmlhlimiter']) && $post['jmlhlimiter'] > 0 && ($post['jmlhlimiter'] % 10 == 0)) {
            if(!empty($post['id_city']) && empty($post['id_cat'])) die();
            else {
                $jmlh_sudah = ($post['hlm'] - 1) * $post['jmlhlimiter'];
                $viewmodel = new SpecialOffersModel($this->registry);
                if(!empty($post['id_cat'])){
                    if(!empty($post['id_city'])){
                        $countrymodel = new CountryModel($this->registry);
                        $data_check_city = $countrymodel->getCity(array("id"=>$post['id_city']));
                        if($data_check_city && count($data_check_city)==1) {
                            $data_list = $viewmodel->getSpecialOffersList($post['specialofferstype'], $post['id_cat'], $post['id_city'], NULL, array("offset" => $jmlh_sudah, "count" => $post['jmlhlimiter']));
                        }
                    }
                    else{
                        $data_list = $viewmodel->getSpecialOffersList($post['specialofferstype'], $post['id_cat'], NULL, NULL, array("offset" => $jmlh_sudah, "count" => $post['jmlhlimiter']));
                        $this->registry->template->list_by = "sub";
                    }
                }
                else{
                    $data_list = $viewmodel->getSpecialOffersList($post['specialofferstype'], NULL, NULL, NULL, array("offset" => $jmlh_sudah, "count" => $post['jmlhlimiter']));
                    $this->registry->template->list_by = "cat";
                }
            }

            if($data_list && count($data_list)>0){
                $this->registry->template->data_list = $data_list;
                $this->registry->template->specialofferstype = $post['specialofferstype'];

                $this->returnView(false, "specialoffers/list_core_specialoffers.php");
            }
        }
    }

    protected function ajax_load_more_list_by_city(){
        $args = array(
            'hlm' => FILTER_VALIDATE_INT,
            'jmlhlimiter' => FILTER_VALIDATE_INT,
            'id_city' => FILTER_VALIDATE_INT,
            'specialofferstype' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 1, 'max_range' => 8))
        );
        $post = filter_input_array(INPUT_POST, $args);

        if(isset($_POST['hlm'], $_POST['jmlhlimiter'], $_POST['id_city']) && !empty($post['hlm']) && $post['hlm'] > 1 && !empty($post['jmlhlimiter']) && $post['jmlhlimiter'] > 0 && ($post['jmlhlimiter'] % 10 == 0) && !empty($post['id_city'])) {
            $countrymodel = new CountryModel($this->registry);
            $data_check_city = $countrymodel->getCity(array("id"=>$post['id_city']));
            if($data_check_city && count($data_check_city)==1){
                $jmlh_sudah = ($post['hlm'] - 1) * $post['jmlhlimiter'];
                $viewmodel = new SpecialOffersModel($this->registry);
                $data_list = $viewmodel->getSpecialOffersList($post['specialofferstype'], NULL, $post['id_city'], NULL, array("offset"=>$jmlh_sudah, "count"=>$post['jmlhlimiter']));
                if($data_list && count($data_list)>0){
                    $this->registry->template->data_list = $data_list;
                    $this->registry->template->specialofferstype = $post['specialofferstype'];
                    $this->registry->template->list_by = "city";

                    $this->returnView(false, "specialoffers/list_core_specialoffers.php");
                }
            }
        }
    }

    protected function ajax_load_more_specialoffers_search_list(){
        if(isset($_POST['q'])) {
            $url_q = trim(rawurldecode($_POST['q']));

            $post = filter_input_array(INPUT_POST, FILTER_VALIDATE_INT);

            $kondisi_limit = NULL;
            if($post['jmlhlimiter'] > 0 && ($post['jmlhlimiter'] % 10 == 0)) {
                if(isset($_POST['hlm']) && !empty($post['hlm']) && $post['hlm'] > 1) {
                    $jmlh_sudah = ($post['hlm'] - 1) * $post['jmlhlimiter'];
                    $kondisi_limit = array("offset"=>$jmlh_sudah, "count"=>$post['jmlhlimiter']);
                }
                else $kondisi_limit = array("count"=>$post['jmlhlimiter']);
            }

            $viewmodel = new SpecialOffersModel($this->registry);

            if(!isset($post['urut'])) $post['urut'] = NULL;

            $data_list = $viewmodel->getSpecialOffersList($post['id_kategori'], NULL, NULL, $post['urut'], $kondisi_limit, $_POST['id_subkat'], $_POST['id_kota'], $url_q);

            if (is_array($data_list)) {
                if(!empty($kondisi_limit)) {
                    $this->registry->template->listSearch = true;
                    $this->registry->template->data_list = $data_list;
                    $this->returnView(false, "specialoffers/list_core_specialoffers.php");
                }
                else echo count($data_list);
            }
        }
    }

    protected function ajax_refresh_check_specialoffers_sub_cat(){
        $post = filter_input_array(INPUT_POST, array('id_kategori' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 1, 'max_range' => 8))));

        if(!empty($post['id_kategori'])){
            $viewmodel = new SpecialOffersModel($this->registry);
            $this->registry->template->top_menu_subcategories = $viewmodel->getHasItemSpecialOffersSubCategories($post['id_kategori']);
            $this->returnView(false, "ajax/".$this->action.".php");
        }
    }
}
?>