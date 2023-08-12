<!-- Main Content -->
<div id="content">
   <div class="container">
      <?php echo validation_errors(); ?>
      <?php if (isset($_SESSION['error'])): ?>
         <div style="color:red;"><?= $_SESSION['error'] ?></div>
      <?php endif; ?>
      <br>
      <form method="POST" enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/edit-resident/' . $resident_data->resident_id); ?>">
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-user"></i> First Name</label>
                  <input type="text" name="first_name" value="<?= $resident_data->first_name ?>" class="form-control">
                  <span><?= form_error('first_name') ?></span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-user"></i> Middle Name</label>
                  <input type="text" name="middle_name" value="<?= $resident_data->middle_name ?>" class="form-control" />
                  <span><?= form_error('middle_name') ?></span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-user"></i> Last Name</label>
                  <input type="text" name="last_name" value="<?= $resident_data->last_name ?>" class="form-control" />
                  <span><?= form_error('last_name') ?></span>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-venus-mars"></i> Sex</label>
                  <select name="sex" value="<?= $resident_data->sex ?>" class="form-control">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  <span><?= form_error('sex') ?></span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-birthday-cake"></i> Birth Date</label>
                  <input type="date" name="birth_date" value="<?= $resident_data->birth_date ?>" class="form-control" />
                  <span><?= form_error('birth_date') ?></span>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label><i class="fas fa-map-marker-alt"></i> Birth Place</label>
                  <input type="text" name="birth_place" value="<?= $resident_data->birth_place ?>" class="form-control" />
                  <span><?= form_error('birth_place') ?></span>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label><i class="fas fa-envelope"></i> Email</label>
                  <input type="email" name="email" value="<?= $resident_data->email ?>" class="form-control" />
                  <span><?= form_error('email') ?></span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label><i class="fas fa-phone"></i> Contact</label>
                  <input type="tel" name="contact" value="<?= $resident_data->contact ?>" class="form-control" />
                  <span><?= form_error('contact') ?></span>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label><i class="fas fa-users"></i> Civil Status</label>
                  <select name="civil_status" value="<?= $resident_data->civil_status ?>" class="form-control">
                     <option value="single">Single</option>
                     <option value="married">Married</option>
                     <option value="separated">Separated</option>
                     <option value="widowed">Widowed</option>
                  </select>
                  <span><?= form_error('civil_status') ?></span>
               </div>
            </div>
            <!-- ... (Other fields) ... -->
         </div>

         <!-- Image Upload -->
         <div class="form-group">
            <label><i class="fas fa-image"></i> Image:</label>
            <input type="hidden" name="old_prod_image" value="<?= $resident_data->image; ?>" />
            <input type="file" name="image" id="image" class="form-control" accept="image/*" />
            <span><?= form_error('image') ?></span>
         </div>

         <!-- Display Resident Image -->
         <?php if (!empty($resident_data->image)) : ?>
            <div class="row">
               <div class="col-md-6">
                  <img src="<?php echo base_url($resident_data->image); ?>" height="100" width="100" alt="Resident Image" style="border: 1px solid #ccc; border-radius: 50%;">
               </div>
            </div>
         <?php endif; ?>

         <br>
         <?php if (isset($_SESSION['success'])): ?>
            <div style="color:green;"><?= $_SESSION['success'] ?></div>
         <?php endif; ?>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Update</button>
         </div>
      </form>
   </div>
</div>
