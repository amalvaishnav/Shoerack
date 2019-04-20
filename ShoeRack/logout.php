<?php
session_start();
unset($_SESSION['useremail']);
unset($_SESSION['loggedin']);
header("location:Login.php?logout");
?>