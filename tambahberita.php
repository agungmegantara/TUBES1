<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Tambah Berita</title>
</head>
<body>
<form action="simpanberita.php" method="post" enctype="multipart/form-data">
<h3><center>Tambah Berita</center></h3>
<table width="560">
<tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" size="66"></td>
</tr>
<tr>
    <td>Isi Berita</td>
     <td>:</td>
    <td><textarea cols="50" rows="10" name="isi_berita"></textarea></td>
</tr>
<tr>
    <td>Gambar</td>
     <td>:</td>
    <td><input type="file" name="fupload" size="30"></td>
</tr>
<tr>
     <td colspan="3"><input type="submit" name="submit" value="Submit">
     <input type="reset" name="cancel" value="Cancel"></td>
</tr>
</table>
</form>
</body>
</html>
