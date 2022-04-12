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
    <h3>Update Data Penjadwalan id ke <?php echo $ambil->id_penjadwalan; ?></h3>
    <form action="<?php echo base_url()?>penjadwalan/simpan_update" method="post">
    
        <input type="hidden" name="id_penjadwalan"  value="<?php echo $ambil->id_penjadwalan; ?>" />
        <div class="form-group">
                    <label>Nama Departemen</label>
                    <select class="form-control" name="id_departemen" id="id_departemen" value="<?php echo $hasil->id_departemen;?>">
                        <?php foreach($hasil as $q):?>
                        <!-- <option value="<?php echo $q->id_departemen;?>"selected><?php echo $q->nama_departemen;?></option> -->
                        <option value="<?php echo $q->id_departemen ?>" <?php if($q->id_departemen == $ambil->id_departemen) echo 'selected'; ?>><?php echo $q->nama_departemen ?></option>
                        <?php endforeach;?>
                    </select>
                  </div>

	  
	  <div class="form-group">
	    <label for="nama_kegiatan">Nama Kegiatan</label>
	    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?php echo $ambil->nama_kegiatan; ?>">
	  </div>

	  <div class="form-group">
	    <label for="tanggal_kegiatan">tanggal_kegiatan</label>
	    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?php echo $ambil->tanggal_kegiatan; ?>">
	  </div>

	  <div class="form-group">
	    <label for="keterangan">Keterangan</label>
	    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $ambil->keterangan; ?>">
	  </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
       
    </form>
</div>
</body>
</html>