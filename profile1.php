<?php 
session_start();
if(!isset($_SESSION['ema']))
    header("Location:login.php");
?>
<!DOCTYPE html>

<html>

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    
    </head>
    
    <body>
        
        <nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" dat-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Money Maker</a>
                </div>
                
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Hello, <?php echo $_SESSION['fna']." ".$_SESSION['lna']; ?></a></li>
                        <li><a href="login.php">Log Out</a></li>
                    </ul>
                </div>
        </nav>
        <canvas id="canvas" width='1250px' height='610px'></canvas>
        <?php
        $connection=mysqli_connect("localhost","root","root","project");
        $i=$_SESSION['id'];
        $q="SELECT * from expenses where id='$i'";
        $rw=mysqli_query($connection,$q);
        $r=mysqli_fetch_assoc($rw);
        $t=$r['total_amount'];
        $fu=$r['fuel'];
        $fo=$r['food'];
        $cl=$r['clothing'];
        $co=$r['cosmetics'];
        $s=$r['stationary'];
        $b=$r['bills'];
        $rep=$r['repair_work'];
        $l=$r['laundary'];
        $o=$r['other'];
        
        if($t!=0 or $fu!=0 or $fo!=0 or $cl!=0 or $co!=0 or $s!=0 or $b!=0 or $b!=0 or $rep!=0 or $l!=0 or $o!=0)
        {
            echo "<script>
            var canvas = document.getElementById('canvas');

            var ctx = canvas.getContext(\"2d\");
            var data = [$s,$b,$rep,$l,$o,$t,$fu,$fo,$cl,$co];

            var colors = ['rgb(104,227,87)', 'rgb(87,226,137)', 'rgb(88,225,207)', 'rgb(86,105,226)', 'rgb(139,86,226)', 'rgb(207,86,227)', 'rgb(226,86,173)', 'rgb(227,86,103)', 'rgb(227,137,85)', 'rgb(226,207,0)'];

            var center = [650,350];

            var radius = 200;

            var lastPosition = 0, total = 0;
            for(var i in data) { total += data[i]; }
            for (var i = 0; i < data.length; i++) {

            ctx.fillStyle = colors[i];

            ctx.beginPath();

            ctx.moveTo(center[0],center[1]);

            ctx.arc(center[0],center[1],radius,lastPosition,lastPosition+(Math.PI*2*(data[i]/total)),false);

            ctx.lineTo(center[0],center[1]);

            ctx.fill();

            lastPosition += Math.PI*2*(data[i]/total);

            }</script>";
            echo "<div id='legend'><img src=\"img/legend1.jpg\" class=\"leg1\">";
            echo "<img src=\"img/legend2.jpg\" class=\"leg2\">";
            echo "<p class=\"l1 left\">Total: "; 
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['total_amount'];
            echo $s;
        echo "</p>";
        echo"<p class=\"l2 left\">Fuel: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['fuel'];
            echo $s;
            echo "</p>;";
        echo "<p class=\"l3 left\">Food: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['food'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l4 left\">Clothing: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['clothing'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l5 left\">Cosmetics: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['cosmetics'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l6 right\">Stationary: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['stationary'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l7 right\">Bills: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['bills'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l8 right\">Repair Works: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['repair_work'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l9 right\">Laundary: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['laundary'];
            echo $s;
            echo "</p>";
        echo "<p class=\"l10 right\">Other: ";
            $i=$_SESSION['id'];
            $q="SELECT * FROM expenses where id=$i";
            $result=mysqli_query($connection,$q);
            $r=mysqli_fetch_assoc($result);
            $s=$r['other'];
            echo "$s";
            echo "</p></div>";
        }
        else
        {
            echo "<h1 class=\"ankit\">Please input some data</h1>";
        }
        mysqli_close($connection);
        ?>
        <div class="xz">
        <h1 class="h1234567">Your Expenses</h1>
        
        <div class="container form123">
            <ul class="nav nav-tabs">
                <li class="active"><a class="link" href="" role="tab">Add money</a></li>
            </ul>
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" name="add">
                    <form method="post" action="addmoney.php">
                        <div class="form-group">
                            <label for="add_money">Amount</label>
                            <input placeholder="Rs." type="number" id="add_money" class="form-control" name="add" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Add amount</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container form2">
            <ul class="nav nav-tabs">
                <li class="active"><a class="link" href="" role="tab">Deduct money</a></li>
            </ul>
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active">
                    <form method="post" action="deductmoney.php">
                        <div class="form-group">
                            <label for="deduct_money">Amount</label>
                            <input placeholder="Rs." type="number" id="deduct_money" class="form-control" name="deduct" required>
                        </div>
                        <div class="form-group">
                            <label>Select categoy:</label><br>
                            <input type="radio" name="radio" value="fuel" required>Fuel<br>
                            <input type="radio" name="radio" value="food" required>Food<br>
                            <input type="radio" name="radio" value="clot" required>Clothing<br>
                            <input type="radio" name="radio" value="cosm" required>Cosmetics<br>
                            <input type="radio" name="radio" value="stat" required>Stationary<br>
                            <input type="radio" name="radio" value="bill" required>Bills<br>
                            <input type="radio" name="radio" value="repa" required>Repair Work<br>
                            <input type="radio" name="radio" value="laun" required>Laundary<br>
                            <input type="radio" name="radio" value="othe" required>Other<br>
                        </div>
                        <button type="submit" class="btn btn-danger">Deduct amount</button>
                    </form>
                </div>
            </div>
        </div>
        
        <footer class="panel-footer footer1">
            <p>&copy; 2017 MoneyMaker</p>    
        </footer>
        
        <script src="js/jquery-3.2.0.min.js"></script>
        <!--Bootstrap JS-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    </body>

</html>