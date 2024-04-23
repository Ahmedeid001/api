<?php
include('config.php');

// Check if article ID is provided in the URL
if(isset($_GET['id'])) {
    $article_id = $_GET['id'];
    
    // Fetch article data based on ID
    $sql = "SELECT * FROM article WHERE id = $article_id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $row['name']; ?></title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f1f1f1;
                    margin: 0;
                    padding: 0;
                    
                }

                .container {
                    max-width: 800px;
                    margin: 20px auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    
                }
                h2{
                    font-family: ProximaNova, Arial, sans-serif;
                     
                }
                .article-title {
                    font-size: 35px;
                    font-weight: bold;
                    margin-bottom: 20px;
                    margin-top: 10px;
                    text-align: center;  
                    position: relative;
                    
                }

                .article-title::before {
                    content: '';
                    position: absolute;
                    width: 100%;
                    height: 2px;
                    background-color: #00aeef;  
                    top: 50%;
                    left: 0;
                    z-index: -1;
                    
                }

                .article-image {
                    border-top: 2px solid #c7c7c7;
                    width: 80%;
                    margin-left: 58px;
                    height: auto;
                    margin: 20px auto;
                    padding: 20px;
                    text-align: center;
                    max-width: 800px;
                    margin-bottom: 20px;
                }

                .article-content {
                    font-size: 16px;
                    line-height: 1.6;
                    padding: 20px;
                    background-color: #f9f9f9;
                    border-radius: 8px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2 class="article-title"><?php echo $row['name']; ?></h2>
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="article-image">
                <div class="article-content">
                    <?php echo nl2br($row['description']); ?>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "No article found with the provided ID.";
    }
} else {
    echo "Article ID is missing in the URL.";
}
 
mysqli_close($conn);
?>
