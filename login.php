<?php
    require 'connection.php' ;
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="shortcut icon" href="img/p.png" />
        <title>Grocery world</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style3.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
        <h3><font color="black"><marquee width="100%" bgcolor="crimpson"><h3>WELCOME TO ONLINE GROCERY STORE </h3></marquee></font></h3>
	<div id="bannerImage">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p><font color="black">Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                     <a href="forgot.php">Forgot Password?</a> <br>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div></div>
                    </div>
                </div>
           </div>
          
           <footer class="footer">
               <div class="container">
              <center>
		 <p>Copyright &copy; 2019. All rights reserved</p>
                  <p>Website developed by:</p>
 		 <p>VARSHINI B - 4MH16CS110</p>
 		 <p>VINAY KUMAR K.N - 4MH16CS114</p>
		
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
