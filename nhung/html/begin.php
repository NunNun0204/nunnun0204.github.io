<?php 
$host="localhost";
$user="root";
$password="";
$db="demon";
mysql_connect($host,$user,$passwork);
mysql_select_db($db);
if(isset($_POST['name'])){
	$uname=$_POST['name'];
	$password=$_POST['password'];
	
	$sql="select * from login where user='".$uname."' and password='".$password."' limit 1";
	$result= mysql_query($sql);
	if(mysql_num_rows($result)==1){
		echo("thành công");
		exit();
	}
	else{
		echo("thất bại");
		exit();
	}
	
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập</title>
</head>

<body>
	<form action="php1.php" method="post">
	<table  align="center">
	<tr>
		<td bgcolor="#314EF7" colspan="2" align="center"><b><p>Đăng nhập</p></b></td>
	</tr>
		<tr>
		<td> Tên đăng nhập </td>
			<td><input name="name" type="text" placeholder="nhập tên đăng nhập" size="20px" name="txtname"></td>
		</tr>
		<tr>
			<td>Nhập mật khẩu</td>
			<td><input name="password" type="password" placeholder="nhập mật khẩu" size="20px" name="txtpassword"></td>
		</tr>	
		<tr>
		<td colspan="2" align="center"> 
			<input name="brdangnhap" type="submit" value="Đăng nhập"></td>
		</tr>
		<tr><td colspan="2" align="center">Không có tài khoản ?<br><a href="dangky.html"><input type="button" value=" ĐĂNG KÝ"></a>
			</td></tr>
		<tr>
			<td align="center" colspan="2"><a href="meowmeow.html"><input type="button" value="QUAY TRỞ LẠI TRANG CHỦ"></a></td></tr>
	</table>
		</form>
</body>
</html>
