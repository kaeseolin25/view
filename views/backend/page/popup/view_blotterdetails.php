<div class="container">
    <?php if ($resident_data !== null): ?>
        <h5>Resident ID: <?= $resident_data->resident_id ?></h5>
        <p>Full Name: <?= $resident_data->last_name ?>, <?= $resident_data->first_name ?> <?= $resident_data->middle_name ?></p>
        <p>Birth Date: <?= $resident_data->birth_date ?></p>
        <p>Sex: <?= $resident_data->sex ?></p>
        <p>Address: <?= $resident_data->street ?> <?= $resident_data->purok ?> <?= $resident_data->barangay ?></p>
        <p>Contact Number: <?= $resident_data->contact ?></p>
        <p>Religion: <?= $resident_data->religion ?></p>
        <p>Civil Status: <?= $resident_data->civil_status ?></p>
        <p>Nationality: <?= $resident_data->nationality ?></p>
    <?php else: ?>
        <p>Resident data not available</p>
    <?php endif; ?>
</div>

