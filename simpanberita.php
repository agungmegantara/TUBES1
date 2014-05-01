<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Simpan Berita</title>
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","root","");
mysql_select_db("media",$koneksi);
$judul=$_POST['judul'];
$isi_berita=$_POST['isi_berita'];
$nama_file=$_FILES['fupload']['name'];
$lokasi_file=$_FILES['fupload']['tmp_name'];
$gambar="gambar/$nama_file";
if(!empty($lokasi_file))
{
    move_uploaded_file($lokasi_file,$gambar);
    mysql_query("insert into berita(judul,isi_berita,gambar)values('$judul','$isi_berita','$nama_file')");
}
else
{
    mysql_query("insert into berita(judul,isi_berita)values('$judul','$isi_berita')");
}
echo"<meta http-equiv='refresh' content='0; url=index.php'>";
?>
</body>
</html>
