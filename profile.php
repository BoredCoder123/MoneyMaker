<?php session_start();
if(isset($_SESSION['ema']))
    header("Location:profile1.php");
else header("Location:login.php");
?>