<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <link rel="shortcut icon" href="<?= $icon ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IGA-SHAR GROUP  </title>

    <!-- Bootstrap -->

    <link href="<?= base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url() ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url() ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url() ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url() ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link type="text/css" rel='stylesheet' href="<?= base_url() ?>css/editor.css">
    <link href="<?= base_url() ?>vendors/build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"> <span>IGA-SHAR</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= $icon ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>IGA - SHAR</span>
                <h2>GROUP</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url()?>dashboard/home"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa fa-envelope"></i>Manage Messages<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>enquiries/create" >Creat a new message</a></li>
                      <li><a href="<?= base_url() ?>enquiries/inbox">Reply to a messages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa fa-windows"></i>Pages Items<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>construction_items/create" >Creat a brand new item</a></li>
                      <li><a href="<?= base_url() ?>construction_items/manage">Manage Home Page Items</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Manage Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>drilling/create" >Create New Page</a></li>
                      <li><a href="<?= base_url() ?>drilling/manage">Manage Pages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa fa-bullseye"></i>Manage Navigation Bars <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>igashar_categories/create" >Create Navigation</a></li>
                      <li><a href="<?= base_url() ?>igashar_categories/manage">Manage Catagories</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa fa-desktop"></i>Manage Webpages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>webpages/create" >Create Webpages</a></li>
                      <li><a href="<?= base_url() ?>webpages/manage">Manage Webpages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sliders"></i>Manage page Sliders<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url() ?>sliders/create" >Create Sliders</a></li>
                      <li><a href="<?= base_url() ?>sliders/manage">Manage Sliders</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url() ?>oluchukwu/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= $icon ?>" alt="">IGA - SHAR
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="<?= base_url() ?>oluchukwu/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">


        <!--   This is where the action take place, can you handle the vibe -->

        <?php
          if (isset($view_file)) {
              $this->load->view($view_module.'/'.$view_file);
          }
        ?>
    

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            IGA-SHAR GROUP <a href="<?= base_url() ?>">IGA-SHAR</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url() ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url() ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url() ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url() ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->

    <script src="<?= base_url() ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url() ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url() ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url() ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url() ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url() ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url() ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url() ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>vendors/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?= base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url() ?>vendors/build/js/custom.min.js"></script>
    <script src="<?= base_url() ?>js/editor.js"></script>


<script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });
</script>
    

	
  </body>
</html>
