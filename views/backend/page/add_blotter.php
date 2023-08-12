<div id="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 border rounded p-4">
            <h1 class="h3 mb-4 text-center text-primary">Manage Blotter</h1>
            <form method="POST">
               <div class="form-group">
                  <label for="complainant">Name of Complainant</label>
                  <select name="complainant" id="complainant" class="form-control" required>
                     <option value="">Select Complainant</option>
                     <?php foreach ($residents as $resident) : ?>
                        <option value="<?= $resident->last_name . ', ' . $resident->first_name . ' ' . $resident->middle_name ?>"><?= $resident->last_name . ', ' . $resident->first_name . ' ' . $resident->middle_name ?></option>
                     <?php endforeach; ?>
                  </select>
                  <span class="text-danger"><?= form_error('complainant') ?></span>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="age1">Age</label>
                     <input type="text" name="age" id="age1" class="form-control" placeholder="Enter Age" required>
                     <span class="text-danger"><?= form_error('age1') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="address">Address</label>
                     <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
                     <span class="text-danger"><?= form_error('address') ?></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="number">Contact Number</label>
                  <input type="text" name="con_complainant" id="number" class="form-control" placeholder="Enter Contact Number">
                  <span class="text-danger"><?= form_error('number') ?></span>
               </div>
               <div class="form-group">
                  <label for="complainee">Name of Complainee</label>
                  <select name="complainee" id="complainee" class="form-control" required>
                     <option value="">Select Complainee</option>
                     <?php foreach ($residents as $resident) : ?>
                        <option value="<?= $resident->last_name . ', ' . $resident->first_name . ' ' . $resident->middle_name ?>"><?= $resident->last_name . ', ' . $resident->first_name . ' ' . $resident->middle_name ?></option>
                     <?php endforeach; ?>
                  </select>
                  <span class="text-danger"><?= form_error('complainee') ?></span>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="age2">Age</label>
                     <input type="text" name="age_c" id="age2" class="form-control" placeholder="Enter Age" required>
                     <span class="text-danger"><?= form_error('age_c') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="address_complainee">Address</label>
                     <input type="text" name="address_c" id="add_complainee" class="form-control" placeholder="Enter Address" required>
                     <span class="text-danger"><?= form_error('address_c') ?></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="num_complainee">Contact Number</label>
                  <input type="text" name="con_complainee" id="num_complainee" class="form-control" placeholder="Enter Contact Number">
                  <span class="text-danger"><?= form_error('num_complainee') ?></span>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="complaint">Complaint</label>
                     <input type="text" name="complaint" id="complaint" class="form-control" placeholder="Enter Complaint" required>
                     <span class="text-danger"><?= form_error('complaint') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="action">Action</label>
                     <select name="action" id="action" class="form-control" required>
                        <option value="">Select Action</option>
                        <option value="first">1st Option</option>
                        <option value="second">2nd Option</option>
                     </select>
                     <span class="text-danger"><?= form_error('action') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="status">Status</label>
                     <select name="status" id="status" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="solved">Solved</option>
                        <option value="unsolved">Unsolved</option>
                     </select>
                     <span class="text-danger"><?= form_error('status') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="incidence">Location of Incidence</label>
                     <input type="text" name="location" id="location" class="form-control" placeholder="Enter Location of Incidence" required>
                     <span class="text-danger"><?= form_error('incidence') ?></span>
                  </div>
               </div>
               <div class="text-center">
                  <button class="btn btn-primary mr-2">Add Blotter</button>
                  <button class="btn btn-secondary">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
