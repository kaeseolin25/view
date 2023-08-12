<!DOCTYPE html>
<html>
<head>
    <title>Edit Barangay Information</title>
    <!-- Include necessary CSS -->
</head>
<body>
    <h1>Edit Barangay Information</h1>
    
    <form action="<?= base_url('index.php/dashboard/barangay-settings') ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Barangay Information</legend>
            
            <label for="barangay_name">Barangay Name:</label>
            <input type="text" name="barangay" required>
        </fieldset>
        
        <fieldset>
            <legend>Municipality Information</legend>
            
            <label for="municipality_name">Municipality Name:</label>
            <input type="text" name="municipality" required>
            
            <label for="municipality_province">Province:</label>
            <input type="text" name="province" required>
            
            <label for="municipality_region">Region:</label>
            <input type="text" name="region" required>
        </fieldset>
        
        <fieldset>
            <legend>Upload Logo</legend>
            
            <div class="form-group">
                <label for="image">Barangay Logo:</label>
                <input type="file" name="image" id="image" accept="image/*" required />
            </div>
        </fieldset>
        
        <?php if(isset($_SESSION['success'])): ?>
            <div style="color:green;"><?= $_SESSION['success'] ?></div>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div style="color:red;"><?= $_SESSION['error'] ?></div>
        <?php endif; ?>

        <button type="submit">Add Information</button>
        <button type="button" class="btn btn-primary edit-brgysettings-btn" data-brgysettings="<?= $brgysettings->brgysettings_id ?>">
                              Edit
                           </button>
    </form>
    