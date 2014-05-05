<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<?php
     $koneksi=mysql_connect("localhost","root","") or die ("Gagal Koneksi".mysql_error());
     mysql_select_db("media",$koneksi) or die ("Gagal memilih tabel".mysql_error());
     ?>
<html>
<head>
<link rel="icon" href="gambar/favicon.png"/>
      <title>Pembuatan Web Informasi</title>
</head>
<body bgcolor=#FFCC99>
<table width=800 align=center bgcolor=#FF9900>
<tr>
    <td colspan="2" width=500><font size=30>SeputarBerita.com</font></td>
    <td><?php include "status.php" ?></td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
</table>
<table width=800 align=center bgcolor=&FF8901>
<tr>
    <td>Informatika A 2011</td>
    <td><a href="index.php">HOME</td>
    <td><a href="index.php?page=isi_berita">TULIS BERITA</td>
</tr>
</table>
<table width=800 align=center>
<tr>
    <td bgcolor=#CCCCCC colspan=3><marquee>Selamat Datang di Website Pembelajaran SeputarBerita.com. Selamat Menikmati Sajian Berita dari Kami. Semoga Bermanfaat ^^</marquee></td>
</tr>

<tr>
    <td width=200>&nbsp;</td>
    <td width=50>&nbsp;</td>
    <td width=550>&nbsp;</td>
</tr>
<tr>
<td>

<table width=200>
<tr>
     <td align=center bgcolor=#FF3300><img border="0" src="gambar/panah.gif"/><b>LOGIN AREA</b></td>
     <td align=center bgcolor=#FF3300><img border="0" src="gambar/panah.gif"/><b>BERITA</b></td>
</tr>
<tr>
    <td bgcolor=#FFFFCC><?php include "login.php" ?></td>
    <td rowspan=9 bgcolor=#FFFFCC><?php include "bukafile.php" ?></td>
</tr>

<td align=center bgcolor=#FF3300><img border="0" src="gambar/panah.gif"/><b>KATA BIJAK HARI INI</b></td>
</tr>
<tr>
    <td bgcolor=#FFFFCC align=center><p align=center><img src="gambar/bijak.png" width="100" height="100"><br>"Jika kita mencoba melakukan yang lebih baik daripada yang kita pikir bisa kita lakukan, kita akan terkejut bahwa sebenarnya kita bisa melakukan hal itu."</p></td></tr>
<tr>
    <td align=center bgcolor=#FF3300><img border="0" src="gambar/panah.gif"/><b>INFORMASI</b></td>
</tr>
<tr>
    <td bgcolor=#FFFFCC><marquee direction="up"><p align=center>
    Contoh Pemrograman WEB I<br>Terima Kasih</p></marquee></td></tr>
    </table></td></tr>
</table>
</body>
</html>
