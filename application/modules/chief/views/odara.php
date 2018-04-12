<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IGA-SHAR GROUP</title>
    <link rel="shortcut icon" href="<?= $icon ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/bxslider/jquery.bxslider.css">
<!-- End bxslider -->
<!-- flexslider -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/flexslider/flexslider.css">
<!-- End flexslider -->

<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/radial-progress/style.css">
<!-- End bxslider -->

<!-- Animate css -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/css/animate.css">
<!-- End Animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/css/bootstrap.min.css">
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
<!-- End Bootstrap css -->

<!-- Jquery UI css -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/jqueryui/jquery-ui.css">
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/jqueryui/jquery-ui.structure.css">
<!-- End Jquery UI css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/fonts/fonts.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="<?= base_url() ?>home/css/main-default.css">

<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/rs-plugin/css/settings.css">
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/rs-plugin/css/settings-custom.css">
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>home/js/rs-plugin/videojs/video-js.css">
<link type="text/css" rel='stylesheet' href="<?= base_url() ?>css/editor.css">
</head>
<body>
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->



<?php
echo Modules::run('igashar_categories/_draw_top_nav');
?>

<!-- Etor -->
<div style="min-height: 500px;">
<?php 

echo Modules::run('sliders/_attempt_draw_slider');

      if ($customer_id>0) {
        include('customer_panel_top.php');
      }
      if (isset($page_content)) {
        

        if (!isset($page_url)) {
          $page_url = 'homepage';
        }

          if ($page_url=="") {
            require_once('homepage_content.php');
          } elseif ($page_url=="contactus") {
            //load up a contact form
            echo Modules::run('contactus/_draw_form');
          }

      } elseif (isset($view_file)) {
        $this->load->view($view_module.'/'.$view_file);
      }
      ?>
    </div>
 </div>  

<footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2017 - All Rights Reserved</div>
            <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                    <ul>
                        <li><a href="<?= base_url() ?>">Homepage</a></li>
                        <li><a href="<?= base_url() ?>">Contact US</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">news</a></li>
                        <li><a href="#">about</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="b-footer-secondary row">
      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
          <a href=""><img data-retina class="b-footer-logo color-theme" src="<?= $foot ?>" alt="Logo"/></a>
          <div class="b-footer-logo-text f-footer-logo-text">
          <p>IGA-SHAR Group we are ready to work with you 24 7 a day</p>
          <div class="b-btn-group-hor f-btn-group-hor">
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-dribbble"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-behance"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">IGA-SHAR deals</h4>
        <div class="b-blog-short-post row">
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Rice Shipping and Selling</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              January 23, 2017
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Construction of road network</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2017
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Selling of commodities</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              April 23, 2017
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">contact info</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
              <?= $name ?><br/>
              <?= $address ?><br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Fax: <?= $fax ?>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="#"><?= $email ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 ">
        <h4 class="f-primary-b">How to locate IGA-SHAR</h4>
          <div class="b-short-photo-items-group">
          <div class="col-md-3"><?= $code ?></div>
          </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?= base_url() ?>home/js/breakpoints.js"></script>
<script src="<?= base_url() ?>home/js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url() ?>home/js/scrollspy.js"></script>
<script src="<?= base_url() ?>home/js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="<?= base_url() ?>home/js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="<?= base_url() ?>home/js/masonry.pkgd.min.js"></script>
<script src='<?= base_url() ?>home/js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="<?= base_url() ?>home/js/bxslider/jquery.bxslider.min.js"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="<?= base_url() ?>home/js/flexslider/jquery.flexslider.js"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="<?= base_url() ?>home/js/smooth-scroll/SmoothScroll.js"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="<?= base_url() ?>home/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- end carousel -->
<script src="<?= base_url() ?>home/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?= base_url() ?>home/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url() ?>home/js/rs-plugin/videojs/video.js"></script>

<!-- jquery ui -->
<script src="<?= base_url() ?>home/js/jqueryui/jquery-ui.js"></script>
<!-- end jquery ui -->
<script src='https://www.google.com/recaptcha/api.js'></script> 
<!-- Modules -->
<script src="<?= base_url() ?>home/js/modules/sliders.js"></script>
<script src="<?= base_url() ?>home/js/modules/ui.js"></script>
<script src="<?= base_url() ?>home/js/modules/retina.js"></script>
<script src="<?= base_url() ?>home/js/modules/animate-numbers.js"></script>
<script src="<?= base_url() ?>home/js/modules/parallax-effect.js"></script>
<script src="<?= base_url() ?>home/js/modules/settings.js"></script>
<script src="<?= base_url() ?>home/js/modules/maps-google.js"></script>
<script src="<?= base_url() ?>home/js/modules/color-themes.js"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="<?= base_url() ?>home/js/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>home/js/audioplayer/js/jplayer.playlist.min.js"></script>
<script src="<?= base_url() ?>home/js/audioplayer.js"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="<?= base_url() ?>home/js/radial-progress/jquery.easing.1.3.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="<?= base_url() ?>home/js/radial-progress/radialProgress.js"></script>
<script src="<?= base_url() ?>home/js/progressbars.js"></script>
<!-- end Progress -->

<!-- Google services -->
<script src="<?= base_url() ?>home/js/google-chart.js"></script>
<!-- end Google services -->
<script src="<?= base_url() ?>home/js/j.placeholder.js"></script>

<!-- Fancybox -->
<script src="<?= base_url() ?>home/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?= base_url() ?>home/js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="<?= base_url() ?>home/js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->
<script src="<?= base_url() ?>js/editor.js"></script>


<script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });
</script>

<script src="<?= base_url() ?>home/js/user.js"></script>
<script src="<?= base_url() ?>home/js/timeline.js"></script>
<script src="<?= base_url() ?>home/js/fontawesome-markers.js"></script>
<script src="<?= base_url() ?>home/js/cookie.js"></script>
<script src="<?= base_url() ?>home/js/loader.js"></script>
<script src="<?= base_url() ?>home/js/scrollIt/scrollIt.min.js"></script>
<script src="<?= base_url() ?>home/js/modules/navigation-slide.js"></script>

</body>
</html>