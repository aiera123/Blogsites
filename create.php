<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $conn->query("INSERT INTO posts (title, description) VALUES ('$title', '$description')");
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
</head>
<body>
    <h1>Add a New Post</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="description" placeholder="Content" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
