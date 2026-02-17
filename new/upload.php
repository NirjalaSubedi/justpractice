<?php
// upload.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Get file details
    $file = $_FILES['myFile'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // 2. Define restrictions
    $allowed = ['png', 'jpg', 'gif'];
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // 3. Validation Logic
    if (!in_array($ext, $allowed)) {
        die("Error: Only PNG, JPG, and GIF files are allowed.");
    }

    if ($fileSize > 2097152) { // 2MB calculation
        die("Error: File size is too large. Maximum limit is 2 MB.");
    }

    if ($fileError !== 0) {
        die("Error: There was an issue uploading your file.");
    }

    // 4. Move file to permanent folder
    // Make sure a folder named 'uploads' exists in your project directory
    $uploadDirectory = "uploads/" . $fileName;

    if (move_uploaded_file($fileTmpName, $uploadDirectory)) {
        echo "<h3>Success: File uploaded successfully!</h3>";
        echo "File Name: " . $fileName . "<br>";
        echo "File Type: " . $ext;
    } else {
        echo "Error: Could not move the file to the destination folder. Please check folder permissions.";
    }
} else {
    echo "Invalid Request.";
}
?>