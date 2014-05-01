<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Logout</title>
</head>
<body>
<?php
session_start();
session_unset("id");
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>
</body>
</html>
