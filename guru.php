<!DOCTYPE html>
<html>
<head>
    <title>Daftar Guru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>DAFTAR Guru</h1>
<table border="1" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="10px">No.</th>
        <th width="30px">NIP</th>
        <th width="50px">NAMA GURU</th>
        <th width="50px">ALAMAT</th>
    </tr>
    <?php  
    include "config/config.php";
    $sql="select * from guru order by nip asc";
    $result=mysqli_query($koneksi,$sql);
    $no=1;
    while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="garis-bawah" align="center"><?= $no ?>.</td>
        <td class="garis-bawah" align="center"><?= $data['nip'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['nama_guru'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['alamat'] ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="form_guru.php" target="tengah" class="menu">[+]Data Guru</a>
</p>
</body>
</html>