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
    <form class="form-signin" method="post" action="<?= base_url('auth/registration'); ?>">
  <div class="text-center mb-4">
    <img class="mb-4" src="<?= base_url(); ?>assets/hum.png"  width="120" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Daftar E- Arsip & Penjadwalan </h1>
    <p> Form Pendaftaran </p>
  </div>

  <div class="form-label-group">
    <input type="text" id="username" name="name" class="form-control" placeholder="name" required autofocus>
    <?= form_error('name','<small calass"text-danger plg-3">','</small>'); ?>
    <label for="name">Nama</label>
  </div>

  <div class="form-group">
                    <label>Pilih Role</label>
                    <select class="form-control" name="role_id" id="role_id" required>
                        <?php foreach($role as $q):?>
                        <option value="<?php echo $q->role_id;?>"><?php echo $q->role;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>

  <div class="form-label-group">
    <input type="text" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <?= form_error('email','<small calass"text-danger plg-3">','</small>'); ?>
    <label for="email">Email</label>
  </div>

  <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1','<small calass"text-danger plg-3">','</small>'); ?>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
              </div>
            </div><div>
  <input type="hidden" id="level" name="level" value="user" />
            </div>


  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <p>Sudah punya akun <a href="<?= base_url('auth'); ?>">Login.</a></p>
  
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2020 by. Humanika@akprind</p>
</form>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;  
        var level = document.getElementById("level").value;   
        if (username != "" && password!= "") {
            return true;
        }else{
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
  </script> 
</body>
</html>
