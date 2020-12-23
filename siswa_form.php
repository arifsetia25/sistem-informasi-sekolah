<!DOCTYPE html>
<html>
<head>
    <title> Form Data Siswa </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="siswa_form_simpan.php">
<table>
    <tr>
        <th colspan="2"><h2> Form Siswa </h2></th>
    </tr>
    <tr>
        <td width="100px"> NIS </td>
        <td><input type="text" name="nis" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')"></td>
    </tr>
    <tr>
        <td> Nama Siswa </td>
        <td><input type="text" name="nama_siswa" required></td>
    </tr>
    <tr>
        <td> Nilai Akhir </td>
        <td><input type="text" name="nilai_akhir"></td>
    </tr>
    <tr>
    	<td> Username </td>
    	<td><input type="text" name="username"></td>
    </tr>
    <tr>
    	<td> Password </td>
    	<td><input type="password" name="password"></td>
    </tr>
    <tr>
    	<td> Kode Kelas </td>
    	<td>
    	<select name="kd_kelas">
    		 <?php 
                include "config.php";
                $query="select * from kelas";
                $result = mysqli_query($koneksi,$query);
                while ($qtabel = mysqli_fetch_assoc($result)) {
                
                echo "<option>".$qtabel['kd_kelas']. "</option>";
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
    <a href="siswa.php"><< Kembali</a>
</p>
</body>
</html>