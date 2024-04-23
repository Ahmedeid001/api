<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit articale</title>
    <link rel="stylesheet" href="style.css">
</head>
        <body>
            <?php
                include 'config.php';
                $ID=$_GET['id'];
                $up = mysqli_query($conn,"SELECT * FROM article WHERE id=$ID");
                $data = mysqli_fetch_array($up);
            ?>
            <center><h1>Edit articale</h1>
                <div class="main">
                    <form action="up.php" method="post" enctype="multipart/form-data">
                    <br><br>
                    <td>ID </td>
                    <td><input type="text" name='id' value='<?php echo $data['id'] ?>'></td>
                    <br><br>
                    <td>NAME  </td><td><input type="text" name='name' value='<?php echo $data['name'] ?>'></td>
                  
            
                    <br><br>
                    <table>
                    <tr>
                        <td><div style="text-align: center;">DESCRIPTION</div></td>
                        <td><textarea name="description" rows="7" cols="40"><?php echo $data['description']; ?></textarea></td>
                    </tr>
                    </table>

                    <br><br>
                    <input type="file" id="file" name='image' >
                    <button type="submit" name='update'>Edit</button>
                    <br><br>
                    <a href="articales.php">كل المقالات</a>
                    </form>
            </center>     
              
        </body>
</html>