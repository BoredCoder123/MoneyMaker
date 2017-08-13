<?php
session_start();
$c=mysqli_connect("localhost","root","root","project");
$i=$_SESSION['id'];
$q="SELECT * FROM expenses where id=$i";
$r=mysqli_query($c,$q);
$res=mysqli_fetch_assoc($r);
$t=$res['total_amount']+$_POST['add'];
$q="UPDATE expenses SET total_amount=$t where id=$i";
mysqli_query($c,$q);
header("Location:profile1.php");
mysqli_close($c);
?>