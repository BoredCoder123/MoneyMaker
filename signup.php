<?php

$f=$_POST['f_name'];
$l=$_POST['l_name'];
$e=$_POST['email'];
$p=$_POST['password'];
$pass=password_hash("$p",PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","root","project");
$query="SELECT email FROM users where email='$e'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{
    header("Location:alreadyexists.php");
}
else{
    $q="INSERT into users (fname,lname,email,password) VALUES ('$f','$l','$e','$pass')";
    $r=mysqli_query($connection,$q);
    $qu="SELECT * from users WHERE email='$e'";
    $res=mysqli_query($connection,$qu);
    if(!$res)
    {
        echo mysqli_error($connection);
    }
    $row=mysqli_fetch_assoc($res);
    $i=$row['id'];
    $o=0;
    $qe="INSERT into expenses (id,total_amount,fuel,food,clothing,cosmetics,stationary,bills,repair_work,laundary,other) VALUES ('$i','$o','$o','$o','$o','$o','$o','$o','$o','$o','$o')";
    $rw=mysqli_query($connection,$qe);
    if(!$rw)
    {
        echo mysqli_error($connection);
    }
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['fna']=$row['fname'];
    $_SESSION['lna']=$row['lname'];
    $_SESSION['ema']=$row['email'];
    echo $_SESSION['fna'];
    echo $_SESSION['lna'];
    header("Location:profile.php");
}
mysqli_close($connection);
?>