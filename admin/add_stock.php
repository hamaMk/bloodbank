<?php

$type = $_POST["type"];
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

$sql = "INSERT INTO bank (type, quantity)
VALUES ('$type', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Event uploaded successfully";
    Header("Location:blood_stock.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
