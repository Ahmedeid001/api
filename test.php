<?php
include('config.php');

$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);

$data = array(); // مصفوفة لتخزين البيانات

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $article = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description']
        );

        $data[] = $article;
    }
}

// تحويل المصفوفة إلى JSON وطباعتها
echo json_encode($data);
?>
