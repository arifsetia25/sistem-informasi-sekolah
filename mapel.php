<!DOCTYPE html>
<html>
<head>
    <title> Jadwal Mata Pelajaran </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2> Jadwal Mata Pelajaran </h2>
<table border="0" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="30px"> No. </th>
        <th width="120px"> Kode Mata Pelajaran </th>
        <th width="200px"> Mata Pelajaran </th>
        <th width="100px"> Semester </th>
        <th width="120px"> Kode Kelas </th>
        <th width="120px"> Kode Jurusan </th>
        <th width="100px"> Aksi </th>
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
        <td class="garis-bawah" align="center"><?= $data['semester'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['kd_kelas'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['id_prodi'] ?></td>
        <td align="center"><a href="mapel_edit.php?kd=<?= $data['kd_mapel'] ?>">EDIT MAPEL</a> 
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="mapel_form.php" target="tengah" class="menu">[+]Data Mata Pelajaran </a>
</p>
</body>
</html>