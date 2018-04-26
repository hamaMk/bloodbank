<?php
    session_start();
    //$uid = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BloodBank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-grid.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-grid.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-reboot.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-reboot.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/bootstra.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <script src="js/script.js"></script>
   <script>
$(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();
});
</script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav ">
            <a style="margin-right:100px;" class="navbar-brand" href="#">BloodBank</a>
            <li class="nav-item active">
                <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
            </li>
            <li style="" class="nav-item">
                <a class="nav-link" href="#">Bank</a>
            </li>
            <li style="margin-right:620px;" class="nav-item">
                <a data-toggle="modal" data-target="#request" class="nav-link" href="#">Request</a>
            </li>
            <li  class="nav-item">
                <form action="signup.php" method="post">
                <button style="font-size:90%;" type="submit" class="btn btn-info btn-sm">Sign Up</button>
                </form>
            </li>
             <li style="color:white; margin-left:5px; margin-top:5px; margin-right:5px;" class="nav-item">
                <p> | </p>
            </li>
            <li class="nav-item">
                  <button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-info btn-sm">Log In</button>
            </li>
        </ul>
    </nav>

    <br>
    <br>

    <!-- The Modal -->
    <div class="modal fade" id="request">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Make a blood request</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="send_request.php" method="post">
  <div class="form-group">
    <label for="email">Organisation:</label>
    <input name="organisation" type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Blood type:</label>
    <input name="blood_type" type="text" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Quantity:</label>
    <input name="quantity" type="text" class="form-control" id="pwd">
  </div>
  <button style="float:right;" type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">

          </div>

        </div>
      </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Log In</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
              <form action="authenticate.php" method="post">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input name="password" type="password" class="form-control" id="pwd">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                  </label>
                </div>
                <br>
                <button style="float:right;" type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">

          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <h3>Upcoming events</h3>
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
              <div>
                <h5><?php echo $row["title"]; ?></h5>
                <p><?php echo $row["details"]; ?></p>
                <p style="margin-bottom:50px; font-size:80%;"><?php echo $row["dates"]; ?></p>
              </div>
            </body>
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


</body>
</html>
