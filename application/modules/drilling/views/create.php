<h1 style="color: #1abb9c;"><?= $headline ?></h1>
<?php 

$form_location = base_url().'drilling/create/'.$update_id;
 ?>
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Create Blog <small>Create Different Element</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form id="" data-parsley-validate class="form-horizontal form-label-left" action="<?= $form_location ?>" method="post">

          <?php 
          echo validation_errors("<p style='color: #ff3f00;'>", "</p>");
          if (isset($flash)) {
           echo $flash;
         }
         ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Published <span class="required">*</span>
              </label>
              <div class="col-md-4">
              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input type="text" name="date_published" value="<?= $date_published ?>"  class="form-control has-feedback-left" id="single_cal1" aria-describedby="inputSuccess2Status">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" name="firstname" value="<?= $firstname ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Last Name <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="lastname" value="<?= $lastname ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>


             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Title<span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="page_title" value="<?= $page_title ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Description<span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" name="page_description" value="<?= $page_description ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>



            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Key Words <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <input type="text" id="last-name" name="page_keywords" value="<?= $page_keywords ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Page Content <span class="required">*</span>
              </label>
              <div class="col-md-6 ">
                <textarea name="page_content" class="form-control" rows="12"><?= $page_content ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
                <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


<?php
if (is_numeric($update_id)) { ?>

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
            <?php
          if ($picture=="") { ?>
             <a href="<?= base_url() ?>drilling/upload_image/<?= $update_id ?>"><button name="submit" value="Submit" type="submit" class="btn btn-round btn-dark">Upload Image</button></a>
             <?php
            } else {
            ?>

             <a href="<?= base_url() ?>drilling/delete_image/<?= $update_id ?>"><button name="submit" value="Submit" type="submit" class="btn btn-round btn-danger">Delete This Image</button></a>
             <?php
              }

              if ($update_id>2) { ?>

             <a href="<?= base_url() ?>drilling/deleteconf/<?= $update_id ?>"><button name="submit" value="Submit" type="submit" class="btn btn-round btn-danger">Delete The Entire Writeup</button></a>
             <?php
              }
              ?>

             <a href="<?= base_url().$page_url ?>"><button name="submit" value="Cancel" class="btn btn-round btn-info" type="submit">View In Home Page</button></a>
         </div>
     </div>
   </div>
 </div>

<?php
}

if ($picture!="") { ?>


 <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Uploaded Images<small>Can You Handle The vibe</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
       <img src="<?= base_url() ?>made/firstmade/img_large/<?= $picture ?>">
      </div>
     </div>
   </div>
 </div>

 <?php
}
?>