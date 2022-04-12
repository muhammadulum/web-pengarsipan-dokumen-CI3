<?php
session_start();
include "config/koneksi.php";

//contoh login sederhana

//password diamankan dengan enkripsi kriptografi md5
@$pass =($_POST['password']);

//mysqli_escape_string fungsinya untuk mengamankan karakter aneh yang diinputkan user, seperti sql injection

@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);


$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' and password='$password' ");

$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login); 
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		
		// alihkan ke halaman dashboard admin
	echo "<script>alert('Login Berhasil'); window.location='admin.php';</script>";
 
	// cek jika user login sebagai user
	}

	else if($data['level']=="user"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "user";
		
		// alihkan ke halaman dashboard admin
	echo "<script>alert('Login Berhasil'); window.location='index_user.php';</script>";
}
}else{
		echo "<script>alert('Login Gagal ! masukan username / password yang benar !!'); window.location='index.php';</script>";	
}
 
?>