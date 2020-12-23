<?php
if(isset($_POST['simpan'])){ 
    $kd_mapel=$_POST['kd_mapel'];
    $mapel=$_POST['nama_mapel'];
    $semester=$_POST['semester'];
    $kd_kelas=$_POST['kd_kelas'];
    $id_prodi=$_POST['id_prodi'];
    include "config.php";
    $sql="insert into mapel (kd_mapel,nama_mapel,semester,kd_kelas,id_prodi) values ('$kd_mapel','$mapel','$semester','$kd_kelas','$id_prodi')";
    //$simpan=mysql_query($sql); 
    $simpan=mysqli_query($koneksi,$sql);

    
    echo "<script> alert('Data Berhasil di Simpan !') </script>";
}
?>
<meta http-equiv="refresh" content="1;url=mapel.php">