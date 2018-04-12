<h1>Manage Categories</h1>
<?php


$create_item_url = base_url()."igashar_categories/create";
?><p style="margin-top: 30px;">
  <a href="<?= $create_item_url ?>"><button type="button" class="btn btn-round btn-info">Add New Nav Header</button></a>
</p>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
        <h1>Manage Pages Here</h1>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>       
        </ul>>
      </div>
      <div class="x_content">
      <?php
      if (isset($flash)) {
        echo $flash;
        }
        echo Modules::run('igashar_categories/_draw_sortable_list', $parent_cat_id);
     ?> 
      </div>
    </div>
   </div>
 </div>