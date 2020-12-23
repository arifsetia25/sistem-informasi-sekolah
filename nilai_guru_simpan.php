<?php 
include 'config.php';
$nis = $_POST['nis'];
$kd_matpel = $_POST['kd_matpel'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$nilai_akhir = ['nilai_akhir'];

	$sqlx = "insert into nilai (nis,kd_mapel,uts,uas,tugas,nilai_akhir) values ('$nis','$kd_mapel','$uts}', '$uas', 
	'$tugas','$nilai_akhir')";
	$simpan = mysqli_query($koneksi, $sqlx);
echo "Data Sudah Disimpan";
header('location:nilai_guru_tampil.php');

 ?>
