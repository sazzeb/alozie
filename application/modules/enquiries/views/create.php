<h1><?= $headline ?></h1>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Message Details<small>This view message </small></h2>
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
      $form_location = base_url()."enquiries/create/".$update_id;
      ?>
        <form class="form-horizontal" method="post" action="<?= $form_location ?>">
          <?php
          if (!isset($sent_by)) { ?>


      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Recipient </label>
        <div class="col-md-4">
        <?php
        $additional_dd_code = 'class="form-control span4"';
        echo form_dropdown('sent_to', $options, $sent_to, $additional_dd_code);
        ?>
     </div>
      </div>
      <?php
          }
      ?>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Subject<span class="required">*</span>
          </label>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <input type="text" name="subject" value="<?= $subject ?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
           </div>
        </div>
        <?php 
        if (is_numeric($update_id)) {
         ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Message<span class="required">*</span>
              </label>
              <div class="col-md-6 ">
                <textarea name="message" id="txtEditor" rows="12" class="form-control"><?= $message ?></textarea>
              </div>
            </div>
        <?php 
      }
      else
      {
      ?>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Message<span class="required">*</span>
        </label>
        <div class="col-md-6 ">
          <textarea name="message" rows="12" class="form-control"><?= $message ?></textarea>
        </div>
      </div>

      <?php
      }
      ?>
          <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
             <button name="submit" value="Cancel" class="btn btn-round btn-default" type="submit">Cancel</button>
            <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Submit</button>
          </div>
         </div>

          </fieldset>
          <?php
          if (isset($sent_by)) {
            echo form_hidden('sent_to', $sent_by);
          }
          ?>
        </form>   

    </div>
  </div><!--/span-->
</div>
</div><!--/row-->