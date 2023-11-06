<?php require('partials/header.php')?>


        <section class="booking">
            <!-- List of appointments and booking form -->
            <h1>Appointment Scheduling</h1>
    <form id="appointment-form">
        <label for="appointment-date">Select a Date:</label>
        <input type="date" id="appointment-date" name="appointment-date" required>
<br>
        <label for="appointment-time">Select a Time:</label>
        <select id="appointment-time" name="appointment-time" required>
            <option value="9:00 AM">9:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="4:00 PM">4:00 PM</option>
        </select></br>

      <br>  <button type="submit">Schedule Appointment</button>
    </form>
        
            <div id="confirmation">
                <h2>Appointment Scheduled</h2>
                <p>Date: <span id="selected-date"></span></p>
                <p>Time: <span id="selected-time"></span></p>
            </div>
</br>
        </section>
        <script>
            // Get references to the form elements and confirmation fields
            const appointmentForm = document.getElementById("appointment-form");
            const selectedDate = document.getElementById("selected-date");
            const selectedTime = document.getElementById("selected-time");
        
            // Add an event listener to the form to capture user selections
            appointmentForm.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the form from submitting
        
                // Get the selected date and time from the form
                const dateInput = document.getElementById("appointment-date");
                const timeInput = document.getElementById("appointment-time");
        
                // Update the confirmation fields with the selected date and time
                selectedDate.textContent = dateInput.value;
                selectedTime.textContent = timeInput.value;
        
                // You can add additional logic here to handle the appointment scheduling.
            });
        </script>
        


    <?php require('partials/footer.php')?>