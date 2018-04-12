<h2 style="color: #4f8ef5;">Your <?= $folder_type ?></h2>
<?php
if (isset($flash)) {
  echo $flash;
}

$create_msg_url = base_url()."enquiries/create";
?><p style="margin-top: 30px;">
    <a href="<?= $create_msg_url ?>"><button type="button" class="btn btn-round btn-info">Compose Message</button></a>
    </p>

<style type="text/css">
  .urgent {
    color: red; 
  }
</style>


<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><?= $folder_type ?><small>This view message </small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">
          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>Ranking</th>
                    <th>Date Sent</th>
                    <th>Sent By</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
            </thead>   
            <tbody>
              <?php
              $this->load->module('store_accounts');
              $this->load->module('timedate');
              foreach($query->result() as $row) {

                  $view_url = base_url()."enquiries/view/".$row->id;
                  $customer_data['firstname'] = $row->firstname;
                  $customer_data['lastname'] = $row->lastname;
                  $customer_data['company'] = $row->company;
                  $opened = $row->opened;
                  $urgent = $row->urgent;
                  $ranking = $row->ranking;
                  if ($opened==1) {
                    $icon = '<i class="icon-envelope"></i>';
                  } else {
                    $icon = '<i class="icon-envelope-alt" style="color: orange;"></i>';
                  }

                  $date_sent = $this->timedate->get_nice_date($row->date_created, 'full');

                  if ($row->sent_by==0) {
                    $sent_by = "Admin";
                  } else {
                    $sent_by = $this->store_accounts->_get_customer_name($row->sent_by, $customer_data);
                  }
              ?>
              <tr<?php

              if ($urgent==1) {
                echo ' class="urgent"';
              }
              ?>>
                    <td class="span1"><?= $icon ?></td>
                    <td><?php

                    if ($ranking<1) {
                      echo '-';
                    } else {

                      for ($i=0; $i < $ranking; $i++) { 
                        echo '<i class="icon-star"></i>';
                      }

                    }
                    ?></td>
                    <td><?= $date_sent ?></td>
                    <td><?= $sent_by ?></td>
                    <td><?= $row->subject ?></td>
                    <td class="span1">
                      <a class="btn btn-round btn-info" href="<?= $view_url ?>">
                          <i class="fa fa-eye"></i>  
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
</div>













