<?php
session_start();
//$con = mysqli_connect('localhost','root');
//$db = mysqli_select_db($con, 'account');

include ('Databes.php');

$username =$_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['tipe_user']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['tipe_user'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['tipe_user']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['tipe_user'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:index2.html");
 
	}else{
 
		// alihkan ke halaman login kembali
		echo "error";
	}	
}else{
	header("location:form2.php?pesan=gagal");
}
 
?>