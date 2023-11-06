<?php require('partials/header.php')?>

  

      <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- Content of the popup, e.g., login form -->
            <p>You are now log in to the website for 15 minutes</p>
        </div>
    </div>
        <section class="form" id="contact">
            <h2>Welcome to our Doctor Booking System</h2>
            <p>Find the right doctor and book an appointment today.</p>
           <!-- Form  -->
                    
       <form action="process.php" method="post" id="contactForm" class="contactForm">
        
        <div>
          <label for="fullName">Your Name:</label>
          <input type="text" name="fullName" id="fullName" required>
        </div>
      
        <div>
          <label for="phone">Phone:</label>
          <input type="tel" name="phone" id="phone" maxlength="12" placeholder="111-222-3333" required>
        </div>
      
        <div>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
     </div>   
     <button type="button" id="login-button" class="btn">Login</button>

<!-- Login Success Popup (Hidden by default) -->
<script>
  // Get the modal, close button, and login button
var modal = document.getElementById("myModal");
var closeBtn = modal.querySelector(".close");
var loginButton = document.getElementById("login-button"); // Replace with the actual ID of your login button

// Function to display the modal
function displayModal() {
  
    modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
}

// Event listeners
loginButton.addEventListener("click", displayModal);
closeBtn.addEventListener("click", closeModal);

// You can also add an event listener to close the modal when the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        closeModal();
    }
});

</script>


        <div class="search-container">
        <button id="search-specialty" class="search-button">Search by Specialty</button>
            <select id="specialty" name="specialty">
              <option value="cardiologist">Cardiologist</option>
              <option value="dermatologist">Dermatologist</option>
              <option value="orthopedic">Orthopedic</option>
              <!-- Add more specialty options -->
            </select>
            <button id="search-location" class="search-button">Search by Location</button>
            <select id="location" name="location">
              <option value="courtenay">Courtenay</option>
              <option value="comox">Comox</option>
              <option value="campbell river">Campbell River</option>
              <!-- Add more location options -->
            </select>
          
            
           
          </div>
        </form>
          
        
            <div class="button-container">
                <a href="views/doctors.view.php" class="btn">Serach Doctor</a>   
              </div>
              
           
       
 


  <?php require('partials/footer.php')?>
