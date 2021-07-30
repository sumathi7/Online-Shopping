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
        <link rel="stylesheet" href="style1.css" type="text/css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>  
 <style>    
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
  }

#manageu {
  background:#F9F9F9;
  padding:25px;
  margin:50px 0;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#manageu input[type="text"]{
  width:100%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 5px;
  padding:10px;
}

#manageu [type="submit"]{
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

#manageu [type="submit"]:hover{
  background:green;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}

#manageu input:focus,{
  outline:0;
  border:1px solid #999;
}

    </style>
</head>
<body background="veg.jpg" width="200" height="80">
<header>
        <div><a href="table.php"><i id="li" class="fas fa-home"></i></a>GROCERY WORLD
        </div>
 </header>
<main>
  <center>
  <div class="row">
    <div class="heading"><h2>MANAGE USER</h2></div>
      <div class="description"> 
  <form id="manageu" method="post" action="manage.php">
    <fieldset>
       Customer ID <input type="text" name="Userid" value="<?php echo $_GET['id']; ?>" required/>
    </fieldset>
    <fieldset>
      Name <input placeholder="Enter User Name" type="text" name="name" value="<?php echo $_GET['name']; ?>" required/>
    </fieldset>
    <fieldset>
       User Login ID <input placeholder="Enter User ID" type="text" name="email" required/>
    </fieldset>
       Password <input  placeholder="Enter Password" type="text" name="password" required/>
    </fieldset>
    <center><input type="submit" name="submit" value="submit"/></center>
  </form> 
</div>
</center>
  </main>
  </body>
</html>