<?php
include '../includes/databaseconnection.php';
if($_POST['submit']){
    $cname=$_POST['cname'];
    $sql="INSERT INTO category (cname) VALUES ('$cname')";
    if(mysqli_query($conn,$sql)){
        echo "Category added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <form action="#" method="post">
    <h3> Add Category</h3>
    <input type="text" name="cname" id="" placeholder="category name" required>
    <input type="submit" name="submit" value="Add">
    </form>
</body>
</html>