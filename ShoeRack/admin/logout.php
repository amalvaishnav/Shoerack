<?php
session_start();
unset($_SESSION['useremail']);
unset($_SESSION['loggedin']);
header("location:admin.php?logout");
?>