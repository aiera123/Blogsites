<?php
include 'db.php';

$id = $_GET['id'];

// Fetch existing post
$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $update = $conn->prepare("UPDATE posts SET title = ?, description = ? WHERE id = ?");
    $update->bind_param("ssi", $title, $description, $id);
    $update->execute();

    header("Location: index.php");
}
?>

