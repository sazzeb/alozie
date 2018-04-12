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
<?= validation_errors("<p style='color : #ff3f00'>", "</p>")?>
<?php 
  if (isset($flash))
  {
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

<div class="alert alert-success">Your file was successfully uploaded!</div>
<?php 
  $edit_item_url = base_url().'drilling/create/'.$update_id;
 ?>
  <a href="<?= $edit_item_url ?>"><button class="btn btn-round btn-info">Return To Content</button></a>
</p>
</div>



        </div>
        </div>
      </div>
    </div>
  </div>
</div>