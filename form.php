<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>สมัครสมาชิก</title>
</head>
<body>
	<?
		$ch = $_GET['a'];
		if($ch==1){echo "<h4><font color='red'>*** กรุณากรอกข้อมูลให้ครบ *** </font></h4>" ;}
	?>
	<fieldset style="border-radius: 5px; width: 300px;">
		<legend>** Register **</legend>
		<form action="save.php" method="post">
		<table>
			<tr><td>ชื่อ</td><td>: <input type="text" name="name"></td></tr>
			<tr><td>นามสกุล</td><td>: <input type="text" name="lname"></td></tr>
			<tr><td>Password</td><td>: <input type="password" name="pass"></td></tr>
			<tr><td>Re-password</td><td>: <input type="password" name="rpass"></td></tr>
			<tr><td>เบอร์โทร</td><td>: <input type="text" name="tel"></td></tr>
			<tr><td>Email</td><td>: <input type="text" name="email"></td></tr>
			<tr><td>เลขบัตรประชาชน</td><td>: <input type="text" name="idCard"></td></tr>
			<tr><td>อายุ</td><td>: <input type="number" name="age" value="1" max="100" min="1" step="1"></td></tr>
			<tr><td>เพศ</td>
				<td>
					: <select name="sex">
						<option value="ชาย">ชาย</option>
						<option value="หญิง">หญิง</option>
					</select>
				</td>
			</tr>
			<tr><td colspan="2" align="center"><input type="submit" name="sm" value="save" style="width: 100px"></td></tr>
		</table>
	</fieldset>
</body>
</html>