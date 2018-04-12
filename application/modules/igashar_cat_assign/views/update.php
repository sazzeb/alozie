<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: #ff9900;'>", "</p>") ?>

<?php
if (isset($flash)) {
  echo $flash;
}
?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
        <h1>Assign A Sub Nav To the Parent Navigation</h1>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>       
        </ul>>
      </div>
      <div class="x_content">
      <div class="box-content">
      <p>Choose a Parent Nav And Hit 'Submit'</p>
      <?php
      $form_location = base_url()."igashar_cat_assign/submit/".$item_id;
      ?>
    <form class="form-horizontal" method="post" action="<?= $form_location ?>">

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select The Page</label>
        <div class="col-md-4">
         <?php
          $additional_dd_code = 'id="selectError3" class="form-control"';
          echo form_dropdown('cat_id', $options, $cat_id, $additional_dd_code);
              ?>
        </div>
    </div>


    <button name="submit" value="Finished" class="btn btn-round btn-default" type="submit">Cancel</button>
    <button name="submit" value="Submit" type="submit" class="btn btn-round btn-success">Assin To Item</button>

    </form>
    </div>
    </div>
   </div>
 </div>













































<?php
if ($num_rows>0) { ?>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
        <h1>Assign A Sub Nav To the Parent Navigation</h1>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>       
        </ul>>
      </div>
      <div class="x_content">
          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>Count</th>
                    <th>Category Title</th>
                    <th>Actions</th>
                </tr>
            </thead>   
            <tbody>
            <?php
            $count = 0;
            $this->load->module('igashar_categories');
            foreach($query->result() as $row) { 
                $count++;
                $delete_url = base_url()."igashar_cat_assign/delete/".$row->id;
                $parent_cat_title = $this->igashar_categories->_get_parent_cat_title($row->cat_id);
                $cat_title = $this->igashar_categories->_get_cat_title($row->cat_id);
                $long_cat_title = $parent_cat_title." > ".$cat_title;
            ?>
            <tr>
                <td><?= $count ?></td>
                <td class="center"><?= $long_cat_title ?></td>
                  <td class="center">
                      <a class="btn btn-round btn-danger" href="<?= $delete_url ?>">
                          <i class="fa fa-trash"></i> Remove Option 
                      </a>
                      </td>
                       </tr>
                      <?php
                            }
                 ?>
                            
                          </tbody>
                      </table>            
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->

<?php
}
?>





