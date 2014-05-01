<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Simpan User</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("media",$con);
$id=$_POST['id'];
$password=$_POST['password'];
mysql_query("insert into user(id,password) values('$id','$password')",$con);
echo "Data Berhasil Disimpan, "
?>
<a href="login.php">Silahkan Login</a>
</body>
</html>
