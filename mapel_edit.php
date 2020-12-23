<?php  
if(isset($_GET['kd'])){
    $kd=$_GET['kd'];
    include "config.php";
    $sql="select * from mapel where kd_mapel='$kd'";
    //$result=mysql_query($sql); 
    $result=mysqli_query($koneksi,$sql);
    //$data=mysql_fetch_array($result); 
    $data=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title> Form Mata Pelajaran </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="mapel_update.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Mata Pelajaran </h2></th>
    </tr>
    <tr>
        <td width="100px"> Kode Mata Pelajaran </td>
      
        <td><input type="text" name="kd_mapel" value="<?= $data['kd_mapel']?>" required ></td>
    </tr>
    <tr>
        <td> Nama Mata Pelajaran </td>
        <td><input type="text" name="nama_mapel" value="<?= $data['nama_mapel']?>" required></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="simpan" value=" Simpan ">
    </tr>
</table>
</form>
<p align="center">
    <a href="mapel.php"><< Kembali</a>
</p>
</body>
</html>
<?php } ?>