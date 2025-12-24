<?php
$server="localhost";
$username="root";
$password="";
$database="2023batch";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>