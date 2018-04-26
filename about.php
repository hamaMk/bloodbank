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
            <a style="margin-right:100px;" class="navbar-brand" href="#">BloodBank</a>
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
                <button style="font-size:90%;" type="submit" class="btn btn-primary btn-sm">Sign Up</button>
            </li>
             <li style="color:white; margin-left:5px; margin-top:5px; margin-right:5px;" class="nav-item">
                <p> | </p>
            </li>
            <li class="nav-item">
                <form action="login.php" method="post">
                    <button type="submit" class="btn btn-primary btn-sm">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>
    
    <br>
    <br>

    <div class="container">
       

    </div>


</body>
</html>