<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض المقالات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             
            background-color: #f1f1f1;
        }
        
        .container {
            max-width: 7000px;
            margin: 20px auto;
            padding:  10px;
        }
        
        .search-bar {
            text-align: center;
            margin-bottom: 20px;
        }
        .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
        }
        .card {
            margin: 0 1rem 1rem 0; /* Adjust margins as needed */
            width: calc(100% / 3); /* Each card takes one-third of the available width */
        }
        .card {
             
            height: 22rem;
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 6px;
            border-radius: 6px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
             margin-bottom: 20px;
            overflow: hidden;
        }
        
        .card img{
            width: 100%;
            height: 200px;
        }
     
        .card-img-top img {
            width: 80%;
            height: auto;
        }
        
        
        
        .card-title{
             font-family: 'Sedan', cursive;
             font-size: 20px;
             font-weight: bold;
             margin-top: 3px;
 
        }
        .card-content p {
            margin-bottom: 0;
        }
        .read-more-btn {
            background-color: #007bff;  
            color: white;  
            border: none; 
            padding: 8px 16px;  
            cursor: pointer;  
            border-radius: 4px;  
            transition: background-color 0.3s;  
            margin-bottom: 10px;
        }

/* Hover effect */
.read-more-btn:hover {
    background-color: #0056b3;  
}

/* Active effect */
.read-more-btn:active {
    background-color: #004080;  
}


    </style>
</head>

<body>

    <div class="container">
         

    <?php
include('config.php');

$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<center>";
    echo "<main>";
    echo "<div class='card-container'>";

     
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card' style='width: calc(100% / 4);'>";
        echo "<img src='" . $row['image'] . "' class='card-img-top'>";
        echo "<div class='card-content'>";
        echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
        echo "<a href='full_content.php?id=" . $row['id'] . "' class='read-more-btn'>Read More</a>";
        echo "</div>";
        echo "</div>";
    }

    echo "</div>";  
    echo "</main>";
    echo "</center>";

     
    ?>
    <script>
        document.querySelectorAll('.read-more-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var description = this.parentNode.querySelector('.description');
                if (description.style.display === 'none') {
                    description.style.display = 'block';
                    this.textContent = 'Read Less';
                } else {
                    description.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });
        });
    </script>
    <?php
} else {
    echo "<center>0 نتائج</center>";
}

mysqli_close($conn);
?>



         
   
     </div>

</body>

</html>