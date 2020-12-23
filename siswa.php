<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR SISWA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>DAFTAR SISWA</h1>
<table border="1" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="10px">No.</th>
        <th width="30px">NIS</th>
        <th width="50px">NAMA SISWA</th>
        <th width="50px">NILAI AKHIR</th>
        <th width="50px">KODE KELAS</th>
    </tr>
    <?php  
    include "config.php";
    $sql="select * from siswa order by nis asc";
    $result=mysqli_query($koneksi,$sql);
    $no=1;
    while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="garis-bawah" align="center"><?= $no ?>.</td>
        <td class="garis-bawah" align="center"><?= $data['nis'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['nama_siswa'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['nilai_akhir'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['kd_kelas'] ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="siswa_form.php" target="tengah" class="menu">[+]Data Siswa</a>
</p>
</body>
</html>