<?php
     include('config.php');

     if (isset($_GET['query'])) {
        $search_query = $_GET['query'];

        $sql = "SELECT * FROM articles 
        WHERE name LIKE '%$search_query%' ";
        $results = mysqli_query($conn, $sql);
        if (!$results) {
            // Handle the error (e.g., display error message)
            echo "Error: " . mysqli_error($conn);
        } else {
            // Fetch and display search results
            if (mysqli_num_rows($results) > 0) {
                while($row = mysqli_fetch_assoc($results)) {
                    if (mysqli_num_rows($results) > 0) {
                        while($row = mysqli_fetch_assoc($results)) {
                            echo "
                            <center>
                            <main>
                                <div class='card' style='width: 24rem;'>
                                    <img src='$row[image]' class='card-img-top'  >
                                    <div class='card-content'>
                                     <h5 class='card-title'>$row[name] </h5>
                                     <p class='card-text'> $row[description]</p>
                                        
                                </div>
                                </div>
                            </main>
                            </center>
                            ";
                        }
                    } else {
                        echo "No results found.";
                    }
                }
            } else {
                echo "No results found.";
            }
        }
        // Display search results
        

        // Close database connection
        mysqli_close($conn);
    }
    ?>