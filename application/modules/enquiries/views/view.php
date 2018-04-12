<?php
$form_location = base_url().'comments/submit';
?>
<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: red;'>", "</p>") ?>

<?php
if (isset($flash)) {
  echo $flash;
}

$this->load->module('youraccount');
$this->load->module('timedate');
foreach($query->result() as $row) {

    $view_url = base_url()."enquiries/view/".$row->id;

    $opened = $row->opened;
    if ($opened==1) {
      $icon = '<i class="icon-envelope"></i>';
    } else {
      $icon = '<i class="icon-envelope-alt" style="color: orange;"></i>';
    }

    $date_sent = $this->timedate->get_nice_date($row->date_created, 'full');

    if ($row->sent_by==0) {
      $sent_by = "Admin";
    } else {
      $sent_by = $this->youraccount->_get_customer_name($row->sent_by);
    }

    $subject = $row->subject;
    $message = $row->message;
    $ranking = $row->ranking;
}
?>

<p style="margin-top: 30px;">
    <a href="<?= base_url() ?>enquiries/create/<?= $update_id ?>">
        <button type="button" class="btn btn-round btn-info">Reply To This Message</button>
    </a>

<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn btn-round btn-primary" data-toggle="modal">Create New Comment</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Create Comment</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" action="<?= $form_location ?>" method="post">
    <p>
        <div class="control-group">
          <label class="control-label" for="inputComment">Comment</label>
          <div class="controls">
            <textarea rows="6" name="comment" class="form-control"></textarea>
          </div>
        </div>
          

    </p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-round btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-info btn-round">Save changes</button>
  </div>
  <?php
  echo form_hidden('comment_type', 'e');
  echo form_hidden('update_id', $update_id);
  ?>
  </form>  
</div>




</p>



<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Enquiry Ranking<small>This view message </small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>

       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
      <?php
      $form_location = base_url()."enquiries/submit_ranking/".$update_id;
      ?>
        <form class="form-horizontal" method="post" action="<?= $form_location ?>">
          <fieldset>
        
            <div class="control-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typeahead">Ranking</label>
              <div class="controls col-md-4">
                <?php
                $additional_dd_code = 'id="selectError3" class="form-control"';
                if ($ranking>0) {
                    unset($options['']);
                }
                echo form_dropdown('ranking', $options, $ranking, $additional_dd_code);
                ?>

              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-round btn-info" name="submit" value="Submit">Submit</button>
              <button type="submit" class="btn btn-round btn-default" name="submit" value="Cancel">Cancel</button>
            </div>
          </fieldset>
        </form>   

    </div>
</div><!--/span-->
  </div><!--/row-->
</div>

<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Enquiry Details<small>This view message </small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">


          <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <tbody>
              <tr>
                  <td style="font-weight: bold;">Date Sent</td><td><?= $date_sent ?></td>
              </tr>
              <tr>
                  <td style="font-weight: bold;">Sent By</td><td><?= $sent_by ?></td>
              </tr>
                  <td style="font-weight: bold;">Subject</td><td><?= $subject ?></td>
              <tr>
                  <td style="font-weight: bold; vertical-align: top;">Message</td>
                  <td style="vertical-align: top;"><?= nl2br($message) ?></td>
              </tr>                            
            </tbody>
        </table>

   

      </div>
  </div>
</div>
<?php
echo Modules::run('comments/_draw_comments', 'e', $update_id);