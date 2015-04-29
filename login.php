<html>
<head>
<title>Login</title>
</head>

<body>
<div align="right">
  <?php
if(isset($_POST['submit']))
{
if($_POST['uname']=='demo'&&$_POST['pass']=='demo')
{
session_start();
Header("Location: admin.php");
}
else
{
echo "Wrong pass Try Again";
echo "<hr>";
}
}
?>
  <table>
  <form action="login.php" method="post">
  <tr><td>Username:
  <input type="text" name="uname"></td>
  <td>Password:
  <input type="password" name="pass"></td></tr>
  <tr><td><input type="submit" value="submit" name="submit"></td></tr>
  </form>
</div>
</body>
</html>
