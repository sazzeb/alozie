
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Image Options<small>confirm image option</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
        
      <p><?= $btn_info ?></p>
      <?php 
        if($got_pic == FALSE) {
       ?>
          <a href="<?= base_url() ?>slides/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-round btn-info">Upload Image</button></a>
          <?php } else{
            echo "<img src='".$pic_path."' class='img-responsive'>";
            } ?>
          <a href="<?= base_url() ?>slides/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-round btn-danger" <?= $btn_style ?> >Delete Slide</button></a>

      </div>
  </div><!--/span-->
</div><!--/row-->