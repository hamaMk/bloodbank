<?php

$fname = $_POST["name"];
$lname = $_POST["surname"];
$email = $_POST["email"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$bloodtype = $_POST["blood_type"];
$password = $_POST["password"];

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

$sql = "INSERT INTO donors (name, surname, blood_type, age, sex, email, password)
VALUES ('$fname', '$lname', '$bloodtype', $age, '$sex', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
