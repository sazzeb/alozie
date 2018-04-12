
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <?php
                  foreach ($breadcrumbs_array as $key => $value) {
                     echo '<li><i class="fa fa-home"></i><a href="'.$key.'">'.$value.'</a></li>';
                  }
                  ?>
                <li><i class="fa fa-angle-right"></i><span><?= $current_page_title ?></span></li>

            </ul>
        </div>
    </div>
</div>

