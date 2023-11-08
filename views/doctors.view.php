<?php require('partials/header.php')?>
<?php require('../process.cliniclist.php')?>


             <section class="list">
                <!-- Doctor listings and details -->
                <h1>List of Clinic Details</h1>
                <div class="clinic">
                    <?php foreach ($clinics as $clinic):?>
                    <a href="clinic-details.view.php" class="clinic-name"><?= $clinic['Name'] ?></a>
                    <p><strong>Address:</strong><?= $clinic['Address'] ?></p>
                    <p><strong>Phone:</strong> <?= $clinic['phone'] ?></p>
                    <p><strong>Email:</strong> <a href="mailto:<?= $clinic['email'] ?>"><?= $clinic['email'] ?></a></p>
                    <?php endforeach; ?>
                </div>
            
            
           
  
    <?php require('partials/footer.php')?>