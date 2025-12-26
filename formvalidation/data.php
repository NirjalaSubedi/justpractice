<?php
include 'dbConnect.php';
// print_r($_POST);
$username=$_POST['username'];
$email=$_POST['email'];
$age=$_POST['age'];
$sql="INSERT INTO `user` (`username`,`email`,`age`) VALUES ('$username','$email','$age')";
if(mysqli_query($conn,$sql)){
    echo"New record inserted";
}else{
    echo"Error:".$sql."<br>".mysqli_error($conn);
}
?>