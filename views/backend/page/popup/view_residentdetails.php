<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 border rounded p-4">
            <h2 class="text-center text-primary mb-4">RESIDENT INFORMATION</h2>

            <!-- First Row -->
            <div class="form-group">
                  <div class="row">
                     <div class="col-sm-3">
                        <?= form_label('First Name', 'first_name') ?>
                        <?= form_input('first_name', set_value('first_name'), 'class="form-control" placeholder="First Name"') ?>
                        <span class="text-danger"><?= form_error('first_name') ?></span>
                     </div>
                     <div class="col-sm-3">
                        <?= form_label('Middle Name', 'middle_name') ?>
                        <?= form_input('middle_name', set_value('middle_name'), 'class="form-control" placeholder="Middle Name"') ?>
                        <span class="text-danger"><?= form_error('middle_name') ?></span>
                     </div>
                     <div class="col-sm-3">
                        <?= form_label('Last Name', 'last_name') ?>
                        <?= form_input('last_name', set_value('last_name'), 'class="form-control" placeholder="Last Name"') ?>
                        <span class="text-danger"><?= form_error('last_name') ?></span>
                     </div>
                     <div class="col-sm-3">
                        <?= form_label('Extension', 'name_ex') ?>
                        <?= form_input('name_ex', set_value('name_ex'), 'class="form-control" placeholder="Extension"') ?>
                        <span class="text-danger"><?= form_error('name_ex') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Second Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-3">
                        <?= form_label('Sex', 'sex') ?>
                        <?= form_dropdown('sex', array('male' => 'Male', 'female' => 'Female'), set_value('sex'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('sex') ?></span>
                     </div>
                     <div class="col-sm-3">
                        <?= form_label('Birth Date', 'birth_date') ?>
                        <?= form_input('birth_date', set_value('birth_date'), 'type="date" class="form-control"') ?>
                        <span class="text-danger"><?= form_error('birth_date') ?></span>
                     </div>
                     <div class="col-sm-3">
                        <?= form_label('Birth Place', 'birth_place') ?>
                        <?= form_input('birth_place', set_value('birth_place'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('birth_place') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Third Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-6">
                        <?= form_label('Email', 'email') ?>
                        <?= form_input('email', set_value('email'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('email') ?></span>
                     </div>
                     <div class="col-sm-6">
                        <?= form_label('Contact', 'contact') ?>
                        <?= form_input('contact', set_value('contact'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('contact') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Fourth Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <?= form_label('Purok', 'purok') ?>
                        <?= form_input('purok', set_value('purok'), 'class="form-control" placeholder="Purok"') ?>
                        <span class="text-danger"><?= form_error('purok') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Barangay', 'barangay') ?>
                        <?= form_input('barangay', set_value('barangay'), 'class="form-control" placeholder="Barangay"') ?>
                        <span class="text-danger"><?= form_error('barangay') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Occupation', 'occupation') ?>
                        <?= form_input('occupation', set_value('occupation'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('occupation') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Fifth Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <?= form_label('Civil Status', 'civil_status') ?>
                        <?= form_dropdown('civil_status', array('single' => 'Single', 'married' => 'Married', 'separated' => 'Separated', 'widowed' => 'Widowed'), set_value('civil_status'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('civil_status') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Religion', 'religion') ?>
                        <?= form_input('religion', set_value('religion'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('religion') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Nationality', 'nationality') ?>
                        <?= form_input('nationality', set_value('nationality'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('nationality') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Sixth Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <?= form_label('Educational Attainment', 'educational') ?>
                        <?= form_dropdown('educational', array('NSC' => 'No Schooling Completed', 'EG' => 'Elementary Graduate', 'EU' => 'Elementary Undergraduate', 'HSG' => 'High School Graduate', 'HSU' => 'High School Undergraduate', 'CU' => 'College Undergraduate', 'V' => 'Vocational', 'BD' => "Bachelor's Degree", 'MD' => "Master's Degree", 'DD' => "Doctorate Degree"), set_value('educational'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('educational') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Monthly Income', 'monthly_income') ?>
                        <?= form_input('monthly_income', set_value('monthly_income'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('monthly_income') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Total Household Member', 'tot_housemember') ?>
                        <?= form_input('tot_housemember', set_value('tot_housemember'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('tot_housemember') ?></span>
                     </div>
                  </div>
               </div>

               <!-- Seventh Row -->
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <?= form_label('Land Ownership', 'land_own') ?>
                        <?= form_dropdown('land_own', array('owned' => 'Owned', 'landless' => 'Landless', 'tenant' => 'Tenant', 'caretaker' => 'Caretaker'), set_value('land_own'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('land_own') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('House Ownership', 'house_own') ?>
                        <?= form_dropdown('house_own', array('owned' => 'Own House', 'renting' => 'Renting', 'LWP' => 'Living with Parents'), set_value('house_own'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('house_own') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <?= form_label('Differently Abled', 'diff_abled') ?>
                        <?= form_dropdown('diff_abled', array('yes' => 'Yes', 'no' => 'No'), set_value('diff_abled'), 'class="form-control"') ?>
                        <span class="text-danger"><?= form_error('diff_abled') ?></span>
                     </div>
                  </div>

            <!-- Image Display -->
            <?php
if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>

<?php
if(isset($_SESSION['success'])):?>
	<div style="color:green;"><?= $_SESSION['success'] ?></div>
<?php endif;?>
            <!--    <form action="<?base_url('index.php/dashboard/add-resident/') ?>" method="POST" enctype="multipart/form-data">-->
                <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="hidden" name="old_prod_image" value="<?= $resident_data->image; ?>" />
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                        
                        <span><?= form_error('image') ?></span>
                    </div>
<!--</form>-->
                <br>
                <?php if (!empty($resident_data->image)) : ?>
                <div class="form-row">
                    <div class="form-group col">
                <img src="<?php echo base_url($resident_data->image); ?>" height="100" width="100" alt="Resident Image">
                </div>
                </div>
             <?php endif; ?>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
