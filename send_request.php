<?php

$organisation = $_POST["organisation"];
$blood_type = $_POST["blood_type"];
$quantity = $_POST["quantity"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO requests (organisation, blood_type, quantity)
VALUES ('$organisation', '$blood_type', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Request sent successfully";
    Header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
