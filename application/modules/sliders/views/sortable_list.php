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
    $this->load->module('sliders');
    $this->load->module('homepage_sliders');
    foreach($query->result() as $row) { 
        $edit_item_url = base_url()."sliders/create/".$row->id;
        $view_item_url = base_url()."sliders/view/".$row->id;
        $slider_title = $row->slider_title;

                         
    ?>
    <li class="sort" id="<?= $row->id ?>"><i class="icon-sort"></i> <?= $row->slider_title ?>

    <?= $slider_title ?>
      <?php
      $num_items = $this->homepage_sliders->count_where('block_id', $row->id);
   

        if ($num_items==1) {
          $entity = "Slider";
        } else {
          $entity = "Sliders";
        }

        $sub_cat_url = base_url()."sliders/manage/".$row->id;

        ?>
        <a class="btn btn-round btn-info" href="<?= base_url() ?>">
          <i class="fa fa-eye"></i>
        </a>

        <a class="btn btn-round btn-warning" href="<?= $edit_item_url ?>">
          <i class="fa fa-eye-slash"></i>  
        </a>
    </li>
    <?php
    }
    ?>
</ul>