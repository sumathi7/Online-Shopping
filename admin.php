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
        <link rel="stylesheet" href="admin.css" type="text/css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>  
    </head>
    <body>
        
        <header>
         <h1>GROCERY WORLD</h1>
          <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        
        <div id="bannerImage">
	<main>
        
	<ul> <div class="
	<div id="bannerContent">	
                <li><a href="list.php">
			<div class="jumbotron">
				<span class="glyphicon glyphicon-list"></span>
			</div>
			<div class="name"><span data-text="Customers&nbsp;Log">Customers&nbsp;Log</span></div>
			</a>	</li>
	    </div>
        <div id="bannerContent">
		<li><a href= "table.php">
			<div class="jumbotron">
				<span class="glyphicon glyphicon-user"></span>
			</div>
			<div class="name">
				<span data-text="Manage&nbsp;Users&nbsp;">Manage&nbsp;Users&nbsp;</span></div>
			</a></li></div>
	   </ul> 
	
        
	</main>
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

</body>
</html>