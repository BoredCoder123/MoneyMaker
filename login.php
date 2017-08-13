<?php
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-86400,'/');
}
?>

<!DOCTYPE html>

<html>

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
    <body>
        
        <nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" dat-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Money Maker</a>
                </div>
                
                <div class="collapse navbar-collapse n1234" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php #howtouse">How to use</a></li>
                        <li><a href="index.php #contact">Contact</a></li>
                    </ul>
                </div>
        </nav><br><br><br><br><br><br>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#login" role="tab" data-toggle="tab">Log In</a></li>
                <li><a href="#signup" role="tab" data-toggle="tab">Sign Up</a></li>
            </ul>
            
            <div class="tab-content">
            
                <div role="tabpanel" class="tab-pane fade in active" id="login">
                    <h2>Log In</h2>
                    <form  method="post" action="loggedin.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input placeholder="Email" type="email" id="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn custom_button btn-danger">Log In</button>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="signup">
                    <h2>Sign Up</h2>
                    <form method="post" action="signup.php">
                        <div class="form-group">
                            <label for="f_name">First Name<span class="text-danger"><sup>*</sup></span></label>
                            <input placeholder="First Name" type="text" name="f_name" id="f_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="l_name">Last Name<span class="text-danger"><sup>*</sup></span></label>
                            <input type="text" placeholder="Last Name" id="l_name" name="l_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger"><sup>*</sup></span></label>
                            <input placeholder="Email" type="email" id="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password<span class="text-danger"><sup>*</sup></span></label>
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        </div>
                        <span class="text-danger"><small>* Required Fields</small></span><br>
                        <button type="submit" class="btn custom_button btn-danger">Sign Up</button>
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