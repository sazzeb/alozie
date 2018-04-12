<h1>Manage Sliders</h1>
<?php
if (isset($flash)) {
  echo $flash;
}

$create_item_url = base_url()."sliders/create";
?><p style="margin-top: 30px;">
    <a href="<?= $create_item_url ?>"><button type="button" class="btn btn-round btn-info">Create New Slider</button></a>
    </p>
<?php 
 if($num_rows<1)
{
    echo '<p> You have not uploaded any slider on this website yet.';
}else{
?>
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Existing Sliders<small>in view</small></h2>
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
                <th>Page Title</th>
                <th>Page URL</th>
                <th class="span2">Actions</th>
              </tr>
          </thead>   
          <tbody>
            <?php
            foreach($query->result() as $row) { 
                $edit_page_url = base_url()."sliders/create/".$row->id;
                $view_page_url = $row->target_url;
            ?>
            <tr>
                <td class="center"><?= $row->slider_title ?></td>
                <td><?= $view_page_url ?></td>
                <td class="center">
                    <a class="btn btn-round btn-info" href="<?= $view_page_url ?>">
                        <i class="fa fa-eye"></i>  
                    </a>
                    <a class="btn btn-round btn-warning" href="<?= $edit_page_url ?>">
                        <i class="fa fa-eye-slash"></i>  
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

<?php } ?>