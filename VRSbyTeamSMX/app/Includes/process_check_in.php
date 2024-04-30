<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "VisitorData";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$first_name = $_POST['firstname'];
//$last_name = $_POST['lastname'];
//$phone_number = $_POST['phone'];
//$purpose = $_POST['purpose'];

$sql = "INSERT INTO Visitor_Information (Visitor_ID, Phone_Num, First_Name, Last_Name, Vis_Rgstrd, OTP, Staff_ID, VisitingStatus_ID, Purpose) VALUES ('12234578', '0987654328', 'Doe', 'John', '1234566', '123456', '1234567', '12345678', 'wtf')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>