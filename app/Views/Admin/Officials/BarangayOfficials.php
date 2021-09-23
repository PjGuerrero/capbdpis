
<!-- Page Start -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Barangay Officials Upload</h1>        
    </div>
  
  <div class="border-bottom my-3"></div>

  <!-- Table Body for Managing the Uploaded Images -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Officials Upload</h6>
    <div class="border-bottom my-3"></div>
    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#newForm">
    Add New
  </button>
  </div> 
  <div class="card-body">
    <div class="table-responsive">
     
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Chairmanship</th>
            <th>Contact Number</th>
            <th>Picture</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody> 
        <?php foreach ($tbl_officials as $row): ?>
                    <tr>
                    
                      <td><?= $row['name'] ?></td>
                      <td><?= $row['position'] ?></td>
                      <td><?= $row['chairmanship'] ?></td>
                      <td><?= $row['contact'] ?></td>
                      <td class="text-center">
                        <img src="<?= $row['image'] ?>" height="120px" width="150px" alt="Image" />
                      </td>
                      
                      <td>
                        <button href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal<?= $row['id']; ?>"><i class="fas fa-edit"></i></button>
                        <button href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
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
                <a class="btn btn-danger" href="<?= base_url('deleteoff'.$row['id'])?>">Delete</a>
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
          <h5 class="modal-title" id="ModalLabel">Add Officials</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('offupload')?>" class="form" enctype="multipart/form-data">
          <div class="form-row align-items-center">
              <label class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Position</label>
                <select name="position" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="Barangay Captain">Barangay Captain</option>
                  <option value="Secretary">Secretary</option>
                  <option value="Treasurer">Treasurer</option>
                  <option value="Kagawad">Kagawad</option>
                  <option value="SK Chairman">SK Chairman</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Chairmanship</label>
                <select name="chairmanship" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="Presiding officer">Presiding officer</option>
                  <option value="Committee on Health">Committee on Health</option>
                  <option value="Committee on Infrastructure">Committee on Infrastructure</option>
                  <option value="Committee on Agriculture">Committee on Agriculture</option>
                  <option value="None">None</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label">Mobile Number</label>
              <input type="text" name="number" class="form-control" aria-label="With textarea" required>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Select Image</label>
              <input type="file" name="image" accept=".png, .jpg, .jpeg, .qif" class="form-control" id="customFile" required/>
            </div>
            <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <button class="btn btn-warning" type="submit">
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
  <?php foreach ($tbl_officials as $row): ?>
  <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Edit Officials</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('editoff'.$row['id'])?>" class="form" enctype="multipart/form-data">
          <div class="form-row align-items-center">
          <label class="form-label" for="customFile">Previous Image</label>
              <img class="img-fluid" width="100%" src="<?= $row['image'] ?>">
              <label class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>"required>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Position</label>
                <select name="position" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected><?= $row['position'] ?></option>
                  <option value="Barangay Captain">Barangay Captain</option>
                  <option value="Secretary">Secretary</option>
                  <option value="Treasurer">Treasurer</option>
                  <option value="Kagawad">Kagawad</option>
                  <option value="SK Chairman">SK Chairman</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Chairmanship</label>
                <select name="chairmanship" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected><?= $row['chairmanship'] ?></option>
                  <option value="Presiding officer">Presiding officer</option>
                  <option value="Committee on Health">Committee on Health</option>
                  <option value="Committee on Infrastructure">Committee on Infrastructure</option>
                  <option value="Committee on Agriculture">Committee on Agriculture</option>
                  <option value="None">None</option>
                </select>
              </div>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label">Mobile Number</label>
              <input type="text" name="number" value="<?= $row['contact'] ?>" class="form-control" aria-label="With textarea" required>
            </div>

            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Select Image</label>
              <input type="file" name="image" accept=".png, .jpg, .jpeg, .qif" class="form-control" id="customFile" required/>
            </div>
            <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <button class="btn btn-warning" type="submit">
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
