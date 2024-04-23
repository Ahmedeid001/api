<?php
include('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description']; 
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;

    // Prepare the SQL statement
    $insert = "INSERT INTO article (name, description, image) VALUES (?, ?, ?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($insert);
    
    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $name, $description, $image_up);
    $stmt->execute();

    if(move_uploaded_file($image_location, $image_up)){
        echo "<script>alert('Uploaded successfully');</script>";
    } else {
        echo "<script>alert('Error uploading file');</script>";
    }
    header('location: connect.php');
}
?>
