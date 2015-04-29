
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Blog</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","blog");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM blogdata");

echo "<table border='1'>
<tr>
<th>title</th>
<th>key</th>
<th>content</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $title=$row['title'] . "</td>";
  echo "<td>" . $key=$row['key'] . "</td>";
  echo "<td>" . $content=$row['content'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
<br>
<br>
<a href="login.php">Login!</a> and make another post
</body>
</html>
