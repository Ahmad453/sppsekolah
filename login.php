<!DOCTYPE html>
<html>
<head>
	<title>Login Aplikasi Pembayaran SPP</title>
	<link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>
<h1>Halaman Login Pembayaran Spp</h1>
<img src="image/logo.png"  width="150px" height="150px" style="display: block; margin: auto;">
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//variabel untuk menyimpan kiriman dari form
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user=='' || $pass==''){
		echo "Form belum lengkap!!";
	}else{
		include "koneksi.php";
		$sqlLogin = mysqli_query($konek, "SELECT * FROM admin 
						WHERE username='$user' AND password='$pass'");
		$jml = mysqli_num_rows($sqlLogin);
		$d=mysqli_fetch_array($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['login']	= true;
			$_SESSION['id']		= $d['idadmin'];
			$_SESSION['username']=$d['username'];
			
			header('location:./index.php');
		}else{
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
}
?>
<div class="kotak_login">
<p class="tulisan_login">Silahkan Login</p>
<form method="post" action="">
	<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
		<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
		<input type="submit" class="tombol_login" value="Login">
	</table>
</div>
</form>

</body>
</html>