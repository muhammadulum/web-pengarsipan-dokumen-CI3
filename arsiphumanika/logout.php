<?php
session_start();
//hapus session yang sudah di set
unset($_SESSION['id_user']);
unset($_SESSION['username']);


session_destroy();
echo "<script> alert('Anda Telah Keluar dari Program');
	document.location='index.php'; </script>";;



?>