<div id="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 border rounded p-4">
            <h1 class="h3 mb-4 text-center text-primary">Manage Barangay Officials</h1>
            <form method="POST"enctype="multipart/form-data">
            <div class="form-group">
                  <label><i class="fas fa-user"></i> Position</label>
                  <select name="position" class="form-control">
                     <option value="Barangay Captain">Barangay Captain</option>
                     <option value="Barangay Kagawad (Health)">Barangay Kagawad (Health)</option>
                     <option value="Barangay Kagawad (Sports)">Barangay Kagawad (Sports)</option>
                     <option value="Barangay Kagawad (Agriculture)">Barangay Kagawad (Agriculture)</option>
                     <option value="Barangay Kagawad (Peace and Order)">Barangay Kagawad (Peace and Order)</option>
                     <option value="Barangay Kagawad (Women)">Barangay Kagawad (Women)</option>
                     <option value="Barangay Kagawad (Education)">Barangay Kagawad (Education)</option>
                     <option value="Barangay Kagawad (Infrastructure)">Barangay Kagawad (Infrastructure)</option>
                     <option value="Barangay Secretary">Barangay Secretary</option>
                     <option value="Barangay Treasurer">Barangay Treasurer</option>
                     <option value="Barangay Nutrition Scholar">Barangay Nutrition Scholar</option>
                     <option value="Barangay Health Worker">Barangay Health Worker</option>
                     <option value="SK Chairman">SK Chairman</option>
                  </select>
                  <span><?= form_error('position') ?></span>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="first_name">First Name</label>
                     <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required>
                     <span class="text-danger"><?= form_error('first_name') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="middle_name">Middle Name</label>
                     <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Enter Middle Name" required>
                     <span class="text-danger"><?= form_error('middle_name') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="last_name">Last Name</label>
                     <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required>
                     <span class="text-danger"><?= form_error('last_name') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="contact">Contact Number</label>
                     <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Number" required>
                     <span class="text-danger"><?= form_error('contact') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="purok">Purok</label>
                     <input type="text" name="purok" id="purok" class="form-control" placeholder="Enter Purok" required>
                     <span class="text-danger"><?= form_error('purok') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="barangay">Barangay</label>
                     <input type="text" name="barangay" id="barangay" class="form-control" placeholder="Enter Barangay" required>
                     <span class="text-danger"><?= form_error('barangay') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="municipality">Municipality</label>
                     <input type="text" name="municipality" id="municipality" class="form-control" placeholder="Enter Municipality" required>
                     <span class="text-danger"><?= form_error('municipality') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="province">Province</label>
                     <input type="text" name="province" id="province" class="form-control" placeholder="Enter Province" required>
                     <span class="text-danger"><?= form_error('province') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="start_term">Start of Term</label>
                     <input type="date" name="start_term" id="start_term" class="form-control" required>
                     <span class="text-danger"><?= form_error('start_term') ?></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="end_term">End of Term</label>
                  <input type="date" name="end_term" id="end_term" class="form-control" required>
                  <span class="text-danger"><?= form_error('end_term') ?></span>
               </div> 
                <?php
               if(isset($_SESSION['success'])):?>
	<div style="color:green;"><?= $_SESSION['success'] ?></div>
<?php endif;?>
            <!--    <form action="<?base_url('index.php/dashboard/add-brgyofficial/') ?>" method="POST" enctype="multipart/form-data">-->
                <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" required />
                        
                        <span><?= form_error('image') ?></span>
                    </div>
               </div>

               <?php if (isset($_SESSION['error'])) : ?>
                  <div style="color:red;"><?= $_SESSION['error'] ?></div>
               <?php endif; ?>

               <?php if (isset($_SESSION['success'])) : ?>
                  <div style="color:green;"><?= $_SESSION['success'] ?></div>
               <?php endif; ?>

             
               <div class="text-center">
                  <button class="btn btn-primary mr-2">Add Official</button>
                  <button class="btn btn-secondary">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
