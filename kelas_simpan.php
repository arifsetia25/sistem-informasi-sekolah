<?php
if(isset($_POST['simpan'])){ 
    $kd_kelas=$_POST['kd_kelas'];
    $kelas=$_POST['kelas_prodi'];
    
    include 'config.php';
    
    $sql="insert into siswa values ('$kd_kelas','$kelas')";
   
    $simpan=mysqli_query($koneksi,$sql);

    
    echo "<script> alert('Data Berhasil di Simpan !') </script>";
}
?>
<meta http-equiv="refresh" content="2;url=kelas.php">