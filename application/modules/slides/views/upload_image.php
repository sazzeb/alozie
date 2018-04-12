<h1><?= $headline ?></h1>
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Upload Image<small>upload image here</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
<?php 
if (isset($error)) {
  
  foreach ($error as $value) {
    echo $value;
  }

}
?>


<?php
$attributes = array('class' => 'form-horizontal');
echo form_open_multipart('slides/do_upload/'.$update_id, $attributes);
?>
  <p style="margin-top: 10px;">Please choose a file from your computer and then press 'Upload'.</p>
  <fieldset>
  <div class="control-group" style="height: 40px;">
    <label class="control-label" for="fileInput">File input</label>
    <div class="controls col-md-5">
    <input class="input-file uniform_on form-control" id="fileInput" name="userfile" type="file">
    </div>
  </div>          
  <div class="form-actions">
    <button type="submit" class="btn btn-round btn-info">Upload</button>
    <button type="submit" name="submit" value="Cancel" class="btn btn-round">Cancel</button>
  </div>
  </fieldset>
</form> 
       

      </div>
  </div><!--/span-->
</div><!--/row-->