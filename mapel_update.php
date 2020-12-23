<?php  
if(isset($_POST['simpan'])){ 
    $kd_mapel=$_POST['kd_mapel'];
    $mapel=$_POST['nama_mapel'];
   
    include "config.php";
    $sql="UPDATE mapel SET kd_mapel='$kd_mapel', nama_mapel='$mapel'  WHERE kd_mapel = '$kd_mapel'";
    $update=mysqli_query($koneksi,$sql); //$update=mysqli_query($koneksi,$sql);
    echo "<script> alert('Data Berhasil di Edit !') </script>";
}
?>
<meta http-equiv="refresh" content="1;url=mapel.php">