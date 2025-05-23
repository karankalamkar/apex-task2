<?php
include 'db.php';
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();
    header("Location: dashboard.php");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Post</title><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="form-container">
        <h2>Edit Post</h2>
        <form method="post">
            <input type="text" name="title" value="<?php echo $post['title']; ?>" required><br>
            <textarea name="content" required><?php echo $post['content']; ?></textarea><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>