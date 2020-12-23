<!DOCTYPE html>
<html>
<head>
    <title> Nilai Mata Pelajaran </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2> Jadwal Mata Pelajaran </h2>
<table border="0" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="30px"> No. </th>
        <th width="120px"> Kode Mata Pelajaran </th>
        <th width="200px"> Mata Pelajaran </th>
      
        <th width="70px"> Aksi </th>
    </tr>
    <?php  
    include "config.php";
    $sql="select * from mapel order by kd_mapel asc";
/*    $result=mysql_query($sql);
*/    $result=mysqli_query($koneksi,$sql); 
    $no=1;
    /*while($data=mysql_fetch_array($result)){
    */while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="garis-bawah" align="center"><?= $no ?>.</td>
        <td class="garis-bawah" align="center"><?= $data['kd_mapel'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['nama_mapel'] ?></td>
        <td>
        	<a href="nilai_form.php?kd=<?=$data['kd_mapel'] ?>"> Input Nilai </a>
        	<a href="nilai_guru_tampil.php?kd=<?=$data['kd_mapel'] ?>"> Tampilkan Nilai </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="matpel_form.php"> [+] Data Mata Pelajaran </a>
</p>
</body>
</html>
