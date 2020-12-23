<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Nilai</title>
<style type="text/css">
*{
margin:0;
padding:0;
}
.atas{
width:100%;
padding:20px 0px 0px 0px;
color:black;
background:pink;
}
.atas-tengah{
width:950px;
padding:20px 25px;
margin:0px auto;
background:#eee;
border-radius:10px 10px 0px 0px;
}
.menu{
padding:10px 20px;
background:black;
border-radius:5px;
color:pink;
margin:10px 1px 10px 1px;
text-decoration: none;
font:14px "Calibri";
}
.menu:hover{
background:blue;
}
.tengah{
width:970px;
padding:15px;
margin:0px auto;
border-radius:0px 0px 10px 10px;
font:14px "Calibri";
box-shadow: 0px 0px 5px 0px #333;
}
iframe{
width:100%;
height:450px;
}
.logo{
font:28px "Calibri";
color:black;
font-weight: bold;
text-shadow: 2px 2px #ccc;
}
.foot{
font:14px "Calibri";
color:#666;
padding:10px 0px;
} 
</style>
</head>
<body>
<?php

if(isset($_SESSION['username'])&& isset($_SESSION['password'])){
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
    //menghubungkan ke database
	$koneksi=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($koneksi,"penugasan");
	$sql="SELECT*FROM user where username = '$username' and password = '$password'";
	$result=mysqli_query($koneksi,$sql);
	if($data=mysqli_fetch_array($result))
	{



?>	
<div class="atas">
<div class="atas-tengah">
<table width="100%">
<tr>
<td width="250px"><b class="logo">SMK NEGERI 1 MAJALENGKA</b></td>
<td align="center">
	<big><?php echo "Selamat Datang  : ".$_SESSION['username']?></big></br>	
</td>
<td align="right">
<a href="matpel.php" target="tengah"  class="menu">Mata Pelajaran</a>
<a href="nilai.php" target="tengah" class="menu">Nilai</a>
<a href="logout_guru.php" class="menu">Logout</a>
</td>
</tr>
</table>
</div> 
</div>
<div class="tengah">
<iframe src="" frameborder="no" name="tengah">
</iframe>
</div>
<p align="center" class="foot">Copyright &copy 2020 By. Arif</p>
<?php
  }
  else

  {
  	echo "<div class=\"pesan\">Maaf Username atau Password Salah !<p>";
    echo "Silahkan <a href=\"login_guru.php\" class=\"link\">Login</a> Kembali !</div>";
  }

}else {
	echo "<div class=\"pesan\">Anda Belum Login";
    echo "<a href=\"login.php\" class=\"link\">Silahkan Login</a> !</div>";
}
?>
</body>
</html>