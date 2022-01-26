var tab_aktif = 1;
function change_tab(param){
    if(tab_aktif!=param) {
        var $tab_head_aktif = $("#tab_head_" + tab_aktif);
        var $tab_head_param = $("#tab_head_" + param);

        $tab_head_aktif.removeClass("color_1");
        document.getElementById("tab_isi_" + tab_aktif).style.display = "none";

        $tab_head_param.addClass("color_1");
        document.getElementById("tab_isi_" + param).style.display = "block";

        tab_aktif = param;
    }
}
var tab_aktif_about = 1;
var ada_tab_kecil = false;
function change_tab_about(param){
    if(tab_aktif_about!=param) {
        var $tab_head_aktif = $("#tab_head_about_" + tab_aktif_about);
        var $tab_head_param = $("#tab_head_about_" + param);

        $tab_head_aktif.removeClass("tab_header_big_active");
        $tab_head_aktif.addClass("tab_header_big");
        document.getElementById("tab_isi_about_" + tab_aktif_about).style.display = "none";

        $tab_head_param.removeClass("tab_header_big");
        $tab_head_param.addClass("tab_header_big_active");
        document.getElementById("tab_isi_about_" + param).style.display = "block";

        tab_aktif_about = param;

        if (ada_tab_kecil) change_tab('1');
    }
    scroll_to_view("#tab_head_about_" + tab_aktif_about);
}

jQuery(function () {
    if(document.getElementById('tab_head_about_1')) document.getElementById('tab_head_about_1').addEventListener('click', function(){ change_tab_about(1); });
    if(document.getElementById('tab_head_about_2')) document.getElementById('tab_head_about_2').addEventListener('click', function(){ change_tab_about(2); });
    if(document.getElementById('tab_head_about_3')) document.getElementById('tab_head_about_3').addEventListener('click', function(){ change_tab_about(3); });
    if(document.getElementById('tab_head_about_4')) document.getElementById('tab_head_about_4').addEventListener('click', function(){ change_tab_about(4); });

    if($('.tab_content').length){
        $('.tab_content').css("display", "none");
        if(document.getElementById("tab_isi_about_" + tab_aktif_about)) document.getElementById("tab_isi_about_" + tab_aktif_about).style.display = "block";
        if(document.getElementById("tab_isi_" + tab_aktif)) document.getElementById("tab_isi_" + tab_aktif).style.display = "block";
    }
});