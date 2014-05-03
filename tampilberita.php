<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Title here!</title>
</head>
<body>
<table width="550" border="1">
<?php
$koneksi=mysql_connect("localhost","root","");
mysql_select_db("media",$koneksi);
$sql="select*from berita order by id_berita desc limit 3";
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query))
{
    $judul=$row['judul'];
    $isi_berita=$row['isi_berita'];
    $gambar=$row['gambar'];
?>
<tr>
    <td colspan=2><img border="0" src="gambar/panah.gif"/><i>SeputarBerita.Com</i><b> - <?php echo $judul; ?><b></td>
</tr>
<tr>
    <td rowspan=2"><center><img width=170 height=170 src="gambar/<?php echo $gambar; ?>"/></center></td>
</tr>
<tr>
    <td align=justify><?php echo $isi_berita;?><br><br></td>
</tr>
<tr bgcolor="#CCCCCC">
    <td colspan="2" align=center>---www.beritaoke.com---</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
