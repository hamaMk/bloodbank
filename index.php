<?php
    include_once('head.php');
?>

    <div style="padding:10px; background-color:#;" class="container">

      <h3>Upcoming events</h3>
      <div style="margin-top:-35px; float:right;">
        <input placeholder="Search" style="padding-left:5px; background-color:#EDEDED; border:none;" type="search" name="srch" id="">
        <input style="padding-top:0px; padding-bottom:0px; margin-top:-5px" class="btn btn-outline-info" type="button" value="Go">
      </div>
      
      <hr>
      <br>

        <?php
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

$sql = "SELECT title, details, dates FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";?>

        <html>
            <head>

            </head>
            <body>
              <div style="background-color:#; width:35%; padding-left:10px; padding-top:10px; padding-bottom:5px;">
                <h5><?php echo $row["title"]; ?></h5>
                <p><?php echo $row["details"]; ?></p>
                <i><p style="margin-top:-15px; font-size:80%;"><?php echo $row["dates"]; ?></p></i>
              </div>
            </body>
            <br>
        </html>

  <?php  }
} else {?>

  <html>
      <head>
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
      </head>
      <body>
        <div class="alert alert-info">
            <strong>No Upcoming events!</strong> Please keep checking.
        </div>
      </body>
  </html>

<?php }
$conn->close();
?>


    </div>

<?php
    include_once('tail.php');
?>
