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
   <link rel="shortcut icon" href="images/human.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/human.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/tam.css">


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
               <a class="navbar-brand" href="#"><img src="images/logoh.png" alt="image" height="60" width="90" ></a>
               <div class="right-header">
                  <div class="header-info">

                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">humanika@akprind.ac.id</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 8:00am - 5:00pm</a></span>	
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
                        <li><a data-scroll href="<?= base_url('user'); ?>">Home</a></li>
                        <li><a data-scroll href="#about">About us</a></li>

            <li><a href="">Arsip</a>
                <ul class="sub1">
                    <li><a href="<?= base_url('surat_masuk_user'); ?>">Surat Masuk</a></li>
                    <li><a href="<?= base_url('surat_keluar_user'); ?>">Surat Keluar</a></li>
                    <li><a href="<?= base_url('lpj_user'); ?>">LPJ</a></li>
                    <li><a href="<?= base_url('proposal_user'); ?>">Proposal</a></li>
                </ul>
             </li>
                        <li><a data-scroll href="<?= base_url('penjadwalan_user'); ?>">Penjadwalan</a></li>
                        <li><a class="active" href="<?= base_url('inventaris_user'); ?>">Inventaris</a></li>
                        <li><a data-scroll href="#getintouch">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">

                     <div class="input-group col-md-12">
                       
                        <span class="input-group-btn">
                            <p>Selamat datang <a class="btn btn-danger btn-lg" href="<?= base_url('admin/logout'); ?>" role="button">Logout</a>
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
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#0060b1;">
                     <!-- <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>-->
                     <h3>Fungsi HUMANIKA</h3>
                     <p> Humanika adalah media pemersatu mahasiswa informatika di Institut Sains & Teknologi Akprind Yogyakarta
                        sekaligus sebagai koordinator kegiatan keilmuan dalam penalaran di luar kegiatan rutin kampus
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     
                     <h3>Alasan di Buat E-Arsip HUMANIKA</h3>
                     <div class="time-table-section">
                       <p>Aplikasi ini di buat untuk membantu pengurus dalam pengarsipan data serta penjadwalan agar lebih tertata rapi , terstruktur serta efisien.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <!-- <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>-->
                     <h3>Tujuan HUMANIKA</h3>
                     <p>Humanika sebagai wadah dari anggota demi mewujudkan satu asa,satu jiwa, dan satu semangat Informatika </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
              
               <h2>Data Inventaris</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-12">
               <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Inventaris.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

               <table class="table ">
    	<tr>
    		<th>No</th>
    		<th>Nama Barang</th>
    		<th>Jumlah</th>
    		<th>Kondisi</th>
    		<th>Keterangan</th>
			<th></th>
    	</tr>

		
            
    	
    	<?php $no=1;foreach ($hasil as $q): ?>

		<tr>

		<tr>
		<td><?=$no++?></td>
		<td><?php echo $q->nama_barang?></td>
		<td><?php echo $q->jumlah?></td>
		<td><?php echo $q->kondisi?></td>
		<td><?php echo $q->keterangan?></td>
		<td>
		</tr>
		<?php endforeach; ?>
    </table>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-12">
                  
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            
          
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>

	  
	 
	  

	  
    
      
       
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logoh.png" alt=""></a>
                     
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i>Ruang T.106, Jl. Kalisahak No.28,Komplek Balapan,Klitren, Gondokusuman, Yogyakarta 55222</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> humanika@akprind.ac.id</p>

                  </div>
               </div>

                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>Copyright 2020 - 2020 | Humanika@akprind.ac.id</p>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
