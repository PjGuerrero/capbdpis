
<!-- Page Start -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>        
    </div>
  
  <div class="border-bottom my-3"></div>

  <!-- Table Body for Managing the Uploaded Images -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
    <div class="border-bottom my-3"></div>
    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#newForm">
    Add New
  </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form class="form-horizontal" method="post" action="<?= base_url('imageupload')?>" enctype="multipart/form-data" >
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody> 
          <?php foreach ($tbl_admin as $row): ?>
                    <tr>
                      <td><?= $row['firstname'] ?></td>
                      <td><?= $row['lastname'] ?></td>
                      <td><?= $row['email'] ?></td>
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
                <a class="btn btn-danger" href="<?= base_url(''.$row['id'])?>">Delete</a>
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
          <h5 class="modal-title" id="ModalLabel">Add User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('')?>" class="form" enctype="multipart/form-data">
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">First Name</label>
              <input type="text" class="form-control form-control-user" name="firstname" id="firstname" required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Last Name</label>
              <input type="text" class="form-control form-control-user" name="lastname" id="lastname"  required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Email</label>
              <input type="email" class="form-control form-control-user" name="email" id="email" required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Password</label>
              <input type="password" class="form-control form-control-user" name="password" id="password"  required>
            </div>
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

<!-- Edit Modal-->
<?php foreach ($tbl_admin as $row): ?>
<div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Add Image</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('igfedit'.$row['id'])?>" class="form" enctype="multipart/form-data">
          <div class="form-row align-items-center">
          <div class="form-row align-items-center">
              <label class="form-label" for="customFile">First Name</label>
              <input type="text" class="form-control form-control-user" name="firstname" id="firstname" value="<?= $row['firstname']; ?>" required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Last Name</label>
              <input type="text" class="form-control form-control-user" name="lastname" id="lastname" value="<?= $row['lastname']; ?>" required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Email</label>
              <input type="email" class="form-control form-control-user" name="email" id="email" value="<?= $row['email']; ?>" required>
            </div>
            <div class="form-row align-items-center">
              <label class="form-label" for="customFile">Password</label>
              <input type="text" class="form-control form-control-user" name="password" id="password" value="<?= $row['password']; ?>" required>
            </div>
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
