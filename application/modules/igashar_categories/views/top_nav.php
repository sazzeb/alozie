<header>
  <div class="container b-header__box b-relative">
    <a href="/" class="b-left b-logo "><img class="color-theme" data-retina src="<?= $head ?>" alt="Logo" /></a>
    <div class="b-header-r b-right b-header-r--icon">
      <div class="b-header-ico-group f-header-ico-group b-right">
          <span class="b-search-box"></span>
          <span class="b-header-ico b-header-ico-cart-parent"></span>
 </div>
<div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>

<nav class="b-top-nav f-top-nav b-right j-top-nav">
<ul class="b-top-nav__1level_wrap">
<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="<?= base_url() ?>"><i class="fa fa-home b-menu-1level-ico"></i>Home</a></li>

    <?php
  $this->load->module('igashar_categories');
  foreach($parent_categories as $key => $value) {
    $parent_cat_id = $key;
    $parent_cat_title = $value;
?>
<li class="b-top-nav__1level f-top-nav__1level f-primary-b">

    <a href=""><i class="fa fa-folder-open b-menu-1level-ico"></i><?= $parent_cat_title ?><span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>

        <div class="b-top-nav__dropdomn">
              
            <ul class="b-top-nav__2level_wrap">
                <li class="b-top-nav__2level_title f-top-nav__2level_title"><?= $parent_cat_title ?></li>
                <?php 
                $query = $this->igashar_categories->get_where_custom('parent_cat_id', $parent_cat_id);
                    foreach($query->result() as $row) {
                    $cat_url = $row->cat_url;
                    $current_url = $target_url_start.$cat_url;
                    $cat_sub = $row->cat_title;
                 ?>
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= $current_url ?>"><i class="fa fa-angle-right"></i><?= $cat_sub ?></a>
                </li>

            <?php } ?>
                
            </ul>
        </div>
    </li>
     <?php } ?>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="<?= base_url() ?>"><i class="fa fa-code b-menu-1level-ico"></i>Blog</a>
    </li> 
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="<?= base_url() ?>contactus"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact us</a>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="<?= base_url() ?>youraccount/login"><i class="fa fa-list b-menu-1level-ico"></i>Sign in<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
                <li class="b-top-nav__2level_title f-top-nav__2level_title">Contact us</li>
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url() ?>youraccount/login"><i class="fa fa-angle-right"></i>Sign in</a></li>
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url() ?>youraccount/start"><i class="fa fa-angle-right"></i>Register</a></li>
            </ul>
        </div>

    </li>

      </nav>
    </div>
  </div>
</header>

