<?php
session_start();
$user=$_POST['username'];
$sandi=$_POST['password'];

$_SESSION['username']=$user;
$_SESSION['password']=$sandi;

?>
<meta http-equiv="refresh" content="2;url=index_siswa.php">