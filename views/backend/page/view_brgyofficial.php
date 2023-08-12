<div class="container-fluid">
    <!-- Page Heading -->
   <br>
    <center>
        <h1 class="h3 mb-2" style="color: black; font-size: 24px; font-family: Verdana, sans-serif;">Barangay Officials</h1>
    </center>
    <p class="mb-4">
        <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-officials') ?>">
            <i class="fas fa-user-plus"></i> Add Officials
        </a>
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
                     <th scope="col">Position</th>
                     <th scope="col">Fullname</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Address</th>
                     <th scope="col">Start Term</th>
                     <th scope="col">End Term</th>
                     <th scope="col">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $counter = 1; ?>
                  <?php foreach ($brgyofficial_list as $brgyofficial) : ?>
                     <tr class="search-item">
                        <td><?= $counter ?></td>
                        <td style="text-align: center;"><img src="<?php echo base_url($brgyofficial->image); ?>" height="50px" width="50px" alt="Barangay Official Image"></td>
                        <td><?= $brgyofficial->position ?></td>
                        <td><?= $brgyofficial->first_name ?> <?= $brgyofficial->middle_name ?> <?= $brgyofficial->last_name ?></td>
                        <td><?= $brgyofficial->contact ?></td>
                        <td><?= $brgyofficial->purok ?> <?= $brgyofficial->barangay ?> <?= $brgyofficial->municipality ?> <?= $brgyofficial->province ?></td>
                        <td><?= $brgyofficial->start_term ?></td>
                        <td><?= $brgyofficial->end_term ?></td>
                     
                        <td>
                           <button type="button" class="btn btn-primary edit-brgyofficial-btn" data-brgyofficial="<?= $brgyofficial->brgyofficial_id ?>">
                              Edit
                           </button>
                           <button class="btn btn-danger delete-brgyofficial-btn" data-brgyofficial="<?= $brgyofficial->brgyofficial_id ?>">Delete</button>
                        </td>
                     </tr>
                     <?php $counter++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script>
   /* AJAX */
   $(document).on('click', '.edit-brgyofficial-btn', function() {
      var brgyofficialId = this.dataset.brgyofficial;

      $.ajax({
         url: '<?= base_url('index.php/dashboard/ajax-update-brgyofficial-form') ?>',
         method: 'POST',
         data: {
            brgyofficial_id: brgyofficialId
         },
         success: function(response) {
            bootbox.dialog({
               title: 'Edit Barangay Officials',
               message: ' ',
               size: 'extra-large'
            }).find('.bootbox-body').html(response);
         }
      });
   });

   $(document).on('click', '.delete-brgyofficial-btn', function(e) {
      var brgyofficialId = this.dataset.brgyofficial;

      bootbox.confirm('Are you sure you want to delete this official', function(answer) {
         if (answer == true) {
            window.location = '<?= base_url('index.php/dashboard/delete-brgyofficial/') ?>' + brgyofficialId;
         }
      });
   });

   $(document).ready(function() {
      // Search functionality
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