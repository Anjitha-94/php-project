<?php require('partials/header.php')?>
<?php require('../process.clinicdetails.php')?>

<section id="doctors">
        <h2>Doctors</h2>
        
        
        <?php foreach ($doctors as $doctor): ?> 
        <div class="doctor">
       
            <h3><?= $doctor['Name'] ?></h3>
            <p><?=$doctor['Specialisation'] ?></p>
            <p><?= $doctor['Details'] ?> </p>
            <div class="button-container">
                <a href="appointments.view.php" class="btn">Book Appointment</a>   
              </div>
        </div>
        <?php endforeach; ?>
       </section>

    <section id="treatments">
        <h2>Treatments</h2>
        <ul>
        <?php foreach ($treatments as $treatment): ?>
            <li><?= $treatment['name'] ?></li>
            <?php endforeach; ?>
            <!-- Add more treatments -->
        </ul>
    </section>

      
            <div class="button-container">
                <a href="doctors.view.php" class="btn">Back</a>   
              </div>
              
           
   
   
   
    <?php require('partials/footer.php')?>