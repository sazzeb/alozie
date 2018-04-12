<h1 style="text-align: center; color: #666699;"><?= $cat_title ?></h1>
<p><?= $showing_statement ?></p>
<?= $pagination ?>



<div class="j-menu-container"></div>
<div class="l-main-container">
    <div class="container">
        <div class="l-inner-page-container">
            <div class="row">
<?php
foreach($query->result() as $row) {

$item_title = $row->item_title;
$little_description = $row->little_description;
$small_pic = $row->small_pic;
$small_pic_path = base_url()."made/construct/small/".$small_pic;
$item_page = base_url().$item_segments.$row->item_url;
?>
 <div class="col-md-4 col-sm-6 col-xs-12 b-item-apartment-block">
   <div class="b-some-examples__item f-some-examples__item">
    <div class="b-some-examples__item_img view view-sixth">
    <img data-retina="" src="<?= $small_pic_path ?>" alt="">
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="<?= $item_page ?>" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-some-examples__item_info">
        <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="<?= $item_page ?>"><?= $item_title ?></a></div>
        <div class="b-some-examples__item_info_level b-some-examples__item_double_info f-some-examples__item_double_info clearfix b-info-container--home">
        </div>
        <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description b-info-container--home"><?= $little_description ?></div>
    </div>
    <div class="b-some-examples__item_action">
        <div class="b-right">
            <a href="<?= $item_page ?>" class="b-btn f-btn b-btn-sm b-btn-default f-primary-b">View detail</a>
        </div>
    </div>
</div>
</div>
<?php
}
?>
            </div>
        </div>
    </div>
</div>
<?= $pagination ?>