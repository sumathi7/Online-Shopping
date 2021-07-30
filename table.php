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
        <link rel="stylesheet" href="style1.css" type="text/css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>  
 <style>
  .heading{
    float: center;
    width: 100%;
    height: auto;
    color: white;
    background-color:teal;
    font-size: 20px;
  }
  .description{
    width: 100%;
    height: auto;
    background-color:black;
    font-size: 12px;
    padding: 10px;
  }
  .heading h2{
    text-align: center;
  }
  table {
    border-collapse: collapse;
   width: 100%;
   border: 2px solid orange;
   color:navy;
   padding: 5px;
   font-size: 14px;
   text-align: center;
   background-color:lightgrey;
     } 
  th {
    border: 2px solid orange;
    background-color:brown;
   color: white;
   border-spacing: 5 35px;
   padding: 5px;
    }
    td{
      font-size: 14px;
      width: auto;
      height: auto;
      border: 2px solid orange;
    }
    button a{
      text-decoration: none;
      color: white;
    }
    button{
  cursor:pointer;
  width: 90%;
  padding: 5px;
  font-size: 10px;
  border:none;
  border-radius: 5px;
  background:black;
  color:#fff;
}
    button:hover{
      background-color: green;
    }
 </style>
</head>
<body background="veg.jpg" width="200" height="80">
<header>
        <div><a href="admin.php"><i id="li" class="fas fa-home"></i></a>GROCERY WORLD
        </div>
 </header>
  <main>
<div class="row">
    <div class="heading"><h2>MANAGE CUSTOMERS DETAILS</h2></div>
      <div class="description">
         <table>

 <tr>
  <th>ID</th> 
  <th>NAME</th> 
  <th>LAST NAME</th>
  <th>GENDER</th>
  <th>DOB</th>
  <th>E-mail</th>
  <th>PASSWORD</th>
  <th>CONTACT</th>
  <th>EDIT</th>

 </tr>
 <?php
$con = mysqli_connect("localhost", "root", "", "store");
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  $sql = "SELECT id,name,lname,Gender,Dob,email,password,contact FROM users";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" 
. $row["id"]. "</td><td>" 
. $row["name"]. "</td><td>"
. $row["lname"]. "</td><td>"
. $row["Gender"]. "</td><td>"
. $row["Dob"]. "</td><td>"
. $row["email"] . "</td><td>"
. $row["password"] . "</td><td>"
. $row["contact"] . "</td>" ;
if($row["email"] == NULL AND $row["password"] == NULL)
{
   echo "<td><button type='submit'><a href='manageuser.php?id=".$row['id']."&name=".$row['name']."'><div class='jumbotron'>
				<span class='glyphicon glyphicon-edit'></span>
			</div></a></button></td></tr>";
    

}
else
{
  echo "<td><button type='submit'><a href='manageuser.php?id=".$row['id']."&name=".$row['name']."'><div class='jumbotron'>
				<span class='glyphicon glyphicon-edit'></span>
			</div></a></button></td></tr>";
    

}
}
echo "</table>";

} else { echo "0 results"; }
$con->close();

?>
</table>
    </div>    
  </main>
  </body>
</html> 