<?php
$conn = mysqli_connect("localhost", "root", "", "blog_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";
?>