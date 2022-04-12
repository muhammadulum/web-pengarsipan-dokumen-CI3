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
    <h3>Update Data Proposal id ke <?php echo $ambil->id_proposal; ?></h3>
    <!-- <form action="<?php echo base_url()?>surat_proposal/simpan_update" method="post"> -->
    <?php echo form_open_multipart('surat_proposal/simpan_update');?>
    
        <input type="hidden" name="id_proposal"  value="<?php echo $ambil->id_proposal; ?>" />
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
	    <label for="file">FILE</label>
	    <input type="file" class="form-control" id="file" name="userfile">
	  </div>
    <input type="hidden" name="filelama" value="<?=$ambil->file; ?>">

        
        <button type="submit" class="btn btn-primary">Update</button>
       
    </form>
</div>
</body>
</html>