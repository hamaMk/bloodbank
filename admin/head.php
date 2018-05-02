<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BloodBank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-grid.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-grid.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-reboot.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-reboot.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstra.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />

   <script src="../js/bootstrap.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/bootstrap.bundle.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <script src="../js/script.js"></script>
   <script>
$(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav ">
            <a style="margin-right:100px;" class="navbar-brand" href="../index.php">BloodBank</a>
            <li class="nav-item active">
                <a class="nav-link " href="#">Donors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
            </li>
            <li style="" class="nav-item">
                <a class="nav-link" href="#">Bank</a>
            </li>
            <li style="margin-right:620px;" class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
               
                    <a href="../logout.php"><button type="submit" class="btn btn-info btn-sm">Log Out</button></a>
         
            </li>
        </ul>
    </nav>

    <!-- The Modal -->
<div class="modal fade" id="add_stock">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add blood</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="add_stock.php" method="post">
  <div class="form-group">
    
    <input name="type" placeholder="Blood type" type="text" class="form-control" id="email">
    <br>
    
    <input name="quantity" placeholder="Quantity" type="text" class="form-control" id="email">
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

    <div class="modal fade" id="add_event">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add event</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="../upload_event.php" method="post">
  <div class="form-group">
    <label for="email">Title:</label>
    <input name="title" type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Details:</label>
    <input name="details" type="text" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Date:</label>
    <input name="dates" type="text" class="form-control" id="pwd">
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

    <div class="">

        <div class="row">
            <div style="overflow-x: hidden; z-index: 1; height:; position: fixed; width: 375px" class="">
                <div style=" padding-bottom:200px; padding-right:0px;" class="jumbotron">
                    <ul class="nav flex-column">
                        <form style="margin-right:40px;" class="form-inline " action="search_results.php" method="post">
                            <input name="type" style="margin-right:20px;" class="form-control mr-sm-2 " type="text" placeholder="Search">
                            <button class="btn btn-success w-10" type="submit">Search</button>
                        </form>
                        <hr>
                        <br>
                        <li style="margin-right:20px;">
                            <button data-toggle="modal" data-target="#add_event" type="button" class="btn btn-outline-info btn-block btn-sm">Add event</button>
                        </li>
                        <br>
                        <li style="margin-right:20px;">
                            <button data-toggle="modal" data-target="#add_stock" type="button" class="btn btn-outline-info btn-block btn-sm">Add-to blood stock</button>
                        </li>
                        <br>
                        <li style="margin-right:20px;">
                            <a href="index.php"><button type="button" class="btn btn-outline-info btn-block btn-sm">View donors</button></a>
                        </li>
                        <br>
                        <li style="margin-right:20px;">
                            <a href="blood_stock.php"><button type="button" class="btn btn-outline-info btn-block btn-sm">View blood stock</button></a>
                        </li>
                        <br>
                        <li style="margin-right:20px;">
                            <a href="blood_requests.php"><button type="button" class="btn btn-outline-info btn-block btn-sm">Blood requests</button></a>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
            <div style="margin-left: 370px; margin-top: 20px;" class="col">