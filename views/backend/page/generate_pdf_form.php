<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Barangay Clearance</title>
   <style>
      /* Add your CSS styling here */
      body {
         font-family: Arial, sans-serif;
         margin: 0; /* Remove default body margin */
      }
      .header {
         text-align: center;
         margin-bottom: 20px;
         padding: 20px 0; /* Add padding for spacing */
      }
      .logo {
         width: 100px;
         height: 100px;
      }
      .content {
         margin: 20px;
      }
      /* ... Add more styling as needed ... */
      .bold {
         font-weight: bold;
      }
      .header-line {
         border-top: 2px solid #000;
         margin: 10px 0;
      }
      .header-text {
         margin: 0;
         text-align: center;
         text-transform: uppercase; /* Converts text to uppercase */
      }
   </style>
</head>
<body>
<div class="header">
<img src="<?= $logo_image ?>" alt="Logo">
   <div>
      <p class="header-text">Republic of the Philippines</p>
      <p class="header-text">Region VII</p>
      <p class="header-text">Province of <?= $brgysettings_data->province ?></p>
      <p class="header-text">Municipality of <?= $brgysettings_data->municipality ?></p>
   </div>
</div>
   <p class="bold" style="text-align: center;">Barangay <?= $brgysettings_data->barangay ?></p>
   <hr class="header-line">
   <h2 style="text-align: center;">Barangay Clearance</h2>

   <div class="content">

      <p>TO WHOM IT MAY CONCERN:</p>

      <p>This is to certify that <span class="bold"><?= $brgyclearance_data->applicant_name ?></span>, <span class="bold"><?= $brgyclearance_data->age ?> years old</span>, <span class="bold"><?= $brgyclearance_data->sex ?></span>, <span class="bold"><?= $brgyclearance_data->civil_status ?></span>, with residence and postal address at Barangay <span class="bold"><?= $brgysettings_data->barangay ?></span>, <span class="bold"><?= $brgysettings_data->municipality ?></span>, <span class="bold"><?= $brgysettings_data->province ?></span>, 
      has no derogatory record filed in our Barangay Office.</p>

      <p>The above-mentioned individual, who is a bonafide resident of this barangay, is a person of good character, peace-loving, and civic-minded citizen. </p>

      <p>This certification/clearance is hereby issued in connection with the subject's application for the purpose of <span class="bold"><?= $brgyclearance_data->purpose ?></span> 
      and for whatever legal purpose it may serve for his/her best interests. The clearance is valid for six (6) months from the date issued.

      <p>Given this <span class="bold"><?= date('jS \d\a\y \o\f F, Y') ?></span>, in Barangay <span class="bold"><?= $brgysettings_data->barangay ?></span>,
   <span class="bold"><?= $brgysettings_data->municipality ?></span>, <span class="bold"><?= $brgysettings_data->province ?></span>, Philippines.</p>

<br>
<br>
<br>
   <div style="text-align: center;">
    <span class="bold" style="display: block;"><?= strtoupper($barangayCaptainFullName) ?></span>
    <p style="margin: 0;">Barangay Chairman</p>
</div>


</div>


      <hr>

      <p style="text-align: left;">Control Number: ___________________</p>
      <p style="text-align: left;">Date Processed: ___________________</p>
      <p style="text-align: left;">Processed By:   ___________________</p>
   </div>
</body>
</html>
