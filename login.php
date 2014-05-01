<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Login</title>
</head>
<body>
<table width="200" align="center">
<?php
if (isset($_SESSION['user'])==""){
?>
<form method="post" action="ceklogin.php">
<tr><td colspan=3 align=center><img src="gambar/login2.png" width="100" height="100"></td></tr>
<tr>
<td><b>User Id</b></td>
<td><Input type=text name="id" width="200"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type=password name="password" width="200"></td>
</tr>
<tr>
<td colspan="2">Belum Punya Account, <a href="signup.php">Sign Up</a></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="bsubmit" value="Submit">
<input type="reset" name="bcancel" value="Cancel"></td>
</form>
<?php
}
else
{
?>
<tr>
<td><b>User Id</b</td>
<td>
<?php
echo $_SESSION['user'];
?>
</td>
</tr>
<tr>
<td><b>Password</b></td>
<td><br>**********<br>
<a href="logout.php">Logout</a></td>
</tr>
</tr>

<?php
}
?>
</table>

</body>
</html>
