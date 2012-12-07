<?php
require('../config/db.php');
extract($_POST);
$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);
$post_title = addslashes($post_title);
$post_text = addslashes($post_text);
$sql = "INSERT INTO posts (post_title,post_text) VALUES('$post_title','$post_text')";
$conn->query($sql);
$conn->close();
header("Location:../?p=public/home");