<!DOCTYPE html>
<html>
<head>
    <title> Form Mata Pelajaran </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="mapel_simpan.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Mata Pelajaran </h2></th>
    </tr>
    <tr>
        <td width="100px"> Kode Mata Pelajaran </td>
        <td><input type="text" name="kd_mapel" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
        <td> Nama Mata Pelajaran </td>
        <td><input type="text" name="nama_mapel" required></td>
    </tr>
    <tr>
        <td> Semester </td>
        <td><input type="text" name="semester"></td>
    </tr>
    <tr>
        <td> Kode Kelas </td>
        <td><select name="kd_kelas">
            <?php 
                include "config.php";
                $query="select * from kelas";
                $hasil = mysqli_query($koneksi,$query);
                while ($qtabel = mysqli_fetch_assoc($hasil)) {
                
                echo "<option>".$qtabel['kd_kelas']. "</option>";
                }
             ?>
                
            </select></td>
    </tr>
    <tr>
        <td> Kode Jurusan </td>
        <td>
            <select name="id_prodi">
                <?php 
                    include "config.php";
                    $sql="select * from prodi";
                    $result=mysqli_query($koneksi,$sql);
                    while ($data=mysqli_fetch_assoc($result)) {
                        echo "<option>".$data['id_prodi']. "</option>s";
                    }
                 ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="simpan" value=" Simpan "> <input type="reset" value="Clear"></td>
    </tr>
</table>
</form>
<p align="center">
    <a href="mapel.php"><< Kembali</a>
</p>
</body>
</html>