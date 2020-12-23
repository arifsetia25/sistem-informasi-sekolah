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
color:white;
background:green;
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
color:green;
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
<body>
    <div class="atas">
<div class="atas-tengah">
<table width="100%">
<tr>
<td width="250px"><b class="logo">SMK NEGERI 1 MAJALENGKA</b></td>
<td align="right">
<a href="siswa.php" target="tengah" class="menu">List Siswa</a>
<a href="guru.php" target="tengah" class="menu">List Guru</a>
<a href="kelas.php" target="tengah" class="menu">Kelas</a>
<a href="mapel.php" target="tengah" class="menu">Mapel</a>
<a href="jurusan.php" target="tengah" class="menu">Jurusan</a>
<a href="nilai_guru.php" target="tengah" class="menu">Nilai</a>
<a href="index_login.php" class="menu">Login</a>
</td>
</tr>
</table>
</div> 
</div>
<div class="tengah">
<iframe src="guru.php" frameborder="no" name="tengah">
</iframe>
</div>
<p align="center" class="foot">Copyright &copy 2020 By. Arif</p>

</body>
</html>