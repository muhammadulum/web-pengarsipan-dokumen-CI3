<?php

	// buat koneksi database
	
	$server 	= "localhost"; //nama server
	$user		= "root"; //nama database server
	$pass		= "root"; //pass database server
	$database 	= "dbarsip"; //nama database

	$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));




?>