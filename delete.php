<?php
 include('config.php');
 echo $ID=$_GET['id'];
mysqli_query($conn,"DELETE FROM article WHERE id='$ID'");
header('location:articales.php');
?>