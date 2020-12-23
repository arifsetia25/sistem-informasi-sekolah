<?php
if(isset($_POST['simpan'])){ 
    $nip=$_POST['nip'];
    $nama=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    include 'config.php';
    
    $sql="insert into guru values ('$nip','$nama','$alamat')";
   
    $simpan=mysqli_query($koneksi,$sql);

    $sqlu="insert into user (username,password,usertype,foreignid) values ('$username','$password','guru','$nip')";
    $save=mysqli_query($koneksi,$sqlu);

    echo "<script> alert('Data Berhasil di Simpan !') </script>";
}
?>
<meta http-equiv="refresh" content="2;url=guru.php">