<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>E- Arsip & Penjadwalan Login</title>

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>
  <body >
  
    <form class="form-signin" method="post" action="<?= base_url('auth'); ?>">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/hum.png"  width="120" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Login E- Arsip & Penjadwalan </h1>
    <p> Silakan Masukan Username dan Password , Sebelum Masuk Ke dalam Sistem E-Arsip</p>
    <?= $this->session->flashdata('message'); ?>
  </div>

  <div class="form-label-group">
  <input type="text" class="form-control form-control-user" id="email" name="email"
                   placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
    <?= form_error('email','<small calass"text-danger plg-3">','</small>'); ?>
    <label for="email"> Email</label>
  </div>

  <div class="form-label-group">
  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  <?= form_error('password','<small calass"text-danger plg-3">','</small>'); ?>
    <label for="password">Password</label>
  </div>


  <p>Belum mendaftar? Silahkan klik <a href="<?= base_url('auth/registration'); ?>">daftar disini.</a></p>
                </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2020 by. Humanika@akprind</p>
</form>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;        
        if (username != "" && password!="") {
            return true;
        }else{
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
 
</script>
</body>
</html>
