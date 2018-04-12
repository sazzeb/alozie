
<?php 
  $create_page_url = base_url()."drilling/create/"?>
  <p style="margin-top: 30px;"><a href="<?= $create_page_url ?>">
  <button type="button" class="btn btn-round btn-info">Create New Web Blog Entry</button></a></p>
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Construction Pages<small>List Of pages</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<?php 
  if (isset($flash))
  {
    echo $flash;
  }
?>
<table id="datatable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Picture</th>
      <th>Date Published</th>
      <th>Author</th>
      <th> Blog Url</th>
      <th> Blog Headline</th>
      <th class="span2">Actions</th>
    </tr>
  </thead>
  <tbody>
        <?php 
  $this->load->module('timedate');
    foreach($query->result() as $row) {
    $edit_page_url =base_url().'drilling/create/'.$row->id; 
    $view_page_url =base_url().'drilling/view/'.$row->id; 
    $date_published = $this->timedate->get_nice_date($row->date_published,'mini');
    $picture = $row->picture;
    $thumbnail_name = str_replace('.', '_thumb.', $picture);
    $thumbnail_path = base_url().'made/firstmade/img_small/'.$thumbnail_name;
    $firstname =  $row->firstname;
    $lastname = $row->lastname;
    $author = $lastname.' '.$firstname
 ?>
  <tr>
  <td><img src="<?= $thumbnail_path ?>"></td>
  <td><?= $date_published ?></td>
  <td><?= $author ?></td>
  <td><?= $row->page_url ?></td>
  <td class="center"><?= $row->page_keywords ?></td>
  <td class="center">
    <a class="btn btn-round btn-success" href="<?= $view_page_url ?>">
      <i class="fa fa-sort" ></i>  
    </a>
    <a class="btn btn-round btn-info" href="<?= $edit_page_url ?>">
      <i class="fa fa-bars"></i>  
    </a>
  </td>
</tr>
<?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


