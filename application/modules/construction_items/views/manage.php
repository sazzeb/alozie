<h1>Manage Items</h1>
<?php
if (isset($flash)) {
  echo $flash;
}

$create_item_url = base_url()."construction_items/create";
?><p style="margin-top: 30px;">
    <a href="<?= $create_item_url ?>"><button type="button" class="btn btn-round btn-info">Add New Item</button></a>
    </p>

<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Item here<small>This is good</small></h2>
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
                   <th>Item Title</th>
                   <th>Small sentence</th>
                   <th>Construction Description</th>
                  <th>Actions</th>
               </tr>
          </thead>   
          <tbody>
                            <?php
                            foreach($query->result() as $row) { 
                                $edit_item_url = base_url()."construction_items/create/".$row->id;
                                $view_item_url = base_url()."construction_items/view/".$row->id;
                            ?>
                            <tr>
                                <td><?= $row->item_title ?></td>
                                <td class="center"><?= $row->little_description ?></td>
                                 <td class="center"><?= $row->item_description ?></td>
                                <td class="center">
                                    <a class="btn btn-round btn-info" href="<?= $view_item_url ?>">
                                        <i class="fa fa-eye"></i>  
                                    </a>
                                    <a class="btn btn-round btn-warning" href="<?= $edit_item_url ?>">
                                        <i class="fa fa-comments-o"></i>  
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