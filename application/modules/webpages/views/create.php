

<h1><?= $headline ?></h1>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Create A web Page Here<small>This is good</small></h2>
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
        <?php
        $form_location = base_url()."webpages/create/".$update_id;
        ?>
      <form class="form-horizontal" method="post" action="<?= $form_location ?>">
        <fieldset>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Titl<span class="required">*</span>
          </label>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <input type="text" class="form-control" name="page_title" value="<?= $page_title ?>">
           </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Keywords<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <textarea rows="3" class="form-control" name="page_keywords">
           <?php
           echo $page_keywords;
          ?></textarea>
           </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Description<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <textarea rows="3" class="form-control" name="page_description" >
           <?php
         echo $page_description;
         ?></textarea>
           </div>
        </div>

         <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Content<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
           <textarea rows="8" class="form-control" name="page_content">
           <?php
           echo $page_content;
          ?></textarea>
           </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
             <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
            <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
          </div>
         </div>
      </fieldset>
    </form>   

     </div>
    </div><!--/span-->
</div>
</div><!--/row-->
<?php
if (is_numeric($update_id)) { ?>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Additional Options<small>This is good</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
        <?php

        //this is where to delete and add  web pages
        if ($update_id>2) { ?>
          <a href="<?= base_url() ?>webpages/deleteconf/<?= $update_id ?>"><button type="button" class="btn btn-danger">Delete Page</button></a>
          <?php
          }
          ?>
          <a href="<?= base_url().$page_url ?>"><button type="button" class="btn btn-default">View Page</button></a>

      </div>
  </div><!--/span-->
</div><!--/row-->
<?php
}