<?php
include('config.php');

if(isset($_POST['update'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;

    // Prepare the SQL statement
    $update = "UPDATE article SET name=?, description=?, image=? WHERE id=?";

    // Prepare the statement
    $stmt = $conn->prepare($update);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssi", $NAME, $description, $image_up, $ID);
    $stmt->execute();

    if(move_uploaded_file($image_location, $image_up)) {
        echo "<script>alert('Edited successfully');</script>";
    } else {
        echo "<script>alert('Error uploading file');</script>";
    }
}

header('location: articales.php');
?>
