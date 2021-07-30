<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location:all.php');
    }
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
    
    <body background="veg.jpg" width="200" height="80">
    
        <div>
            <?php
                require 'header.php';
            ?>
            <h3><font color="black"><marquee width="100%" bgcolor="crimpson"><h3>WELCOME TO ONLINE GROCERY STORE </h3></marquee></font></h3>
                <div id="bannerImage">        
                <div class="container">
        
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-6">
                         <div class="panel panel-primary">
                            <div class="panel-heading">
                            
                        <h1><b>SIGN UP</b></h1></div>
                         <div class="panel-body">
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
		<fieldset>
                               <br><font color="black">Name<font color="red">*</font><br> </fieldset>
                                <input type="text" class="form-control" name="name" placeholder="First Name" required="true">
                            </div>
	        <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
                            </div>
      Gender<font color="red">*</font><br><input type="radio" name="Gender"  value="MALE" required> Male&nbsp;         
      <input type="radio" name="Gender" value="FEMALE" required> Female&nbsp;
    </fieldset><br>
   <fieldset>
      <br>Date of Birth<font color="red">*</font><br><input placeholder="dd/mm/yyyy" type="date" name="Dob" tabindex="2" required>
    <fieldset><br>
                            <div class="form-group">
                               Email-ID<font color="red">*</font><input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                Password <font color="red">*</font><input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <fieldset>
      Phone Number<font color="red">*</font><br>
      <select>
              <option>+91(IND)</option>
              <option>+93(AFG)</option>
              <option>+880(BGD)</option>
              <option>+86(CHN)</option>
              <option>+20(EGY)</option>
              <option>+33(FRA)</option>
              <option>+81(JPN)</option>
              <option>+94(LKA)</option>
              <option>+31(NLD)</option>
              <option>+64(NZ)</option>
              <option>+91(USA)</option>
              <option>+27(ZA)</option>
    </select>
<input type="tel" name="contact" placeholder="79.." maxlength="10" tabindex="3" required="true">
    </fieldset><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
			</div>
                    </div>
                </div>
            </div>
            
           <footer class="footer">
               <div class="container">
               <center>
		 <p>Copyright &copy; 2019. All rights reserved</p>
                 
		
               </center>
               </div>
           </footer>

        </div>
    </body>
</html>
