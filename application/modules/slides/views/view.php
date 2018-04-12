<?php 
$form_location = base_url().'slides/submit/'.$update_id;
 ?>

<h1><?= $headline ?></h1>
<?php
if (isset($flash)) {
  echo $flash;
}
?>
<a href="<?= base_url() ?>slides/update_group/<?= $parent_id ?>"><button type="button" class="btn btn-round btn-default">Previous Page</button></a>
<div style="clear: both;margin-top: 14px;"> 
<?= Modules::run('slides/_draw_img_btn',$update_id);?>
</div>
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2><?= $entity_name ?>Details<small>get the vibe</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">

       <form class="form-horizontal" method="post" action="<?= $form_location ?>">
          <fieldset>
            <div class="control-group">
              <label class="control-label" for="typeahead">Target Url <span style="color: green;">
                (optional)</span> </label>
              <div class="controls">
                <input type="text" class="span6" name="target_url" value="<?=$target_url ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="typeahead">Alt Text<span style="color: green;">
                (optional)</span> </label>
              <div class="controls">
                <input type="text" class="span6" name="alt_text" value="<?= $alt_text ?>">
              </div>
            </div>
        <div class="form-actions">
      <button type="submit" class="btn btn-round btn-info" name="submit" value="Submit">Submit</button>
      <button type="submit" class="btn btn-round" name="submit" value="Cancel">Cancel</button>
    </div>
  </fieldset>
</form>   

</div>
</div><!--/span-->

</div><!--/row-->