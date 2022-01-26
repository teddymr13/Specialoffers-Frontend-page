<script type="text/javascript" src="assets/js/bundles/FlexSlider/jquery.flexslider-min.js"></script>
<script type="text/javascript" nonce="<?php echo $nonceScript; ?>">
    <?php if(isset($isIndex) && $isIndex){ ?>
    function resizeImageIntro() {
        var $img_intro_wide = $(".img_intro_wide");
        var $img_intro_small = $(".img_intro_small");
        if (($img_intro_wide.length) && ($img_intro_small.length) && ($("#container_intro_main_slider").length)) {
            $img_intro_small.css("height", Math.ceil($img_intro_wide.height()) + "px");
        }
    }
    <?php
    }
    if((isset($jmlh_main_pic) && $jmlh_main_pic > 0) || (isset($jmlh_menu_pic) && $jmlh_menu_pic > 0)){
    if($ada_video){
    ?>
    function calculateVideoSize(lebar_window) {
        var lebar = 0;
        var tinggi = 0;

        if (lebar_window > 768 && lebar_window < 1601) {
            tinggi = 480;
            lebar = 768;
        }
        else if (lebar_window > 1600) {
            tinggi = 720;
            lebar = 1152;
        }
        else if (lebar_window <= 768) {
            lebar = Math.ceil(lebar_window * 0.85);
            tinggi = Math.ceil(((lebar_window * 0.85) / 16) * 10);
        }

        return {lebar: lebar, tinggi: tinggi};
    }
    function resizeIframeVideo() {
        if (document.getElementById('iframe_video')) {
            var lebar_window = $(window).width();
            var dimensi = calculateVideoSize(lebar_window);

            var $iframe_video = $('#iframe_video');
            $iframe_video.attr("width", dimensi["lebar"]);
            $iframe_video.attr("height", dimensi["tinggi"]);
        }
    }
    function openVideo(param) {
        if (param != '') {
            var lebar_window = $(window).width();
            var dimensi = calculateVideoSize(lebar_window);

            document.getElementById('div_dalam_video').innerHTML = '<iframe id="iframe_video" width="' + dimensi["lebar"] + '" height="' + dimensi["tinggi"] + '" src="https://www.youtube.com/embed/' + param + '?rel=0" frameborder="0" allowfullscreen></iframe>';
            $('#div_video').fadeIn('fast');
        }
    }
    <?php
    }
    ?>
    function closeVideo(param) {
        if (param) document.getElementById('div_dalam_video').innerHTML = '';
        close_detail_fullpage();
    }
    <?php
    }
    ?>

    jQuery(function ($) {
        <?php
        if ($ada_video) {
        ?>
        if(document.getElementById('button_icon_x_close_video')) document.getElementById('button_icon_x_close_video').addEventListener('click', function () { closeVideo(true); });

        $('.div_icon_play_video').on('click', function () {
            openVideo($(this).attr('data-video-code'));
        });
        <?php } ?>

        $(window).on("load", function() {
            <?php if(isset($isIndex) && $isIndex){ ?>resizeImageIntro();<?php } ?>
            <?php if (isset($jmlh_main_pic) && $jmlh_main_pic > 0) { ?>
            $('.detail_page_slider').flexslider({
                animation: "slide",
                slideshowSpeed: 4500,
                animationSpeed: 500,
                <?php
                if($jmlh_main_pic > 1){
                ?>
                controlNav: true,
                directionNav: true,
                customDirectionNav: $(".navigation_page_slider"),
                <?php
                }
                else{
                ?>
                controlNav: false,
                directionNav: false,
                <?php
                }
                ?>
                pauseOnAction: true,
                pauseOnHover: true,
                start: function(){
                    <?php
                    if($jmlh_main_pic > 1){
                    ?>
                    $(".flex-control-nav").children('li').each(function () {
                        $(this).find("a").each(function () {
                            $(this).html($(this).html() + "<?php echo " / ".$jmlh_main_pic; ?>");
                        });
                    });
                    <?php
                    }
                    ?>
                }
            });
            <?php } ?>
        });

        $(window).on("resize", function () {
            <?php if(isset($isIndex) && $isIndex){ ?>resizeImageIntro();<?php } ?>
            <?php
            if (isset($jmlh_main_pic) && $jmlh_main_pic > 0) {
            ?>
            <?php
            if ($ada_video) {
            ?>
            resizeIframeVideo();
            <?php
            }
            }
            ?>
        });
    });
</script>