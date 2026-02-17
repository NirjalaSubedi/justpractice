<?php
//include 'dbConnect.php';
require 'dbConnect.php';
//print_r($_POST);
//print_r($_GET);
$username=$_POST['username'];
$email=$_POST['email'];
$age=$_POST['age'];
$sql="INSERT INTO `user` (`username`,`email`,`age`) VALUES ('$username','$email','$age')";
if(mysqli_query($conn,$sql)){
    echo"New record inserted";
}else{
    echo"Error:".$sql."<br>".mysqli_error($conn);
}
"<br>";
echo $_SERVER['PHP_SELF'];
"<br>";
echo $_SERVER['REQUEST_METHOD'];
"<br>";
echo $_SERVER['SERVER_NAME'];


?>