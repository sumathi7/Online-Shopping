<html>
    <head>
    <title>Grocery world</title>
    <link rel="shortcut icon" href="img/p.png" />
        <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style1.css"> 
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>  
<script>
	function alert()
	{
		window.alert("ok");
	}
</script>
<style>
    .heading{
    width: 30%;
    height: auto;
    color: white;
    background-color:red;
    font-size: 15px;
    margin-left: 36.5%;
  }
  #ph{
    color: red;
  }
  .description{
    text-align: center;
    width: 30%;
    height: auto;
    background-color: white;
    font-size: 18px;
    padding: 10px;
    margin-left: 36.5%;
  }
  .heading h2{
    text-align: center;
  }
body{
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto;
    }
main .fpw-box{
    width: 320px;
    height: auto;
    background: lightgrey;
    color: #000;
    top: 35%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
}

.fpw-box input{
    width: 100%;
}
.fpw-box input[type="text"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.fpw-box input[type="submit"]
{
    border: none;
    width: auto;
    padding: 5px;
    outline: none;
    height: auto;
    background: #000;
    color: #fff;
    font-size: 15px;
    border-radius: 5px;
}
.fpw-box input[type="submit"]:hover
{
    cursor: pointer;
    background:red;
    color: #000;
}
select
{
    border: solid .5px;
    background: white;
    color: #000;
    outline: white;
    height: 20px;
    font-size: 10px;
}
option
{
    border: solid .5px;
    background: transparent;
    color: #000;
    outline: none;
    height: 30px;
    font-size: 10px;
}
[type="submit"]{
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
[type="submit"]:hover{
  background:green;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}
</style>
</head>
<body background="veg.jpg" width="200" height="80">
<header>
        <div><a href="index.php"><i id="li" class="fas fa-home"></i></a>GROCERY WORLD
        </div>
 </header>
    <main> 
    	<div class="row">
    <div class="heading"><h2>FORGOT PASSWORD</h2></div>
      <div class="description">
            <form method=POST action="index.php">
            <p><br>Enter Your registered phone Number<br></p><br><fieldset><br>
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
    <input  type="text" maxlength="10" name="" placeholder="Phone Number"required>
                
    <br><br><input type="text" name="" maxlength="4" placeholder="Enter OTP" required>
    <br><br> <center><input type="submit" onclick="alert();" name="submit" value="Resend OTP"></center>
    <br> <center><input type="submit" onclick="alert();" name="submit" value="Confirm"></center>
      
            </form>
    </div>   
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