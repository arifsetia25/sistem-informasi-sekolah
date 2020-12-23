<!DOCTYPE html>
<html>
<head>
    <title> Form Data Guru </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="form_guru_simpan.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Guru </h2></th>
    </tr>
    <tr>
        <td width="100px"> NIP Guru</td>
        <td><input type="text" name="nip" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
        <td> Nama Guru </td>
        <td><input type="text" name="nama_guru" required></td>
    </tr>
     <tr>
        <td> Alamat </td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td> Username </td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td> Password </td>
        <td><input type="Password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="simpan" value=" Simpan "> <input type="reset" value="Clear"></td>
    </tr>
</table>
</form>
<p align="center">
    <a href="guru.php"><< Kembali</a>
</p>
</body>
</html>