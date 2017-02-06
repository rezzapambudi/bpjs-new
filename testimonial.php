<?php
    require_once("header.php");
?>
    <body class=" angled  yellow">
        <?php require_once("modal.php"); ?>
        <!-- Section Start - Header -->
        <section class="header bg-lightgray header-2" >
            <!-- Menu Top Bar - Start -->
            <?php require_once("navbar.php"); ?>
    <!-- Menu Top Bar - End -->
    <!-- Logo and Mobile Menu - Start -->
    
    <!-- Logo and Mobile Menu - End -->
    <!-- Header Slide - Start -->
    <div class="header-slide" style="position:relative;">
        <img alt="header-banner-image" src="img/banner-2alt1.jpg" class='header-img visible-lg visible-md hidden-xs hidden-sm' style=''>
        <img alt="header-banner-image" src="img/banner-2alt.jpg" class='header-img hidden-xs visible-sm' style=''>
        <img alt="header-banner-image" src="img/banner-2alt2.jpg" class='header-img visible-xs hidden-sm' style=''>
        <div class="overlay overlay2">
            <div class="black inviewport animated delay4" data-effect="fadeInLeftOpacity"></div>
            <div class="primary inviewport animated delay4" data-effect="fadeInRightOpacity"></div>
            <!-- Header Text - Start -->
            <div class="maintext">
                <div class="primary-text inviewport animated delay4" data-effect="fadeInRightBig">
                    <div class="left-line" style="background-color: rgba(255, 255, 255, 0.65);">
                        <h4>Kompetisi</h4>
                        <h2>Twitter</h2>
                        
                    </div>
                </div>
                <div class="black-text inviewport animated delay4" data-effect="fadeInLeftBig">
                    <div>
                        <!--<h1>Competition</h1>-->
                    </div>
                </div>
            </div>
            <!-- Header Text - End -->
        </div>
    </div>
    <!-- Header Slide - End -->
</section>
<!-- Section End - Header -->

<!-- Section Start - Made For You -->
<section class='madeforyou padding-top-100 padding-bottom-0 ' style="margin-bottom: 140px;">
    <!-- Angled Section - Start -->
    <div class="angled_down_inside white">
        <div class="slope upleft"></div>
        <!--<div class="slope upright"></div>-->
    </div>
    <!-- Angled Section - End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-area">
                <center>
                <h5 class="heading" style="color:#146549;padding-bottom:15px;line-height: 1.4;">
                    Semua orang pasti menginginkan hidup yang bahagia di masa tuanya. Kesejahteraan seperti apa yang kamu inginkan di hari tua?
                </h5>
                <h5 style="color:#1c825f;">Tweet jawaban kamu dan menangkan total uang tunai 5jt rupiah!</h5>
                <!--<div class="headul left-align"></div>-->
                <img src="img/mekanisme-twitter.png" class="img-responsive">
                <!--
                <ul>
                        <li class="litabs"><div>Begini caranya!<br>
                        1. Tweet harapanmu saat menjelang hari tua <br>
                        2. Tweet tidak hanya terbatas teks, juga bisa dengan visual foto dan atau video <br>
                        3. Mention ke @BPJSTKinfo dan @detikfinance dengan hastagh #BahagiaHariTua</div></li>
                </ul>-->
                
                <p style="font-family: 'Permanent Marker', cursive;color: #218462;">Yuk! Tweet sebanyak-banyaknya dan jadilah yang beruntung memenangkan hadiahnya!</p>

                <!--<p>Ayo, Tweet detik ini juga!</p>-->
                
            <a href="http://www.twitter.com" class="btn btn-primary" target="_blank">Buka Twitter</a>
            </center>        
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slider-area" style="padding-top: 2px;">
                <center>
                        <a class="twitter-timeline"  href="https://twitter.com/search?q=%23BahagiaHariTua%20" data-widget-id="814322466340278273">Tweets about #BahagiaDiHariTua </a>
                                 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </center>
            </div>
        </div>
    </div>
    <!-- Angled Section - Start -->
    <!--
    <div class="angled_up_inside white">
        <div class="slope upleft"></div>
        <div class="slope upright"></div>
    </div>
    <!-- Angled Section - End -->
</section>
<!-- Section End - Made For You -->
<!-- Section Start - Art of work -->


<?php require_once("footer.php");?>