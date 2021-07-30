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
</head>
<body background="veg.jpg";>


<?php

	$con = mysqli_connect("localhost","root","","store");
	$id=$_GET['id'];
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	// Authorisation details.
	$username = "varsha@gmail.com";
	$hash = "1b53fbad2ce2a0482c28478baa0c2b87";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$sql = "SELECT * FROM `users` WHERE `id`='$id' "; 
	$res = $con->query($sql);
	$row = $res->fetch_assoc();
        $uname= $row["name"];
	$numbers = $row["contact"]; // A single number or a comma-seperated list of numbers
        echo "<p align='center'><font color=black size='7pt' >User ID and Password changed SUCCESSFULLY</font></p>";
        echo "<br>"; 
        echo "<br>"; 
        echo "<p align='center'><font color=black size='7pt'>Message sent to:</font></p>"; 
        echo "<br>";
        echo "<br>"; 
        echo "<p align='center'><font color=black size='7pt'>Name:$uname</font></p>";  
        echo "<br>"; 
        echo "<br>";
        echo "<p align='center'><font color=black size='7pt'>Contact No.:$numbers</font></p>"; 

	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message1 = urlencode($email);
	$message2 = urlencode($pass);
	$data1 = "username=".$username."&hash=".$hash."&message=".$message1."&message=".$message2."&sender=".$sender."&uname=".$uname."&numbers=".$numbers."&test=".$test;
	$data2 = "username=".$username."&hash=".$hash."&message=".$message2."&message=".$message2."&sender=".$sender."&uname=".$uname."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
?>
</body>
</html>