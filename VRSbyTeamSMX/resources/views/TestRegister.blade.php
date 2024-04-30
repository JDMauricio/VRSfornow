<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asia Pacific College Check-In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Visitor Check-In</h1>
        <form action="process_check_in.php" method="post" id="checkInForm">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <div class="dropdown">
                <button type="button" onclick="toggleDropdown()" class="dropbtn">Select</button>
                <div id="myDropdown" class="dropdown-content">
                    <label><input type="checkbox" name="purpose[]" value="Pay Tuition"> Pay Tuition</label><br>
                    <label><input type="checkbox" name="purpose[]" value="Apply/Retrieve Official Documents"> Apply/Retrieve Official Documents</label><br>
                    <label><input type="checkbox" name="purpose[]" value="Enrollment"> Enrollment</label><br>
                    <label><input type="checkbox" name="purpose[]" value="Purchase PE Uniform"> Purchase PE Uniform</label><br>
                    <!-- Add more checkboxes as needed -->
                </div>
            </div>
            <button type="submit" class="btn">Check In</button>
        </form>
    </div>

    <script>
        function toggleDropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

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

        // Handle form submission to include checkbox values in the POST data
        document.getElementById('checkInForm').onsubmit = function() {
            var checkboxes = document.querySelectorAll('#myDropdown input[type="checkbox"]:checked');
            var selected = Array.from(checkboxes).map(cb => cb.value);
            document.getElementById('selectedItems').textContent = 'Selected Items: ' + selected.join(', ');
        };

        document.getElementById('myDropdown').onclick = function(event) {
            event.stopPropagation();
        };
    </script>

</body>
</html>
