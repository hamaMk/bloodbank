<?php
    session_start();
    $uid = $_SESSION["user_id"];
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
            <a style="margin-right:100px;" class="navbar-brand" href="index.php">BloodBank</a>
            <li class="nav-item active">
                <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
            </li>
            <li style="" class="nav-item">
                <a class="nav-link" href="#">Bank</a>
            </li>
            <li style="margin-right:660px;" class="nav-item">
                <a data-toggle="modal" data-target="#request" class="nav-link" href="#">Request</a>
            </li>
         
            </li>
            <li class="nav-item">
            <a href="logout.php"><button type="button" class="btn btn-info btn-sm">Logout</button></a>
            </li>
        </ul>
    </nav>

  <br>
  <div class="container">

      <h3>Profile</h3>
      <hr>
      <br>

    <button style="margin-top:0px; float:right" type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#update">Update</button>

       <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "bloodbank";

                      $fname = null;

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }

                      $sql = "SELECT  name, surname, blood_type, age, sex, email FROM donors WHERE id=$uid";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                              ?><html>
                                  <head>

                                  </head>
                                  <body>
                                    <div>

                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">First name:</h6>
                                          </div>
                                          <div class="col-2">
                                              <?php $fname = $row["name"]; ?>
                                          <label ><?php echo $fname ?></label>
                                          </div>
                                          <div class="col-1">
                                          
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">Last name:</h6>
                                          </div>
                                          <div class="col-2">
                                          <label ><?php echo $row["surname"]; ?></label>
                                          </div>
                                          <div class="col-1">
                                         </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">Blood type:</h6>
                                          </div>
                                          <div class="col-2">
                                          <label ><?php echo $row["blood_type"]; ?></label>
                                          </div>
                                          <div class="col-1">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">Age:</h6>
                                          </div>
                                          <div class="col-2">
                                          <label ><?php echo $row["age"]; ?></label>
                                          </div>
                                          <div class="col-1">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">Sex:</h6>
                                          </div>
                                          <div class="col-2">
                                          <label ><?php echo $row["sex"]; ?></label>
                                          </div>
                                          <div class="col-1">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-2">
                                          <h6 style="margin-right:12px;">Email:</h6>
                                          </div>
                                          <div class="col-2">
                                          <label ><?php echo $row["email"]; ?></label>
                                          </div>
                                          <div class="col-1">
                                          </div>
                                        </div>
                                        
                                      
                                    </div>
                                  </body>
                              </html><?php

                          }
                      } else {
                        ?><html>
                            <head>
                              <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
                            </head>
                            <body>
                              <div class="alert alert-info">
                                  <strong>No Donors found!</strong> Please keep checking.
                              </div>
                            </body>
                        </html><?php
                      }
                      $conn->close();
                      ?>

  </div>

  </body>

  <!-- The Modal -->
<div class="modal fade" id="update">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="update_profile.php" method="post">
  <div class="form-group">
    <label for="email">Select field to modify</label>
    <select name="field" placeholder="Select field to modify" class="form-control" id="sel1">
        <option>First name</option>
        <option>Last name</option>
        <option>Blood type</option>
        <option>Age</option>
        <option>Sex</option>
        <option>Email</option>
    </select>
    <br>
    <label for="email">Select field to modify</label>
    <input name="newval" placeholder="insert new value" type="text" class="form-control" id="email">
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

<?php
    include_once('tail.php');
?>
