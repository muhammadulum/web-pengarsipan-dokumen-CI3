
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

    <title> E-Arsip HUMANIKA</title>
  </head>
  <body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">HUMANIKA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/index'); ?>">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('departemen/index'); ?>">Data Departemen </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false ">
                  Arsip
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?= base_url('surat_masuk'); ?>">Arsip Surat Masuk </a>
                  <a class="dropdown-item" href="<?= base_url('surat_keluar'); ?>">Arsip Surat Keluar </a>
                  <a class="dropdown-item" href="<?= base_url('surat_lpj'); ?>">Arsip LPJ </a>
                  <a class="dropdown-item" href="<?= base_url('surat_proposal'); ?>">Arsip Proposal </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('penjadwalan/index'); ?>"> Penjadwalan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('inventaris/index'); ?>">Inventaris </a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <a class="btn btn-danger btn-lg" href="<?= base_url('admin/logout'); ?>" role="button">Logout</a> </form>
          </div>
      </div>
        </nav>
        <!-- AKHIR MENU -->

        <!-- awal container -->
        <div class="container">