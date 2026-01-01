<?php
    include '../includes/databaseconnection.php';
    $sql ="SELECT * FROM category ";
    $result= mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "Category ID: ".$row['id']."<br>";
        echo "Category Name: ".$row['cname']."<br><br>";
    }
    $num=mysqli_num_rows($result);
    echo "Total Categories: ".$num;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="categoryCreate.php">Add New Category</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../includes/databaseconnection.php';
                    $sql ="SELECT * FROM category ";
                    $result= mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['cname']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
</body>
</html>