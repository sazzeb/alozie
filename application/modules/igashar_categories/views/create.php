<h1><?= $headline ?></h1>
<?php $form_location = base_url()."igashar_categories/create/".$update_id; ?>



<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
       <div class="x_title">
         <h2>Manage Construction Pages<small>List Of pages</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
        </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
       <?= validation_errors("<p style='color: red;'>", "</p>") ?>

        <?php
        if (isset($flash)) {
          echo $flash;
        }
        ?>
       <form id="" data-parsley-validate class="form-horizontal form-label-left" action="<?= $form_location ?>" method="post">
        <?php
        if ($num_dropdown_options>1) { 
          ?>
      <div class="form-group">S
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select The Page</label>
        <div class="col-md-4">
        <?php
      $additional_dd_code = 'id="selectError3" class="form-control"';
      echo form_dropdown('parent_cat_id', $options, $parent_cat_id, $additional_dd_code);
       ?>
     </div>
  </div>
  <?php
} else {
   echo form_hidden('parent_cat_id', 0);
}
?>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter Page</label>
        <div class="col-md-4 col-sm-9 col-xs-12">
        <input type="text" name="cat_title" value="<?= $cat_title ?>" id="autocomplete-custom-append" class="form-control col-md-10"/>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
          <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
         </div>
      </div>

   </div>
 </div>
</div>