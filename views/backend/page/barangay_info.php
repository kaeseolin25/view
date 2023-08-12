<!DOCTYPE html>
<html>
<head>
    <title>Barangay Information</title>
    <!-- Include necessary CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            text-align: center;
            margin: 50px auto;
        }
        
        .image-container {
            display: inline-block;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 50%;
            border: 3px solid #3498db;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .barangay-details {
            margin-top: 20px;
            text-align: left;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .barangay-details h2 {
            color: #3498db;
        }
        
        .barangay-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="<?= base_url($brgysettings_data->image) ?>" alt="Barangay Logo">
        </div>
        <div class="barangay-details">
            <h2>Barangay Information</h2>
            <?php if ($brgysettings_data): ?>
                <p><strong>Barangay:</strong> <?= $brgysettings_data->barangay ?></p>
                <p><strong>Municipality:</strong> <?= $brgysettings_data->municipality ?></p>
                <p><strong>Province:</strong> <?= $brgysettings_data->province ?></p>
                <p><strong>Region:</strong> <?= $brgysettings_data->region ?></p>
            <?php else: ?>
                <p>No barangay settings data available.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
