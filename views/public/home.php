<?php
require('./config/db.php'); 
$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);
$sql = 'SELECT * FROM posts ORDER BY post_datepublished DESC';
$results = $conn->query($sql);
$post = $results->fetch_assoc();
?>
<h2>Home</h2>
<h3><?php echo $post['post_title'];?></h3>
<div id="post1-date"><?php echo $post['post_datepublished'];?></div>
<p><?php echo $post['post_text'];?></p>
<h4>Recent Posts</h4>
<table>
<?php while($post = $results->fetch_assoc()){?>
	<tr><td><?php echo $post['post_title']?></td><td><?php echo $post['post_datepublished']?></td></tr>
<?php ;}?>
</table>