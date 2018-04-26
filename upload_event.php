<?php

$title = $_POST["title"];
$details = $_POST["details"];
$dates = $_POST["dates"];


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

$sql = "INSERT INTO events (title, details, dates)
VALUES ('$title', '$details', '$dates')";

if ($conn->query($sql) === TRUE) {
    echo "Event uploaded successfully";
    Header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
