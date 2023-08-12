<div class="container-fluid">
   <!-- Page Heading --> 
   <br>
 <center>
   <h1 class="h3 mb-2" style="color: black; font-size: 24px; font-family: Verdana, sans-serif;">Residents Information List</h1>
</center>
   <p class="mb-4">
      <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-resident') ?>">  <i class="fas fa-user-plus"></i> Add Resident </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
         <div class="col-6">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>

          <div class="col-md-6">
             <form class="form-inline float-right"  id="search-form">
               <div class="input-group">
                   <input type="text" id="search-input" class="form-control" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered table-hover" id="border">
            <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Civil Status</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($resident_list as $resident) : ?>
                        <tr class="search-item">
                            <td><?= $counter ?></td>
                            <td style="text-align: center;"><img src="<?php echo base_url($resident->image); ?>" height="50px" width="50px" alt="Resident Image"></td>
                            <td><?= $resident->last_name ?>, <?= $resident->first_name ?> <?= $resident->name_ex ?> <?= $resident->middle_name ?></td>
                            <td><?= $resident->birth_date ?></td>
                            <td><?= $resident->sex ?></td>
                            <td><?= $resident->purok ?> <?= $resident->barangay ?></td>
                            <td><?= $resident->contact ?></td>
                            <td><?= $resident->religion ?></td>
                            <td><?= $resident->civil_status ?></td>
                            <td><?= $resident->nationality ?></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary edit-resident-btn" data-resident="<?= $resident->resident_id ?>"><i class="fas fa-edit"> </i></button>
                                    <button class="btn btn-danger delete-resident-btn" data-resident="<?= $resident->resident_id ?>"><i class="fas fa-trash"> </i></button>
                                    <button type="button" class="btn btn-success view-resident-btn" data-resident="<?= $resident->resident_id ?>"><i class="fas fa-eye"> </i></button>
                                </div>
                            </td>
                        </tr>
                        <?php $counter++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="view-resident-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resident Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- The resident details will be populated here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script> 
/* AJAX */
   /* Your JavaScript/jQuery code for AJAX and other interactions goes here */
   $(document).ready(function() {
        // Bind the click event for all buttons with class "view-resident-btn"
        $(document).on('click', '.view-resident-btn', function() {
            var residentId = $(this).data('resident');

            $.ajax({
            url: '<?= base_url('index.php/dashboard/ajax-view-resident-form') ?>',
            method: 'POST',
            data: {
                resident_id: residentId
            },
            success: function(response) {
                bootbox.dialog({
                    title: 'View resident',
                    message: response,
                    size: 'extra-large'
                });
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
    });
  
   $(document).on('click', '.edit-resident-btn', function() {
        var residentId = this.dataset.resident;

        $.ajax({
            url: '<?= base_url('index.php/dashboard/ajax-update-resident-form') ?>',
            method: 'POST',
            data: {
                resident_id: residentId
            },
            success: function(response) {
                bootbox.dialog({
                    title: 'Update resident',
                    message: ' ',
                    size: 'extra-large'
                }).find('.bootbox-body').html(response);;
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });

   $(document).on('click', '.delete-resident-btn', function(e) {
      var residentId = $(this).data('resident');
      bootbox.confirm('Are you sure you want to delete this resident?', function(answer) {
         if (answer == true) {
            window.location = '<?= base_url('index.php/dashboard/delete-resident/') ?>' + residentId;
         }
      });
   });

   

   $(document).ready(function() {
      // Search functionality (unchanged)
      $('#search-input').keyup(function() {
         var searchValue = $(this).val().toLowerCase();
         $('.search-item').each(function() {
            var residentName = $(this).find('td:nth-child(3)').text().toLowerCase();
            if (residentName.includes(searchValue)) {
               $(this).show();
            } else {
               $(this).hide();
            }
         });
      });
   });
</script>
<style>
    /* Add border to the table */
    .table-bordered {
        border: 30px solid #dee2e6;
    }

    #border th {
      border-collapse: collapse;
   text-align: center;
   padding: 15px;
   font-family: 'Open Sans', serif;
   font-size: 15px;
   color: black;
      }

      #border td {
    border-collapse: collapse;
    text-align: center;
    padding: 15px;
    font-family: 'Open Sans', serif;
    font-size: 15px;
    color: black; }

#border {
   border-collapse: collapse;
   padding: 15px;
}
    /* Add outline to the card */
    .card {
        border: 1px solid #ccc;
        
    }
    
</style>