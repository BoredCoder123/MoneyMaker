<?php
$conn=mysqli_connect("localhost","root","","test");
$query="SELECT id,password FROM users ";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
    $hashed=password_hash($row['password'],PASSWORD_DEFAULT);
    echo "$hashed<br>";
    $id=$row['id'];
    mysqli_query($conn,"UPDATE users SET password='$hashed' WHERE users.id='$id'");
}
?>