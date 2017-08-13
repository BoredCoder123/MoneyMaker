<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Techgens::Home</title>
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

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          <h1>Welcome to Tech-gen</h1>
        <p>If you are one of those tech enthusiasts who want to know what's going on in the cyber and electronic world then this is your stop.</p>
        <p>Get ready for it and press this baby below to begin</p>
        
      </div>

    </div> <!-- /container -->
        <ul class="nav nav-tabs">
  <li class="active tbmn"><a data-toggle="tab" href="#login">Login</a></li>
  <li><a data-toggle="tab" href="#signup">Join Us!</a></li>
</ul>

<div class="tab-content tbcn">
  <div id="login" class="tab-pane fade in active">
      <div class="col col-sm-12">
          <form class="form-group col col-sm-6" action="login.php" method="post" >
          <br>
             <p class="f1"> E-mail:</p><input type="email" class="form-control emaill" placeholder="Enter your email" name="emaill" >      
          <br>
          <p class="f1">Password:</p><input type="password" class="form-control passl" placeholder="Choose a password" name="passl">      
          <br>
          <input type="submit"  class="subml btn  btn-submit " value="LOGIN" name="form_submit" >
              </form></div>
  </div>
  <div id="signup" class="tab-pane fade">
    <div class="col col-sm-12">
          <form class="form-group col col-sm-6" action="form_post.php" method="post" >
              <br>
          <p class="f1">Name:</p><input type="text" class="form-control users" placeholder="Enter your name"  name="userj">
              <br>
         <p class="f1"> E-mail:</p><input type="email" class="form-control emails" placeholder="Enter your email" name="emailj">      
          <br>
           <p class="f1">Password:</p><input type="password" class="form-control passs" placeholder="Choose a password" name="passj">      
          <br>
          <input type="submit"  class="submj btn  btn-submit " value="SUBMIT" name="form_submit" >
              </form></div>  
    </div></div>
          <footer>
       <p> www.tech-gen.com &copy; 2017 </p>
        </footer>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jq.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="scr.js"></script>
  </body>
</html>