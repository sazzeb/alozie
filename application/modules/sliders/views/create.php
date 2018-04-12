<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: red;'>", "</p>") ?>

<?php
if (isset($flash)) {
  echo $flash;
}

if (is_numeric($update_id)) { ?>

<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Options<small>Creative Mindworks</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
   <div class="x_content">
      <a href="<?= base_url() ?>sliders/manage"><button type="button" class="btn btn-round btn-default">Previous Page</button></a>
      <a href="<?= base_url() ?>slides/update_group/<?= $update_id ?>"><button type="button" class="btn btn-round btn-info">Update Associated Sliders</button></a>
      <a href="<?= base_url() ?>sliders/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-round btn-danger">Delete Entire Slider</button></a>
      </div>
  </div><!--/span-->
</div><!--/row-->
<?php
}
?>

<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Slider Details<small>This shows thw sliders Details</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
   <div class="x_content">
  <?php
      $form_location = base_url()."sliders/create/".$update_id;
      ?>
        <form class="form-horizontal" method="post" action="<?= $form_location ?>">
          <fieldset>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Title  <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" name="slider_title" value="<?= $slider_title ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Url<span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" name="target_url" value="<?= $target_url ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-round btn-info" name="submit" value="Submit">Submit</button>
              <button type="submit" class="btn btn-round btn-default" name="submit" value="Cancel">Cancel</button>
            </div>
          </fieldset>
        </form> 
    </div>
    </div><!--/span-->

</div><!--/row-->
