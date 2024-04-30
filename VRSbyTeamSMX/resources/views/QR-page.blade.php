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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f0f0f0;
}

/* Style the QR code */
.qr-code img {
    max-width: 100%;
    height: auto;
}

/* Style the welcome text */
.welcome-text {
    text-align: center;
    margin-top: 20px;
}

/* Style the buttons */
.options {
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #0074d9;
    color: #fff;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container">
        <div class="qr-code">
            <!-- Replace with your QR code image -->
            <img src="qr-code.png" alt="QR Code">
        </div>
        <div class="welcome-text">
            <h1>Welcome to Asia Pacific College</h1>
            <p>Scan the QR code for mobile check in</p>
        </div>
        <div class="options">
           <!-- <button onclick="redirectToCheckInPage()">GET STARTED</button> -->
            <!-- resources/views/your-view.blade.php -->
            <button type="button" onclick="window.location='{{ url('/register') }}'">GET STARTED</button>
            <button class="check-out">PREVIOUS USER</button>
        </div>
    </div>
    
    <script>
        function redirectToRegisterPage() {
            // Replace 'check-in.html' with the actual URL of your check-in page
            window.location.href = 'RegisterPage.blade.php';
        }
    </script>
</body>
</html>


