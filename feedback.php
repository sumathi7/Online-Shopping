<html>
<head>
    <title> Grocery world</title>
    <link rel="shortcut icon" href="img/p.png" />
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style1.css">   
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
        .heading{
    width: 50%;
    height: auto;
    color: white;
    background-color:#2f4f4f;
    font-size: 20px;
  }
  .description{
    text-align: left;
    width: 50%;
    height: auto;
    background-color:teal;
    font-size: 18px;
    padding: 10px;
  }
  .heading h2{
    text-align: center;
    background-color:crimson;
  }

#contact {
  background:#F9F9F9;
  padding:25px;
  margin:50px 0;
}

#contact h3 {
  color: #F96;
  display: block;
  font-size: 30px;
  font-weight: 400;
}

#contact h4 {
  margin:5px 0 15px;
  display:block;
  font-size:13px;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
  width:100%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 5px;
  padding:10px;
}

#contact textarea {
  height:100px;
  max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
  cursor:pointer;
  width:auto;
  border:none;
  border-radius: 5px;
  background:black;
  color:#fff;
  margin:0 0 5px;
  padding:10px;
  font-size:15px;
}

#contact button[type="submit"]:hover {
  background:green;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
  outline:0;
  border:1px solid #999;
}

    </style>
</head>
<body background="veg.jpg" width="200" height="80">
<h3><font color="black"><marquee width="100%" bgcolor="crimpson"><h3>WELCOME TO ONLINE GROCERY STORE </h3></marquee></font></h3>
<header>
        <div><a href="index.php"><i id="li" class="fas fa-home"></i></a>GROCERY WORLD
        </div>
 </header>
<main> 
  <center>
  <div class="row">
    <div class="heading"><h2>FEEDBACK</h2><br><h3>Enter your registered Name,E-mail ID & Phone No.</h3> </div>
      <div class="description"> 
  <form id="contact" action="" method="post">
    <fieldset>
      NAME<input placeholder="Enter your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
       PHONE NUMBER<input placeholder="Enter Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
	E-MAIL<input placeholder="Enter Email Address" type="email" tabindex="2" required>
    </fieldset>
       <fieldset>
        Add a comment about the quality of item you received:<textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <center><button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button></center>
    </fieldset>
  </form> 
</div>
</center>
  </main>
    <div id="footer">
    <div class="container">
     <div class="footer-social-media">
        <br><ul style="color: Red"><h3>Connect Us:</h3>
        <li>
          <a href="https://www.facebook.com/groceryworld"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/groceryworld"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=zFfWEP7WLjA"><i class="fab fa-youtube-square"></i></a>
        </li>
	<br>
	<li>
          <br><i class="fas fa-phone" style="color: Red;"> Phone:</i>
		<br><a href="tel:7892630783">+91 7795682328</a><br>
		<br><a href="https://www.groceryworld.in"><h4 style="color: Red;">Visit:<h4>www.groceryworld.in</a>
	     <br><br> <i class="fas fa-map-marker-alt" style="color: Red;"> Address:</i>

					<br><br><h3 style="color:white;">GROCERY WORLD,No. 600,
					<br>1st stage,3rd Cross,
					<br>M Block,Kuvempunagar, 
					<br>MYSORE - 570023,Karnataka,India.
					</h3>
        </li>
      
      </ul>
    </div>
    <div class="footer-mid-part">
      <ul class="mid-left" style="color: white;"><h4 style="color: Red;">Guided by:</h4>
        <li>
          <h3>SOWMYASHREE P
	  <br>Assitant Professor,
          <br>Department of CS & E,
          <br>MIT MYSORE</h3><br></li>
      </ul>
           
        
        <ul  class="mid-right" style="color: white;"><h4 style="color: Red;">Done by:</h4>
        <li>
          VARSHINI B<br>
          VINAY KUMAR K.N<br>MIT Mysore.
        </li>
      </ul>
    </div>
  </div>
  <div class="crfooter" style="clear: both;">
      <p>Copyright &copy; 2019. All rights reserved</p>
    </div>
  </body>
</html> 