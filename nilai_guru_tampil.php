<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	include "config.php";
	$kd_mapel=$_GET['kd'];
	$sqlmp="select * from mapel where kd_mapel='$kd_mapel'";
//$resmp=mysql_query($sqlmp); 
	$resmp=mysqli_query($koneksi,$sqlmp);
	$datamp=mysqli_fetch_array($resmp);
	?>
	<h2>Daftar Nilai Mata Pelajaran : <?= $datamp['nama_mapel'] ?></h2>
	<table width="100%" cellpadding="5" cellspacing="1">
		<tr>
			<th width="30">No.</th>
			<th width="70">NIS</th>
			<th>Nama Siswa</th>
			<th width="60">UTS</th>
			<th width="60">UAS</th>
			<th width="60">TUGAS</th>
			<th width="60">NILAI AKHIR</th>
			<th width="120">Aksi</th>
		</tr>
		<?php
		$sql="select siswa.nis, siswa.nama_siswa, siswa.kd_kelas FROM siswa JOIN nilai ON nilai.nis=siswa.nis JOIN mapel ON nilai.kd_mapel=mapel.kd_mapel ";
		$result=mysqli_query($koneksi,$sql);
//$result=mysql_query($sql);
		$no=1;
		while($data=mysqli_fetch_array($result)){
//while($data=mysql_fetch_array($result)){
			$uts = $data['uts'];
			$uas = $data['uas'];
			$tugas = $data['tugas'];
			$na = ($uts+$uas+$tugas/3);
			?>
			<tr>
				<td class="garis-bawah"><?= $no ?>.</td>
				<td class="garis-bawah"><?= $data['nis'] ?></td>
				<td class="garis-bawah"><?= $data['nama_siswa'] ?></td>
				<td class="garis-bawah"><?= $uts ?></td>
				<td class="garis-bawah"><?= $uas ?></td>
				<td class="garis-bawah"><?= $tugas ?></td>
				<td class="garis-bawah"><?= round($na) ?></td>
				<td class="garis-bawah"><a href="nilai_edit.php?kd_mapel=<?= $data['kd_mapel'] ?>">Edit</a> <a href="nilai_delete.php?kd_mapel=<?= $data['kd_nilai'] ?>">Delete</a></td>
			</tr>
<!-- 			<pre><?php //print_r($data) ?></pre>
			 -->			<?php
			$no++;
		}
		?>

		 <p id="demo"></p>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("tambah").value;
                            document.getElementById("demo").innerHTML = x;
                        }
                    </script>
	</table>
	<p>
		<a href="nilai.php">Back</a>
	</p>
</body>
</html>
