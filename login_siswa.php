<!DOCTYPE html>
<html>
<head>
	<title>LOGIN SISWA</title>
	<style type="text/css">
		table{
			width: 200px;
			height: 200px;
			box-shadow: 1px 0px 0px 10px black;
			padding: 5px;
			margin: auto;
			border-radius: 20px;
			background: green;
		}
		th{
			font: 25px "Calibri";
			color: black;
		}
		input[type="text"],input[type="password"]{
			width: 210px;
			text-align: center;
			padding: 5px;
			font: 14px "Calibri";
		}
		input[type="submit"]{
			width: 222px; 
			text-align: center;
			padding: 5px;
			font: 14px "Calibri";
			background: black;
			color: red;
			border: none;
			border-radius: 3px;
		}
	</style>
</head>
<body>
<form method="POST" action="loginproses_guru.php">
   <table>
   	<tr>
   		<th>LOGIN SISWA</th>
   	</tr>
   	<tr>
   		<td><input type="text" name="username" placeholder="Username"></td>
   	</tr>
   	<tr>
   		<td><input type="password" name="password" placeholder="password"></td>
   	</tr>
   	<tr>
   		<td><input type="submit" name="login" value="LOGIN"></td>
   	</tr>
   </table>
</form>   
</body>
</html>