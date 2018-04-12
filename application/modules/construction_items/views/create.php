<style type="text/css">
  .increase{
    height: 235px;
  }
</style>


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
        <h2>Manage Construction Pages Here <small>This is a responsive Area to manage home content</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
          <?php
          if ($big_pic=="") { ?>
            <a href="<?= base_url() ?>construction_items/upload_image/<?= $update_id ?>"><button type="button" class="btn btn-round btn-success">Upload Item Image</button></a>
          <?php
          } else {
            ?>
            <a href="<?= base_url() ?>construction_items/delete_image/<?= $update_id ?>"><button type="button" class="btn btn-round btn-danger">Delete Item Image</button></a>
            <?php
          }
          ?>
          <a href="<?= base_url() ?>igashar_cat_assign/update/<?= $update_id ?>"><button type="button" class="btn btn-round btn-success">Update Item Categories</button></a>
          <a href="<?= base_url() ?>construction_items/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-round btn-danger">Delete Item</button></a>
          <a href="<?= base_url() ?>construction_items/view/<?= $update_id ?>"><button type="button" class="btn btn-round btn-default">View Item In Shop</button></a>
     </div>
   </div>
  </div><!--/span-->
</div>
<?php
}
?>


        



<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Add Component Here <small>create different item</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
        <form id="" data-parsley-validate class="form-horizontal form-label-left" action="<?php //$form_location ?>" method="post">


        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Enter the Item title here<span class="required">*</span>
          </label>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <input type="text" name="item_title" value="<?= $item_title ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
           </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Give a small title about the page<span class="required">*</span>
          </label>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <input type="text" name="little_description" value="<?= $little_description ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
           </div>
        </div>
        <div class="form-group ">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_description">Page Content <span class="required">*</span>
          </label>
          <div class="col-md-6" >
             <textarea rows="12" name="item_description" class="form-control"><?= $item_description ?></textarea>
        </div>
      </div>
      > 


        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
             <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
            <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
          </div>
         </div>

      </form>



     </div>
   </div>
  </div><!--/span-->
</div>




<?php
if ($big_pic!="") { ?>

<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>uploaded Imaged<small>You Can Upload this image</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">

          <img src="<?= base_url() ?>made/construct/large/<?= $big_pic ?>">

      </div>
  </div><!--/span-->
</div><!--/row-->
<?php
}
?>
