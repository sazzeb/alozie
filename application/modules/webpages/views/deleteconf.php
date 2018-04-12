<h1><?= $headline ?></h1>

<?php
if (isset($flash)) {
  echo $flash;
}
?>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Confirm Delete<small>This is good</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
        
<p>Are you sure that you want to delete the page?</p>

<?php
$attributes = array('class' => 'form-horizontal form-control');
echo form_open('webpages/delete/'.$update_id, $attributes);
?>

  <fieldset>
  <div class="control-group" style="height: 200px;">

<button type="submit" name="submit" value="Yes - Delete Page" class="btn btn-danger">Yes - Delete Page</button>
<button type="submit" name="submit" value="Cancel" class="btn">Cancel</button>

  </div>
  </div>          

  </fieldset>
</form> 


      </div>
  </div><!--/span-->
</div><!--/row-->