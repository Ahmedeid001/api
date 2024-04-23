<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articales</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .card {
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main {
            width: 80%;
        }
    </style>
</head>
<body>
    <center><h1>articales</h1></center>

<?php
    include('config.php');
    $result=mysqli_query($conn,"SELECT * FROM article");
    while($row=mysqli_fetch_array($result))
    {
        echo "
        <center>
        <main>
            <div class='card' style='width: 18rem;'>
                <img src='$row[image]' class='card-img-top'  >
                <div class='card-body'>
                    <h5 class='card-title'>$row[name] </h5>
                    <p class='card-text'> $row[description]</p>
                    <a href='edit.php ?id=$row[id]' class='btn btn-primary'>Edit</a>
                    <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
            </div>
            </div>
        </main>
        </center>
        ";
    }
?>

</body>
</html>