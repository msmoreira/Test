<html>
<title>Join</title>
<body>

<?php
$con = mysql_connect("","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("new", $con);

$sql = "SELECT * FROM exe_post INNER JOIN destaque_img ON " .
		"exe_post.postId = destaque_img.postId ORDER BY" .
		" destaque_img.destaquenome ASC";
		
		$query = mysql_query($sql);
	while ($row = mysql_fetch_assoc($query)) {
		echo $row['postId'];
		echo "<br   />";
		echo $row['tipo'];
		echo "<br    />";
		echo $row['finalidade'];
		echo "<br    />";
		echo $row['destaqueId'];
		echo "<br    />";
		echo $row['destaquenome'];
	}
?>
</body>
</html>