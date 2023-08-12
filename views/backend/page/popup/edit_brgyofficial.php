<form method="POST" action="<?= base_url('index.php/dashboard/edit-brgyofficial/'.$brgyofficial_data->brgyofficial_id); ?>">
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
     
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
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label >First Name</label>
            <input type="text" name="first_name" value="<?= $brgyofficial_data->first_name?>" class="form-control" />
            <span class="text-danger"><?= form_error('first_name') ?></span>
         </div>
         <div class="col-sm-6">
            <label>Middle Name</label>
            <input type="text" name="middle_name" value="<?= $brgyofficial_data->middle_name?>" class="form-control" />
            <span class="text-danger"><?= form_error('middle_name') ?></span>
         </div>
      </div>
      <div class="col-sm-6">
         <label for="con_complainant">Last Name</label>
         <input type="text" name="last_name" value="<?= $brgyofficial_data->last_name?>" class="form-control" />
         <span class="text-danger"><?= form_error('last_name') ?></span>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
            <label for="complainee">Contact #</label>
            <input type="text" name="contact" value="<?= $brgyofficial_data->contact?>" placeholder="--SELECT COMPLAINEE--" class="form-control" />
            <span class="text-danger"><?= form_error('contact') ?></span>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label for="age_c">Purok</label>
            <input type="text" name="purok" value="<?= $brgyofficial_data->purok?>" class="form-control" />
            <span class="text-danger"><?= form_error('purok') ?></span>
         </div>
         <div class="col-sm-6">
            <label for="address_c">Barangay</label>
            <input type="text" name="barangay" value="<?= $brgyofficial_data->barangay?>" class="form-control" />
            <span class="text-danger"><?= form_error('barangay') ?></span>
         </div>
      </div>
      <div class="col-sm-6">
         <label for="con_complainee">Municipality</label>
         <input type="text" name="municipality" value="<?= $brgyofficial_data->municipality?>" class="form-control" />
         <span class="text-danger"><?= form_error('municipality') ?></span>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
            <label for="complaint">Province</label>
            <input type="text" name="province" value="<?= $brgyofficial_data->province?>" placeholder="--SELECT COMPLAINEE--" class="form-control" />
            <span class="text-danger"><?= form_error('province') ?></span>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label for="action">Start of Term</label>
            <input type="text" name="start_term" value="<?= $brgyofficial_data->start_term?>" class="form-control" />
            <span class="text-danger"><?= form_error('start_term') ?></span>
         </div>
         <div class="col-sm-6">
            <label for="status">End of Term</Address></label>
            <input type="text" name="end_term" value="<?= $brgyofficial_data->end_term?>" class="form-control" />
            <span class="text-danger"><?= form_error('end_term') ?></span>
         </div>
      </div>
     
   </div>
   <?php
         if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>

<?php
if(isset($_SESSION['success'])):?>
	<div style="color:green;"><?= $_SESSION['success'] ?></div>
<?php endif;?>
            <!--    <form action="<?base_url('index.php/dashboard/add-brgyofficial/') ?>" method="POST" enctype="multipart/form-data">-->
                <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="hidden" name="old_prod_image" value="<?= $brgyofficial_data->image; ?>" />
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                        
                        <span><?= form_error('image') ?></span>
                    </div>
<!--</form>-->
                <br>
                <?php if (!empty($brgyofficial_data->image)) : ?>
                <div class="form-row">
                    <div class="form-group col">
                <img src="<?php echo base_url($brgyofficial_data->image); ?>" height="100" width="100" alt="Resident Image">
                </div>
                </div>
             <?php endif; ?>
   <br>
   
</form>
</div><div class="modal-footer">
      <center>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close </button>
         <button class="btn btn-primary">Update</button>
      </center>
