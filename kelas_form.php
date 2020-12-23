<!DOCTYPE html>
<html>
<head>
    <title> Form Data Kelas </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="kelas_simpan.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Kelas </h2></th>
    </tr>
    <tr>
        <td width="100px"> Kode Kelas </td>
        <td><input type="text" name="kd_kelas" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
        <td> Kelas </td>
        <td><input type="text" name="kelas_prodi" required></td>
    </tr>
     
    <tr>
        <td></td>
        <td><input type="submit" name="simpan" value=" Simpan "> <input type="reset" value="Clear"></td>
    </tr>
</table>
</form>
<p align="center">
    <a href="kelas.php"><< Kembali</a>
</p>
</body>
</html>