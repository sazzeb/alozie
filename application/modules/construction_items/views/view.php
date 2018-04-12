<?= Modules::run('chief/_draw_breadcrumbs', $breadcrumbs_data) ?>
 <div class="b-portfolio-item">
  <div class="row">
  <div class="col-md-6 col-xs-12">
      <div class="b-portfolio_image">
          <div class="b-portfolio_image_box view view-sixth">
      <img data-retina="" src="<?= base_url() ?>made/construct/large/<?= $big_pic ?>" alt="">
      <div class="b-item-hover-action f-center mask">
          <div class="b-item-hover-action__inner">
              <div class="b-item-hover-action__inner-btn_group">
              
                  <a href="<?= base_url() ?>made/construct/large/<?= $big_pic ?>" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="<?= $item_title ?>" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                  <a href="<?= base_url() ?>" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
              </div>
          </div>
      </div>
  </div>
</div>
      </div>
      <div class="col-md-6 col-xs-12">
      <div class="b-portfolio_info">
        <div class="b-portfolio_info_title f-primary-b f-portfolio_info_title"><?= $item_title ?></div>
        <div class="b-portfolio_info_rating">
           
            <span class="b-rating_bord hidden-xs"></span>
    </div>
    <div class="b-portfolio_info_description f-portfolio_info_description" style="font-size: 1.2em;"><?= nl2br($item_description) ?>
    </div>
          <div class="b-portfolio_info_button f-portfolio_info_button">
            </div>
          </div>
        </div>
      </div>
    </div>
