<?php
if(isset($_POST['simpan'])){ 
    $nis=$_POST['nis'];
    $nama=$_POST['nama_siswa'];
    $na=$_POST['nilai_akhir'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $kd_kelas=$_POST['kd_kelas'];
    include 'config.php';
    
    $sql="insert into siswa values ('$nis','$nama','$na','$kd_kelas')";
   
    $simpan=mysqli_query($koneksi,$sql);

    $sqlu="insert into user (username,password,usertype,foreignid) values ('$username','$password','siswa','$nis')";
    $save=mysqli_query($koneksi,$sqlu);

    echo "<script> alert('Data Berhasil di Simpan !') </script>";
}
?>
<meta http-equiv="refresh" content="2;url=siswa.php">