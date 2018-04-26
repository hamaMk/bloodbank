<?php
    session_start();

    $mail = $_POST["email"];
    $pwd = $_POST["password"];

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

$sql = "SELECT email, password FROM donors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        if($row["email"] == $mail && $row["password"] == $pwd){
            echo $row["email"];
            Header("Location:profile.php");
        }
    }
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

?>
