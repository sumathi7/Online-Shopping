<?php
	$link =  mysqli_connect("localhost", "root", "", "store");



 $emailid =$_POST['email'];
 $pass = $_POST['password']; 
$id1 = $_POST['Userid'];
 

 /*$sql = "INSERT INTO `users`(`email`,`password`) VALUES ('$emailid','$pass')";
$run = mysqli_query($link,$sql);*/

$sql1="UPDATE `users` SET `email`= '$emailid',`password`='$pass' WHERE `id` = '$id1' ";
$result = $link->query($sql1);
echo $result;
$link->close();
header("Location:sms.php?id=".$id1.",&email=".$emailid."&pass=".$pass."");

  
?>