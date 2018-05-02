<?php
    session_start();
    $_SESSION["user_id"] = null;
    Header("Location:index.php");

?>