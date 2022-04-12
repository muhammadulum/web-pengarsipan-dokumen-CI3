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
    <form class="form-signin" method="post" action="cek_regis.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/hum.png"  width="120" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Daftar E- Arsip & Penjadwalan </h1>
    <p> Form Pendaftaran </p>
  </div>

  <div class="form-label-group">
    <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
    <label for="username">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="password">Password</label>
  </div>
  <div>
  <input type="hidden" id="level" name="level" value="user" />
            </div>


  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-<?=date('Y')?> by. Humanika@akprind</p>
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
