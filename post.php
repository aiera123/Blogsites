<?php
include 'db.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $post['title']; ?></title>
   

</head>
<body>
    <h1><?= $post['title']; ?></h1>
    <p><?= $post['description']; ?></p>
    <body style="background-color:rgb(218, 253, 250);">

</body>
</html>
