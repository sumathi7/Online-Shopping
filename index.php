<?php
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
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header3.php';
           ?>
           <div id="bannerImage">
               <div class="container">
		<h1><font color="black"><marquee width="100%" bgcolor="darkorange"><h1>WELCOME TO ONLINE GROCERY STORE </h1></marquee></font></h1>
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all groceries.</p>
                       <a href="all.php" class="btn btn-danger">Shop Now <span class="glyphicon glyphicon-shopping-cart"></span></a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="fruits.php">
                                <img src="img/fruits.jpg" alt="fruits">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fruits & Veggies</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="food.php">
                               <img src="img/frozen_food.jpg" alt="frozen">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Frozen foods</p>
                                    <p>High quality,healthy,No chemicals added.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="bakes.php">
                               <img src="img/cake.jpg" alt="bake">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Bakes & Cakes</p>
                                   <p>Baking is Love Made Edible</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
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