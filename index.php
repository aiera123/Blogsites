<?php
include 'db.php';
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Blog Homepage</title>
    <link rel="stylesheet" href="style.css">

</head>
<header>
<body>
    <h1>Soul & Syntax</h1>
    <nav>
        <a href ="index.php">Home</a>
    <a href="create.php">Add New Post</a>
    
</nav>
    <hr>
</header>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="post-preview">
    <h2><a href="post.php?id=<?= $row['id']; ?>"><?= $row['title']; ?></a></h2>
    <p><?= substr($row['description'], 0, 100) . '...'; ?></p>
    <?php // echo '<a href="edit.php?id=' . $row['id'] . '" class="btn">Edit</a>'; ?>

 </div>

    <?php endwhile; ?>
</body>
</html>
