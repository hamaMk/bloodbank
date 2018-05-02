<?php
    session_start();
    $_SESSION["user_id"] = null;

    $mail = $_POST["email"];
    $pwd = $_POST["password"];
    $success = false;

    if($mail == "root@admin.com" && $pwd == "toor"){
      Header("Location:admin/");
    }

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

$sql = "SELECT id, email, password FROM donors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      
        if($row["email"] == $mail && $row["password"] == $pwd){
            //$success  = true;
            $_SESSION["user_id"] = $row["id"];
            Header("Location:profile.php?signup=empty");
        }
    }

    ?>

    <html>
        <head>
          <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
        </head>
        <body>
          <div class="alert alert-danger">
              <strong>Error!</strong> Email or password incorrect.
          </div>
        </body>
    </html>

  <?php

} else { 
  ?>

    <html>
        <head>
          <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
        </head>
        <body>
          <div class="alert alert-danger">
              <strong>Error!</strong> Email or password incorrect.
          </div>
        </body>
    </html>

  <?php
}
$conn->close();


echo $success;

?>
