<!-- Page Start -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">FAQs Upload</h1>        
    </div>
  
  <div class="border-bottom my-3"></div>

  <!-- Table Body for Managing the Uploaded FAQs -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">FAQs Upload </h6>
    <div class="border-bottom my-3"></div>
    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#newForm">
    Add New
  </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" >
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Number</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody> 
          <?php foreach ($tbl_faqgen as $row): ?>
                    <tr>
                      <td><?= $row['number'] ?></td>
                      <td><?= $row['question'] ?></td>
                      <td ><?= $row['answer'] ?></td>
                      <td width="120px"> 
                        <button type="button" class="editMod btn btn-success" data-toggle="modal" data-target="#edit<?= $row['id']; ?>" ><i class="fas fa-edit"></i></button>
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
                <a class="btn btn-danger" href="<?= base_url('faqsdel'.$row['id'])?>">Delete</a>
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>       
            </div>
        </div>
    </div>
</div>
<!-- End Delete Modal -->

            <?php endforeach; ?>
        </tbody>    
      </table>
      </form>
    </div>
  </div>
</div>


  <!-- End of Table -->



<!-- Modals -->

  <!-- New Form Modal-->
  <div class="modal fade" id="newForm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">FAQs Upload</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('faqsupload')?>" class="form" enctype="multipart/form-data">
          <div class="container">
  <div class="form-group">
  <label for="faq-number">Number: </label>
       <input type="text" name="number" id="number" class="form-control" />
  </div>
  <div class="form-group">
      <label for="question">Question: </label>
    <input type="text" name="question" id="question" class="form-control" />    
  </div>
  <div class="form-group">
      <label for="answer">Answer: </label>
    <textarea name="answer" id="answer" cols="20" rows="10" class="form-control"></textarea>    
  </div>


<div class="panel-group" role="tablist" aria-multiselectable="true">
  
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

  <!-- Edit Form Modal-->
  <?php foreach ($tbl_faqgen as $row): ?>
  
<div class="modal fade" id="edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">FAQs Edit</h5>
        <span id="barcode"></span>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
        
      <div class="modal-body">
        <form method="post" action="<?= base_url('faqsedit'.$row['id'])?>" class="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <div class="container">
            
          <div class="form-group">
            <label for="faq-number">Number: </label>
            <input type="text" name="number" id="number" value="<?= $row['number']; ?>" class="form-control" />
          </div>
  
          <div class="form-group">
            <label for="question">Question: </label>
            <input type="text" name="question" id="question"  value="<?= $row['question']; ?>" class="form-control" />    
          </div>
  
          <div class="form-group">
            <label for="answer" >Answer: </label>
            <textarea name="answer" id="answer" cols="20" rows="10" class="form-control"><?= $row['answer']; ?></textarea>    
          </div>

  
          <div class="panel-group" role="tablist" aria-multiselectable="true"></div>
  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-warning" type="submit">Update</button>
          </div>  
          </form>
        </div>
      </div>
    </div>
</div>
<?php endforeach; ?>
<!-- End Edit Form Modal -->

<!-- End Modals -->
</div>

