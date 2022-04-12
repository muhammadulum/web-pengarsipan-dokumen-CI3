<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Load file library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3>Update Departemen id ke <?php echo $ambil->id_departemen; ?></h3>
    <form action="<?php echo base_url()?>departemen/simpan_update" method="post">
       
        <input type="hidden" name="id_departemen"  value="<?php echo $ambil->id_departemen; ?>" />
       
        <div class="form-group">
            <label>Nama Departemen:</label>
            <input type="text" name="nama_departemen" class="form-control" value="<?php echo $ambil->nama_departemen; ?>" placeholder="Nama" />
        </div>     
        
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
</body>
</html>