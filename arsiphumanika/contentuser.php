<?php

	@$halaman = $_GET['halaman']; 

	if($halaman == "surat_masuk_user")
	{
		if ( @$_GET['hal'] == "cari") {
			include "modul/surat_masuk_user/datauser.php";
	} else{

		//echo "Tampil Halaman Home";
		include "modul/index_user.php";
	}

?>