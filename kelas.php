<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>DAFTAR KELAS</h1>
<table border="1" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="10px">No.</th>
        <th width="30px">KODE KELAS</th>
        <th width="50px">KELAS</th>
    </tr>
    <?php  
    include "config.php";
    $sql="select * from kelas order by kd_kelas asc";
    $result=mysqli_query($koneksi,$sql);
    $no=1;
    while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="garis-bawah" align="center"><?= $no ?>.</td>
        <td class="garis-bawah" align="center"><?= $data['kd_kelas'] ?></td>      
        <td class="garis-bawah" align="center"><?= $data['kelas_prodi'] ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="kelas_form.php" target="tengah" class="menu">[+]Data Kelas</a>
</p>
</body>
</html>