<h1>Content Management System</h1>
<?php
if (isset($flash)) {
  echo $flash;
}

$create_page_url = base_url()."webpages/create";
?><p style="margin-top: 30px;">
    <a href="<?= $create_page_url ?>"><button type="button" class="btn btn-round btn-info">Create New Webpage</button></a>
    </p>




<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Custom Webpages<small>This is good</small></h2>
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
              <th>Page URL</th>
              <th>Page Title</th>
              <th class="span2">Actions</th>
          </tr>
       </thead>   
       <tbody>
        <?php
        foreach($query->result() as $row) { 
            $edit_page_url = base_url()."webpages/create/".$row->id;
            $view_page_url = base_url().$row->page_url;
        ?>
        <tr>
            <td><?= $view_page_url ?></td>
            <td class="center"><?= $row->page_title ?></td>
            <td class="center">
                <a class="btn btn-info" href="<?= $view_page_url ?>">
                    <i class="fa fa-eye"></i>  
                </a>
                <a class="btn btn-warning" href="<?= $edit_page_url ?>">
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