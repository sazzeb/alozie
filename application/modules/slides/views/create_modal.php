<a href="<?= base_url() ?>sliders/create/<?= $parent_id ?>"><button type="button" class="btn btn-round btn-default">Previous Page</button></a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-round btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create New Slides</button><br />

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Slides</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?= $form_location ?>" method="post">

       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typeahead">Target Url <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" name="target_url" placeholder="Enter the Target Url here" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typeahead">Subject<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" name="alt_text" placeholder="Enter the Alt_text here" class="form-control col-md-7 col-xs-12">
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-round btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-round btn-info" name="submit" value="Submit" type="text">Submit</button>
      </div>
   <?php
  echo form_hidden('parent_id', $parent_id);
  ?>
    </div>
    </form>
  </div>
</div>