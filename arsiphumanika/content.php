<?php

	@$halaman = $_GET['halaman']; 

	if($halaman == "departemen")
	{
		//tampilkan halaman departemen 
		//echo "Tampil Halaman Modul Departemen ";
		include "modul/departemen/departemen.php";
	} 
	elseif ($halaman == "surat_masuk") {
		// tampilkan halaman surat masuk 
		//echo "Tampil Halaman Modul Surat Masuk";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus" || @$_GET['hal'] == "cari") {
			include "modul/suratmasuk/forma.php";
		}else {
			include "modul/suratmasuk/data.php";
		}
	}
	elseif ($halaman == "surat_keluar") {
		//tampilkan halaman surat keluar
		//echo "Tampil Halaman Modul Surat Keluar";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/surat_keluar/formke.php";
		}else {
			include "modul/surat_keluar/datask.php";
		}
	}
	elseif ($halaman == "arsip_lpj") {
		//tampilkan halaman arsip lpj
		//echo "Tampil Halaman Modul LPJ";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/arsip_lpj/formlpj.php";
		}else {
			include "modul/arsip_lpj/datalpj.php";
		}

	}
	elseif ($halaman == "proposal") {
		//tampilkan halaman arsip spj
		//echo "Tampil Halaman Modul proposal";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/proposal/formpro.php";
		}else {
			include "modul/proposal/datapro.php";
		}	
	}
	elseif ($halaman == "penjadwalan") {
		//tampilkan halaman penjadwalan
		//echo "Tampil Halaman penjadwalan";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/penjadwalan/formpen.php";
		}else {
			include "modul/penjadwalan/datapen.php";
		}	
	}
	elseif ($halaman == "inventaris") {
		//tampilkan halaman inventaris
		//echo "Tampil Halaman Modul inventaris";
		if (@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus") {
			include "modul/inventaris/formin.php";
		}else {
			include "modul/inventaris/datain.php";
		}	
	}else{

		//echo "Tampil Halaman Home";
		include "modul/home.php";
	}

?>