<html>
    <head>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>  
	</head>
<body>
<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       
       
        
       
                      <a href="signup.php" class="navbar-brand">GROCERY WORLD</a>
                       
                      
			
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                        <li>   <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                         <li>  <a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                         <li>  <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
				<li><a href="aboutus.php" class="navbar-brand">About us</a></li>
			<li><a href="feedback.php" class="navbar-brand">Feedback</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>
</body>
</html>