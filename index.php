<!DOCTYPE html>
<html>
<head>
    <title>Blog Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'db.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM posts
        WHERE title LIKE '%$search%'
        OR content LIKE '%$search%'";

$result = mysqli_query($conn, $sql);
?>

<form method="GET">
    <input type="text" name="search" placeholder="Search posts">
    <button type="submit">Search</button>
</form>

<?php
while($row = mysqli_fetch_assoc($result))
{
    echo "<h2>".$row['title']."</h2>";
    echo "<p>".$row['content']."</p>";
    echo "<hr>";
}
?>