<div class="container mt-4">
   <h1 class="mb-4 text-center font-weight-bold" style="font-size: 36px; color: #007BFF; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
      Barangay Officials
   </h1>
   <div class="row">
      <?php $captain_found = false; ?>
      <?php foreach ($brgyofficial_list as $brgyofficial) : ?>
         <?php if ($brgyofficial->position === 'Barangay Captain' && !$captain_found) : ?>
            <div class="col-md-12 mb-4">
               <div class="card shadow-sm captain-card">
                  <!-- Captain's card content here -->
                  <div class="official-image mx-auto">
                     <img src="<?= base_url($brgyofficial->image); ?>" alt="Barangay Captain" class="img-fluid rounded-circle border">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title text-white font-weight-bold">
                        <i class="fas fa-user fa-lg"></i>
                        <?= $brgyofficial->first_name ?> <?= $brgyofficial->last_name ?>
                     </h5>
                     <p class="card-text font-weight-bold">
                        <i class="fas fa-briefcase fa-lg"></i>
                        <?= $brgyofficial->position ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php $captain_found = true; ?>
         <?php else : ?>
            <div class="col-md-6 mb-4">
               <div class="card shadow-sm">
                  <!-- Other officials' card content here -->
                  <div class="official-image mx-auto">
                     <img src="<?= base_url($brgyofficial->image); ?>" alt="Barangay Official" class="img-fluid rounded-circle border">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title text-primary font-weight-bold">
                        <i class="fas fa-user fa-lg"></i>
                        <?= $brgyofficial->first_name ?> <?= $brgyofficial->last_name ?>
                     </h5>
                     <p class="card-text">
                        <i class="fas fa-briefcase fa-lg"></i>
                        <?= $brgyofficial->position ?>
                     </p>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      <?php endforeach; ?>
   </div>
</div>

<style>
   /* The same styles as before for official-image, .card, and .card:hover */
   .official-image {
      width: 160px;
      height: 160px;
      overflow: hidden;
      border-radius: 50%;
      margin: 0 auto;
      border: 5px solid #fff;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
   }

   .official-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .card {
      transition: transform 0.2s;
   }

   .card:hover {
      transform: translateY(-5px);
   }

   .text-primary {
      color: #007BFF;
   }

   /* Additional styles for the captain's card */
   .captain-card {
      /* Set custom styles here to make the card bigger and emphasize the captain */
      /* For example, you can set a larger width or height and add a background color */
      height: 450px;
      background-color: #007BFF;
      color: #fff;
      font-weight: bold;
      text-align: center;
      padding-top: 30px;
   }

   .captain-card .official-image {
      border: 5px solid #fff;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
   }
</style>
