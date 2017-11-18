<?
	$name=$_POST['name'];
	$lname=$_POST['lname'];	
	$tel=$_POST['tel'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];
	$email=$_POST['email'];
	$id=$_POST['idCard'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$c=0;
	if($name!=null&&$lname!=null&&$tel!=null&&$email!=null&&$sex!=null){
		if(strlen($tel)!=10||!is_numeric($tel)){echo "หมายเลขโทรศัพท์ไม่ถูกต้อง<br>"; $ch=1;}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){echo "อีเมลล์ไม่ถูกต้อง<br>"; $ch=1;}
		if($pass!=$rpass){echo "รหัสผ่านไม่ตรงกัน<br>"; $ch=1;}
		if(strlen($id)!=13||!is_numeric($id)){echo "เลขบัตรประชาชนไม่ถูกต้อง<br>"; $ch=1;}
		if($ch==1)echo "<meta http-equiv='refresh' content='3;url=form.php'>";
		else if($ch==0){
			echo "Save Success<br>
			<table>
				<tr><td>ชื่อ</td><td>: $name</td></tr>
				<tr><td>นามสกุล</td><td>: $lname</td></tr>
				<tr><td>เบอร์โทร</td><td>: $tel</td></tr>
				<tr><td>Email</td><td>: $email</td></tr>
				<tr><td>เลขบัตรประชาชน</td><td>: $id</td></tr>
				<tr><td>อายุ</td><td>: $age</td></tr>
				<tr><td>เพศ</td><td>: $sex</td></tr>
			</table>
			<button><a href='edit.php'>Edit Data</a></button>
			";}
			
		
	}
	else echo "<meta http-equiv='refresh' content='0;url=form.php?a=1'>";
?>