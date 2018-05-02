<?php
session_start();
$uid = $_SESSION["user_id"];
$data = $_POST["newval"];
$field = $_POST["field"];

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

$sql = "UPDATE donors SET $field ='$data' WHERE id=$uid";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    Header("Location: profile.php");
} else {
    ?>

    <html>
        <head>
          <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
        </head>
        <body>
          <div class="alert alert-danger">
              <strong>Error!</strong> Something wen wrong, please check your fields.
          </div>
        </body>
    </html>

  <?php

}

$conn->close();
?>