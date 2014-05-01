<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Title here!</title>
</head>
<body>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : "";
switch ($page){
    default:
   case '': if(!file_exists("tampilberita.php")) die ("File berita tidak ada");
             include "tampilberita.php";
             break;
   case 'signup': if(!file_exists("signup.php"))
                   die ("File Signup tidak ada");
                   include "signup.php";
                   break;
    case 'isi_berita': if(!file_exists("tambahberita.php")) die ("File berita tidak ada");
                   include "tambahberita.php";
                   break;
    case 'login': if(!file_exists("ceklogin.php"))
                   die ("File login tidak ada");
                   include "ceklogin.php";
                   break;
}
?>
</body>
</html>
