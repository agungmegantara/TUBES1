<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Cek Login</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("media",$con);
$login=mysql_query("SELECT * FROM user WHERE id='$_POST[id]' AND password='$_POST[password]'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
if ($ketemu>0){
            session_start();
            $_SESSION['user']=$r['id'];
            $_SESSION['password']=$r['password'];
            header('location:index.php');
}
else{
            echo("login gagal username dan password tidak benar<br>");
            echo("<a href=index.php>ulangi lagi</a>");
}
?>


</body>
</html>
