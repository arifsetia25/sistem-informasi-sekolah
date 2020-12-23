<!DOCTYPE html>
<html>
<head>
    <title> Form Jurusan </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="jurusan_simpan.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Jurusan </h2></th>
    </tr>
    <tr>
        <td width="100px"> ID </td>
        <td><input type="text" name="id_prodi" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
        <td> Nama Jurusan </td>
        <td><input type="text" name="nama_prodi" required></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="simpan" value=" Simpan "> <input type="reset" value="Clear"></td>
    </tr>
</table>
</form>
<p align="center">
    <a href="jurusan.php"><< Kembali</a>
</p>
</body>
</html>