<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Submitted</title>
 <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            </button>
          <a class="navbar-brand" href="index.php" >Techgens</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            
                                 
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <?php
$name=trim(stripslashes(htmlspecialchars($_POST['userj'])));
$email=$_POST['emailj'];
$password=password_hash($_POST['passj'],PASSWORD_DEFAULT);
$connection=mysqli_connect("localhost","root","","test");
if($name!="" && $email!="" && $password!="")$query="INSERT INTO users(username, password, name) VALUES ('$email','$password','$name')";
          if(mysqli_query($connection,$query)){}
          ?>
          <br><br>
          <div class="jumbotron">
        <p>CONGRATS!!    <?php echo $_POST['userj'] ?> You're in now</p>
              <p>Your email is also your username</p>
      </div>
      <!-- Main component for a primary marketing message or call to action -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jq.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="scr.js"></script>
  </body>
</html>
    