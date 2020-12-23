<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR JURUSAN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>DAFTAR JURUSAN</h1>
<table border="1" width="1000px" cellpadding="5" cellspacing="1">
    <tr>
        <th width="10px">No.</th>
        <th width="30px">ID </th>
        <th width="50px">NAMA JURUSAN</th>
      
    </tr>
    <?php  
    include "config.php";
    $sql="select * from prodi order by id_prodi asc";
    $result=mysqli_query($koneksi,$sql);
    $no=1;
    while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="garis-bawah" align="center"><?= $no ?>.</td>
        <td class="garis-bawah" align="center"><?= $data['id_prodi'] ?></td>
        <td class="garis-bawah" align="center"><?= $data['nama_prodi'] ?></td>
        
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<p>
    <a href="jurusan_form.php" target="tengah" class="menu">[+]Tambah</a>
</p>
</body>
</html>