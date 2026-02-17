<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload Form</title>
</head>
<body>
    <h2>Upload an Image File</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Select Image (PNG, JPG, GIF - Max 2MB):</label><br><br>
        <input type="file" name="myFile" required>
        <br><br>
        <button type="submit" name="submit">Upload Now</button>
    </form>
</body>
</html>