<?php
session_start();
include 'db.php';
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
}

$posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="form-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php">Logout</a>
        <h3>Create Post</h3>
        <form method="post">
            <input type="text" name="title" placeholder="Post Title" required><br>
            <textarea name="content" placeholder="Post Content" required></textarea><br>
            <button type="submit">Add Post</button>
        </form>

        <h3>All Posts</h3>
        <?php while ($row = $posts->fetch_assoc()): ?>
            <div class="post">
                <h4><?php echo $row["title"]; ?></h4>
                <p><?php echo $row["content"]; ?></p>
                <small><?php echo $row["created_at"]; ?></small><br>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>