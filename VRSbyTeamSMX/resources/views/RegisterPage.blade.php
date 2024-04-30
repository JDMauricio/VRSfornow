<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asia Pacific College Check-In</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Center the content */
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
}

input,
select {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #0074d9;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Style the button that is used to open the dropdown menu */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: fixed; /* Changed from absolute to fixed for floating effect */
  left: 50%; /* Center the dropdown on the screen */
  top: 50%; /* Middle of the screen */
  transform: translate(-50%, -50%); /* Adjust the position to truly center it */
  background-color: #f6f6f6;
  min-width: 230px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 10;
}

/* Style when the dropdown content is shown */
.show {
  display: block;
}

/* Show the dropdown menu on click */
.show {display: block;}

/* Style the buttons inside the dropdown */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 16px;
  border: none;
  cursor: pointer;
}

.cancel-btn {
  background-color: #f44336;
}
</style>
<body>
    <div class="container">
        <h1>Visitor Check-In</h1>
        <form action="process_check_in.php" method="post">
            <label for="name">First Name:</label>
            <input type="text" id="firstname" name="name" required>

            <label for="name">Last Name:</label>
            <input type="text" id="lastname" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="purpose">Purpose of Visit:</label>

    <form>
        <label>Select purpose of visit:</label>
        <div class="dropdown">
        <button type="button" onclick="toggleDropdown()" class="dropbtn">Select</button>
        <div id="myDropdown" class="dropdown-content">
        <form id="checkboxForm" onsubmit="event.preventDefault();">
        <label><input type="checkbox" name="purpose" value="Pay Tuition"> Pay Tuition</label><br>
        <label><input type="checkbox" name="purpose" value="Apply/Retrieve Official Documents"> Apply/Retrieve Official Documents</label><br>
        <label><input type="checkbox" name="purpose" value="Enrollment"> Enrollment</label><br>
        <label><input type="checkbox" name="purpose" value="Purchase PE Uniform"> Purchase PE Uniform</label><br>
        <!-- Add more checkboxes as needed -->
        <button type="button" onclick="submitForm()" class="btn">Next</button>
        <button type="button" onclick="closeDropdown()" class="btn cancel-btn">Cancel</button>
    </form>
    </div>
</div>

<p id="selectedItems"></p>

    <button type="submit">Check In</button>
</form>

<div id="selectedOptions"></div>

    </div>
    <div id="selectedOptions"></div>

    <script>
// Function to toggle the dropdown content
function toggleDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if clicked outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// Function to handle form submission and display selected items
function submitForm() {
  var checkboxes = document.querySelectorAll('#checkboxForm input[type="checkbox"]:checked');
  var selected = Array.from(checkboxes).map(cb => cb.value);
  document.getElementById('selectedItems').textContent = 'Selected Items: ' + selected.join(', ');
  closeDropdown(); // Optional: close the dropdown after submission if desired
}

// Function to close the dropdown
function closeDropdown() {
  document.getElementById("myDropdown").classList.remove('show');
}

// Stop click inside dropdown from closing it
document.getElementById('myDropdown').onclick = function(event) {
  event.stopPropagation();
};

</script>


</body>
</html>
