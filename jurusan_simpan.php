<?php
if(isset($_POST['simpan'])){ 
    $id_prodi=$_POST['id_prodi'];
    $prodi=$_POST['nama_prodi'];
   
    include "config.php";
    $sql="insert into prodi  values ('$id_prodi','$prodi')";
    //$simpan=mysql_query($sql); 
    $simpan=mysqli_query($koneksi,$sql);

    
    echo "<script> alert('Data Berhasil di Simpan !') </script>";
}
?>
<meta http-equiv="refresh" content="1;url=jurusan.php">