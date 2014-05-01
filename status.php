<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Status Login/Belum Login</title>
</head>
<body>
<?php
session_start();
?>
<?php
if(isset($_SESSION['user'])=="")
{

echo"<b> [ Status : Belum Login ";
echo"| User : Tamu ]</b>";
}
else
{
echo"<b>[ Status : Login";
echo"| User : ".$_SESSION['user']."]";
echo"<a href='logout.php'> Logout</a></br>";
}
?>
</body>
</html>
