

<!-- Page Start -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Typhoon Video Upload</h1>        
    </div>
  
  <div class="border-bottom my-3"></div>

 <!-- Table Body for Managing the Uploaded Images -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Typhoon Video Upload </h6>
    <div class="border-bottom my-3"></div>

    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#newForm">
    Add New
  </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form class="form-horizontal" method="post" action="<?= base_url('vidupload')?>" enctype="multipart/form-data" >
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Image</th>
            <th>Type</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($vidtyphoon as $row): ?>
                    <tr>
                      <td>
                        <video height="200px" width="200px" controls> <source src="<?= $row['video'] ?>" type="video/mp4"></source> </video>
                      </td>
                      <td><?= $row['type'] ?></td>
                      <td><?= $row['description'] ?></td>
                      <td>
                        <button href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal<?= $row['id']; ?>"><i class="fas fa-edit"></i></button>
                        <button href="#" type="button" class="btn btn-danger"><i class="far fa-trash-alt" data-toggle="modal" data-target="#delete"></i></button>
                      </td>
                    </tr>
                  
                                                 
  <!-- Delete Modal -->
  <div class="modal fade" id="delete" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Are you sure you want to delete this?</h3>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="<?= base_url('deletevgt'.$row['id'])?>">Delete</a>
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>       
            </div>
        </div>
    </div>
</div>
                        <?php endforeach; ?>
        </tbody>    
      </table>
      </form>
    </div>

  </div>
</div>


  <!-- End of Table -->
















  <!-- New Form Modal-->
  <div class="modal fade" id="newForm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Add Image</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('vgtupload')?>" class="form" enctype="multipart/form-data">
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Select Image</label>
              <input type="file" name="video" accept=".mp4, .avi, .flv, .3gp" class="form-control" id="customFile" required/>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Type</label>
                <select name="type" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="Flood">Flood</option>
                  <option value="Landslide">Landslide</option>
                  <option value="Typhoon">Typhoon</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label">Description</label>
              <textarea name="description" class="form-control" aria-label="With textarea" required></textarea>
            </div>
            <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <button class="btn btn-warning" type="submit" name="submit2">
            Submit
          </button>

          
        </div>  
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- End New Form Modal -->

  <!-- Edit Modal -->
  <?php foreach ($vidtyphoon as $row): ?>
  <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Edit Video</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('vgtedit'.$row['id'])?>" class="form" enctype="multipart/form-data">
            <div class="form-row align-items-center">
            <label class="form-label" for="customFile">Previous Video</label>
            <video height="200px" width="100%" controls> <source src="<?= $row['video'] ?>" type="video/mp4"></source> </video>

              <label class="form-label" for="customFile">Select Video</label>
              <input type="file" name="video" accept=".mp4, .avi, .flv, .3gp" class="form-control" id="customFile"/>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Type</label>
                <select name="type" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected><?= $row['type'] ?></option>
                  <option value="Typhoon">Typhoon</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label">Description</label>
              <textarea name="description" class="form-control" aria-label="With textarea" required><?= $row['description'] ?></textarea>
            </div>
            <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <button class="btn btn-warning" type="submit" name="submit2">
            Update
          </button>

          
        </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!-- End Edit Modal -->

</div>
