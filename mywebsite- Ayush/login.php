<?php
$femail    =$_POST['emaill'];
$fpass     =$_POST['passl'];
$connection=mysqli_connect("localhost","root","","test");
$query     ="SELECT username,password FROM users WHERE username='$femail'";
$result    =mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $demail   =$row['username'];
        $dpassword=$row['password'];
        
        if(password_verify($fpass,$dpassword)) 
        {
            echo "WELCOME";
            session_start();
            $_SESSION['loggedInEmail']=$demail;
            header("Location:profile.php");
        }
        else echo "wrong credentials";
    }
}
mysqli_close($connection);
?>