<html>
<head>
<title>Make a new post</title>
</head>

<body>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","blog");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$title = mysqli_real_escape_string($con, $_POST['title']);
$key= mysqli_real_escape_string($con, $_POST['key']);
$content = mysqli_real_escape_string($con, $_POST['content']);
$sql="INSERT INTO blogdata VALUES ('$title', '$key', '$content')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
?><br>

<a href="logout.php">Logout</a>
<?php
session_start();
mysqli_close($con);
}else{
?>
<table width="292" height="191" border="0">
<form action="admin.php" method="post" >
<tr><td>Title</td><td><input name="title" type="text" size="35" /></td></tr>
<tr><td>Key</td><td><input name="key" type="text" size="35" /></td></tr>
<tr><td>Content</td><td><textarea name="content" cols="35"></textarea></td></tr>
<tr><td><input type="submit" value="Post" name="submit"/></td></tr>
</table> </form>
<?php
}
?>
</body>
</html>
