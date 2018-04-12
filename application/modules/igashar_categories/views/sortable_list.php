<style type="text/css">
    .sort {
        list-style: none;
        border: 1px #aaa solid;
        color: #333;
        padding: 10px;
        margin-bottom: 4px;
    }
</style>

<ul id="sortlist">
    <?php
    $this->load->module('igashar_categories');
    foreach($query->result() as $row) { 
        $num_sub_cats = $this->igashar_categories->_count_sub_cats($row->id);
        $edit_item_url = base_url()."igashar_categories/create/".$row->id;
        $view_item_url = base_url()."igashar_categories/view/".$row->id;

        if ($row->parent_cat_id==0) {
          $parent_cat_title = "&nbsp;";
        } else {
          $parent_cat_title = $this->igashar_categories->_get_cat_title($row->parent_cat_id);
        }                            
    ?>
    <li class="sort" id="<?= $row->id ?>"><i class="fa fa-sort"></i> <?= $row->cat_title ?>

    <?= $parent_cat_title ?>
        <?php
        if ($num_sub_cats<1) {
          echo "&nbsp;";
        } else {

          if ($num_sub_cats==1) {
            $entity = "Category";
          } else {
            $entity = "Categories";
          }

          $sub_cat_url = base_url()."igashar_categories/manage/".$row->id;

          ?>
          <a class="btn btn-round btn-default" href="<?= $sub_cat_url ?>">
            <i class="fa fa-eyedropper"></i> <?php
            echo $num_sub_cats." Sub ".$entity;
            ?> 
          </a>

          <a class="btn btn-round btn-info" href="<?= $edit_item_url ?>">
            <i class="fa fa-bars"></i>  
         </a>

          <?php
        }
        ?>
    </li>
    <?php
    }
    ?>
</ul>