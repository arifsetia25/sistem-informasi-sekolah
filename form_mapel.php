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