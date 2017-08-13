<?php
session_start();
$c=mysqli_connect("localhost","root","root","project");
$i=$_SESSION['id'];
$a=$_POST['deduct'];
$q="SELECT * FROM expenses WHERE id=$i";
$r=mysqli_query($c,$q);
$res=mysqli_fetch_assoc($r);
$z=$_POST['radio'];
$t=$res['total_amount']-$a;
$q="UPDATE expenses SET total_amount=$t where id=$i";
mysqli_query($c,$q);
if($z=='fuel'){
    $t=$res['fuel']+$a;
    $q="UPDATE expenses SET fuel=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='food'){
    $t=$res['food']+$a;
    $q="UPDATE expenses SET food=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='clot'){
    $t=$res['clothing']+$a;
    $q="UPDATE expenses SET clothing=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='cosm'){
    $t=$res['cosmetics']+$a;
    $q="UPDATE expenses SET cosmetics=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='stat'){
    $t=$res['stationary']+$a;
    $q="UPDATE expenses SET stationary=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='bill'){
    $t=$res['bills']+$a;
    $q="UPDATE expenses SET bills=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='repa'){
    $t=$res['repair_work']+$a;
    $q="UPDATE expenses SET repair_work=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='laun'){
    $t=$res['laundary']+$a;
    $q="UPDATE expenses SET laundary=$t where id=$i";
    mysqli_query($c,$q);
}
else if($z=='othe'){
    $t=$res['other']+$a;
    $q="UPDATE expenses set other=$t where id=$i";
    mysqli_query($c,$q);
}
header("Location:profile1.php");
mysqli_close($c);
?>