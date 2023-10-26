<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>

<?php require('partials/banner.php')?>

<section id="doctors">
        <h2>Doctors</h2>
        <div class="doctor">
            <img src="images/albert-dera-ILip77SbmOE-unsplash.jpg" alt="Dr. John Smith">
            <h3>Dr. John Smith</h3>
            <p>Cardiologist</p>
            <p>Dr. John Smith graduated from Alberta Medical college in the year 2004. And has specialised in Cardiology from the same college. His unique number 456321 </p>
            <div class="button-container">
                <a href="appointments.html" class="btn">Book Appointment</a>   
              </div>
        </div>
        <div class="doctor">
            <img src="images/istockphoto-1346697131-1024x1024.jpg" alt="Dr. Lisa Johnson">
            <h3>Dr. Lisa Johnson</h3>
            <p>Dermatologist</p>
            <p>Dr.Lisa Johnson graduated from Alberta Medical college in the year 2006. And has specialised in Dermatology from the same college. His unique number 789562 </p>
            <div class="button-container">
                <a href="appointments.html" class="btn">Book Appointment</a>   
              </div>
        </div>
        <!-- Add more doctor details here -->
    </section>

    <section id="treatments">
        <h2>Treatments</h2>
        <ul>
            <li>Cardiology</li>
            <li>Dermatology</li>
            <!-- Add more treatments -->
        </ul>
    </section>

    <section id="location">
        <h2>Location</h2>
        <address>
            <p>123 Medical Lane</p>
            <p>City, State ZIP</p>
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.67890!2d-74.000000!3d40.000000!4sMap+Location!5e0!3m2!1sen!2us!4v0000000000000!5m2!1sen!2us" frameborder="0" allowfullscreen></iframe>
    </section>
    <?php require('partials/footer.php')?>