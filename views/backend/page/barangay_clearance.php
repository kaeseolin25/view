<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Barangay Clearance Application</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f8f8f8;
      }
      h2 {
         color: #333;
         text-align: center;
         margin-bottom: 20px;
      }
      form {
         background-color: #fff;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         width: 80%;
         margin: 0 auto;
      }
      label {
         display: block;
         margin-bottom: 5px;
         font-weight: bold;
      }
      input[type="text"],
      input[type="number"],
      input[type="date"] {
         width: 100%;
         padding: 10px;
         margin-bottom: 15px;
         border: 1px solid #ccc;
         border-radius: 3px;
         transition: border-color 0.2s;
      }
      input[type="text"]:focus,
      input[type="number"]:focus,
      input[type="date"]:focus {
         border-color: #3498db;
      }
      button[type="submit"] {
         background-color: #3498db;
         color: #fff;
         border: none;
         padding: 10px 20px;
         border-radius: 3px;
         cursor: pointer;
      }
      button[type="submit"]:hover {
         background-color: #2980b9;
      }
   </style>
</head>
<body>
   <h2>Barangay Clearance Application</h2>
   <form action="<?= base_url('index.php/dashboard/barangay-clearance') ?>" method="POST" id="clearance_form">
      <label for="applicant_name">Name of Applicant:</label>
      <input type="text" id="applicant_name" name="applicant_name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="sex">Sex:</label>
      <select name="sex" id="sex" class="form-control" required>
            <option value="">Select Action</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
      </select>

      <label for="address">Civil Status:</label>
      <select name="civil_status" id="civil_status" class="form-control" required>
            <option value="">Select Action</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="separated">Separated</option>
            <option value="widowed">Widowed</option>
      </select>

      <label for="purpose">Purpose of Clearance:</label>
      <input type="text" id="purpose" name="purpose" required>

      <label for="date"> Date:</label>
      <input type="date" id="date" name="date" required>

      <button type="submit">Generate</button>
   </form>
</body>
</html>
