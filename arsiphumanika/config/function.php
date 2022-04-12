<?php
	//persiapan function untuk upload file/foto
	function upload()
	{

		//deklarasikan variabel kebutuhan
		$namafile = $_FILES['file']['name'];
		$ukuranfile = $_FILES['file']['size'];
		$error = $_FILES['file']['error'];
		$tmpname = $_FILES['file']['tmp_name'];


		//cek apakah yang diipload adalah file/gambar
		$eksfilevalid =['jpg','jpeg','png','pdf','doc'];
		$eksfile = explode('.', $namafile);
		$eksfile = strtolower(end($eksfile));

		if (!in_array($eksfile, $eksfilevalid)) {
			echo "<script> alert('Yang anda Upload bukan file/gambar !!')</script>";
			return false;
		}

		//cek jika ukuran file terlalu besar
		if ($ukuranfile > 10000000) {
			echo "<script> alert('Ukuran File anda teralalu besar')</script>";
			return false;
		}

		//jika lolos pengecekan , file siap di upload
		//generate nama file baru
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $eksfile;

		move_uploaded_file($tmpname, 'file/'.$namafilebaru);
		return $namafilebaru;
	}

?>