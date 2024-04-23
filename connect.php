
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage articale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>manage articale</h1>
            <div class="main">
            <form action="upload.php" method="post" enctype="multipart/form-data" >
            
            <img src="https://cdn.lifehack.org/wp-content/uploads/2013/06/bodybuilding-tips.jpg"  alt="logo" width="400" >
            <br><br><input type="text" name="name">
            <br><br>
            <textarea  type="text" name="description"rows="7" cols="40"></textarea>
            <br><br>
            <input type="file" id="file" name="image" >
            <button type="submit" name="submit">upload</button>
            <br><br>
            <a href="articales.php">كل المقالات</a>
            </form>
        </center>     
    </div>
</body>
</html>