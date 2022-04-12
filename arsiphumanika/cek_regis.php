<?php 
include "config/koneksi.php";
 
$username = $_POST['username'];
$password = ($_POST['password']);
$level = $_POST['level'];


 
$sql = "INSERT INTO tbl_user VALUES(null,'$username','$password','$level')";



if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Pendaftaran Berhasil'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}


 
?>