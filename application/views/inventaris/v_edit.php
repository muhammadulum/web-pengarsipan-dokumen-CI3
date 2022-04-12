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
    <h3>Update Inventaris id ke <?php echo $ambil->id_inventaris; ?></h3>
    <form action="<?php echo base_url()?>inventaris/simpan_update" method="post">
       
        <input type="hidden" name="id_inventaris"  value="<?php echo $ambil->id_inventaris; ?>" />
       
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $ambil->nama_barang; ?>" placeholder="Nama" />
        </div>


        <div class="form-group">
            <label>Jumlah:</label>
            <input type="text" name="jumlah" class="form-control" value="<?php echo $ambil->jumlah; ?>" placeholder="j" />
        </div>
        

        <div class="form-group">
            <label>kondisi:</label>
            <input type="text" name="kondisi" class="form-control" value="<?php echo $ambil->kondisi; ?>" placeholder="Nama" />
        </div>
        

        <div class="form-group">
            <label>keterangan:</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $ambil->keterangan; ?>" placeholder="Nama" />
        </div>
        
        
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
</body>
</html>