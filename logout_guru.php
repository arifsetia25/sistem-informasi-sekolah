<?php
session_start();
session_destroy();
echo "<script>alert('Logout Berhasil')</script>";
?>
<meta http-equiv="refresh" content="2;url=index.php">