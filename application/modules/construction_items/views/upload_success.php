<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: red;'>", "</p>") ?>


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
        
<div class="alert alert-success">Your file was successfully uploaded!</div>

<ul>
<?php
if (isset($flash)) {
  echo $flash;
}
?>
</ul>

<p>Thanks For Successfully Uploading that image</p>
<p>Before you continue ensure that your cross check that every thing is ok</p>
<p>This image is going directly to the home page</p>
<p>It is good to take a second glance</p>
<p>Thanks for your patience</p>

<p>
  <?php
  $edit_item_url = base_url()."construction_items/create/".$update_id;
  ?>
  <a href="<?= $edit_item_url ?>"><button type="button" class="btn btn-round btn-info">Return To Main Update Item Details Page</button></a>
</p>


      </div>
    </div><!--/span-->
  </div><!--/row-->
</div>