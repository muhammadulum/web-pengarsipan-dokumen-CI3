<?php
// mengatasi jika user langsung masuk tanpa login
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
  echo "<script> alert('Maaf, untuk akses halaman ini, silakan Login terlebih dahulu !!');
  document.location='index.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>HUMANIKA</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/custom.css">
   <link rel="stylesheet" href="C:/xampp/htdocs/arsiphumanika/css/tam.css">


   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <div class="container ">
               <a class="navbar-brand" href="index.html"><img src="images/logoh.png" alt="image" height="60" width="90" ></a>
               <div class="right-header">
                  <div class="header-info">

                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">humanika@akprind.ac.id</a></span> 
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>    
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a data-scroll href="#about">About us</a></li>

            <li><a href="">Arsip</a>
                <ul class="sub1">
                    <li><a href="modul/surat_masuk_user/datauser.php">Surat Masuk</a></li>
                    <li><a href="">Surat Keluar</a></li>
                    <li><a href="">LPJ</a></li>
                    <li><a href="">Proposal</a></li>
                </ul>
             </li>
                        <li><a data-scroll href="#doctors">Penjadwalan</a></li>
                        <li><a data-scroll href="#price">Inventaris</a></li>
                        <li><a data-scroll href="#getintouch">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">

                     <div class="input-group col-md-12">
                       
                        <span class="input-group-btn">
                            <p>Selamat datang, <?php echo $_SESSION['username']; ?><a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/ftstudio.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="images/icon-logo-h.png" alt="#" /></span></span>
                        <a href="" class="typewrite"  data-period="2000" data-type='[ "Welcome to E-Arsip HUMANIKA " ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
<div class="card mt-3">
  <div class="card-header bg-info text-white ">

    Data Arsip Surat Masuk
  </div>
  <div class="card-body">
    <form action="" method="">
  <input class="cari" type="text" name="cari" placeholder="Cari..."> 
  <input class="button" type="submit" value="Cari" ><br><br>
  <strong>Cari berdasarkan nama instansi!</strong>
  </form></kekiri>

    </form>
    <br>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nomor Surat</th>
    		<th>Tanggal Surat</th>
    		<th>Tanggal Terima</th>
    		<th>Perihal</th>
    		<th>Departemen / Tujuan</th>
    		<th>Nama Instansi</th>
    		<th>File</th>
    	</tr>
        <?php 
        include_once("C:/xampp/htdocs/arsiphumanika/config/koneksi.php");
         if(isset($_GET['cari'])){
       $cari = $_GET['cari'];
       $tampil=mysqli_query($koneksi,"SELECT*FROM tbl_surat_masuk where nama_instansi LIKE '%".$cari."%'");}
        else{ $tampil = mysqli_query($koneksi, "SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
                WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen");       
        }    
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) :
         ?>
         <tr>
            <td><?=$no++?></td>
            <td><?=$data['no_surat']?></td>
            <td><?=$data['tanggal_surat']?></td>
            <td><?=$data['tanggal_diterima']?></td>
            <td><?=$data['perihal']?></td>
            <td><?=$data['nama_departemen']?></td>
            <td><?=$data['nama_instansi']?></td>
            <td>
                <?php
                    //uji apakah data nya ada atau tidak
                    if (empty($data['file'])) {
                        echo " - ";
                    }else{
                        ?>
                        <a href="file/<?=$data['file']?>" target="$_blank">Lihat File</a>
                        <?php 
                    }

                ?>
            </td>
            
        </tr>
    <?php endwhile;
    ?>


    	<!--<?php
    		$tampil=mysqli_query($koneksi, "
    			SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
    			WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['no_surat']?></td>
    		<td><?=$data['tanggal_surat']?></td>
    		<td><?=$data['tanggal_diterima']?></td>
    		<td><?=$data['perihal']?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td><?=$data['nama_instansi']?></td>
    		<td>
    			<?php
    				//uji apakah data nya ada atau tidak
    				if (empty($data['file'])) {
    					echo " - ";
    				}else{
    					?>
    					<a href="file/<?=$data['file']?>" target="$_blank">Lihat File</a>
    					<?php 
    				}

    			?>
    		</td>
    		<td>
    			<a href="?halaman=surat_masuk&hal=edit&id=<?=$data['id_surat_masuk']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=surat_masuk&hal=hapus&id=<?=$data['id_surat_masuk']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>-->
    </table>
  </div>
</div>