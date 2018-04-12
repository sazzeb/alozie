

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
        <h1>Upload Files Here</h1>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
                     
        </ul>>
      </div>
      <div class="x_content">
          <?php
          if(isset($error)){
          foreach ($error as $key => $value) {
            # code...
            echo $value;
          }
          }
          ?>
          <?php 
          $attributes = array('class' => 'form-horizontal');
          echo form_open_multipart('drilling/do_upload/'.$update_id, $attributes);
          //<form class="form-horizontal">
          ?>
       <p style="margin-top: 24px;">Please choose a file from your computer and then press 'Upload'.</p>
        <fieldset>
          <div class="control-group" style="height: 80px;">
            <label class="control-label" for="fileInput">File input</label>
            <div class="controls">
            <input class="input-file uniform_on" id="fileInput" name="userfile" type="file">
            </div>
            </div>      
          <div class="form-actions">
            <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
              <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
          </div>
        </fieldset>
      </form> 
       </div>
     </div>
   </div>
 </div>



