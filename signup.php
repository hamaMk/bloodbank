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
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <script src="main.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav ">
            <a style="margin-right:100px;" class="navbar-brand" href="index.php">BloodBank</a>
            <li class="nav-item active">
                <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
            </li>
            <li style="margin-right:690px;" class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li  class="nav-item">
                <button style="font-size:90%;" type="submit" class="btn btn-primary btn-sm">Log In</button>
            </li>

        </ul>
    </nav>

    <br>
    <br>

    <div class="container">

       <div class="jumbotron">
            <h3 style="color:#2F4F4F;">Sign Up</h3>
            <hr>
            <br>

            <form action="upload_donor.php" method="post">
                <div class="form-group">
                    <label for="email">First name:</label>
                    <input name="name" type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Last name:</label>
                    <input name="surname" type="text" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Password:</label>
                    <input name="password" type="password" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Age:</label>
                    <input name="age" type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Sex:</label>
                    <select name="sex" type="text" class="form-control" id="sel1">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Blood type:</label>
                    <input name="blood_type" type="text" class="form-control" id="email">
                </div>
                <button style="float:right; " type="submit" class="btn btn-primary btn-sm wd-25">Submit</button>
            </form>
       </div>

    </div>


</body>
</html>
