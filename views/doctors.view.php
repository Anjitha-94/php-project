<?php require('partials/header.php')?>


             <section class="list">
                <!-- Doctor listings and details -->
                <h1>List of Clinic Details</h1>
                <div class="clinic">
                    <?php foreach ($clinics as $clinic):?>
                    <a href="clinic-details.view.php" class="clinic-name">Clinic 1</a>
                    <p><strong>Address:</strong> 123 Main St, Courtenay, BC ZIP</p>
                    <p><strong>Phone:</strong> (555) 123-4567</p>
                    <p><strong>Email:</strong> <a href="mailto:clinic1@example.com">clinic1@example.com</a></p>
                    <?php endforeach; ?>
                </div>
            
                <div class="clinic">
                <?php foreach ($clinics as $clinic):?>
                    <a href="clinic-details.view.php" class="clinic-name">Clinic 2</a>
                    <p><strong>Address:</strong> 456 Elm St, Comox, BC ZIP</p>
                    <p><strong>Phone:</strong> (555) 987-6543</p>
                    <p><strong>Email:</strong> <a href="mailto:clinic2@example.com">clinic2@example.com</a></p>
                    <?php endforeach; ?>
                </div>
                <div class="clinic">
                <?php foreach ($clinics as $clinic):?>
                    <a href="clinic-details.view.php" class="clinic-name">Clinic 3</a>
                    <p><strong>Address:</strong> 145 Main St, Courtenay, BC ZIP</p>
                    <p><strong>Phone:</strong> (555) 123-4789</p>
                    <p><strong>Email:</strong> <a href="mailto:clinic1@example.com">clinic1@example.com</a></p>
                    <?php endforeach; ?>
                </div>
                <div class="clinic">
                <?php foreach ($clinics as $clinic):?>
                    <a href="clinic-details.view.php" class="clinic-name">Clinic 4</a>
                    <p><strong>Address:</strong> 789 Main St, Comox, BC ZIP</p>
                    <p><strong>Phone:</strong> (555) 189-4521</p>
                    <p><strong>Email:</strong> <a href="mailto:clinic1@example.com">clinic1@example.com</a></p>
                    <?php endforeach; ?>
                </div>
            </section>
            <div class="button-container">
                <a href="index.view.php" class="btn">Back</a>   
              </div>
              
           
    
                <!-- Add more clinics as needed -->
           
  
    <?php require('partials/footer.php')?>