<div id="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 border rounded p-4">
            <h1 class="h3 mb-4 text-center text-primary">Manage Barangay Information</h1>
            <form method="POST" enctype="multipart/form-data">
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="barangay">Barangay</label>
                     <input type="text" name="barangay" id="barangay" class="form-control" placeholder="Enter Barangay" required>
                     <span class="text-danger"><?= form_error('barangay') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="municipality">Municipality</label>
                     <input type="text" name="municipality" id="municipality" class="form-control" placeholder="Enter Municipality" required>
                     <span class="text-danger"><?= form_error('municipality') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="province">Last Name</label>
                     <input type="text" name="province" id="province" class="form-control" placeholder="Enter Province" required>
                     <span class="text-danger"><?= form_error('province') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="region">Region</label>
                     <input type="text" name="region" id="region" class="form-control" placeholder="Enter Region" required>
                     <span class="text-danger"><?= form_error('region') ?></span>
                  </div>
               </div>
               <div class="form-group col">
                  <label for="image">Image:</label>
                  <input type="file" name="image" id="image" class="form-control" accept="image/*" required />
                  <span><?= form_error('image') ?></span>
               </div>
               <?php if (isset($_SESSION['error'])) : ?>
                  <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
               <?php endif; ?>
               <?php if (isset($_SESSION['success'])) : ?>
                  <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
               <?php endif; ?>
               <div class="text-center">
                  <button class="btn btn-primary mr-2">Add Information</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

