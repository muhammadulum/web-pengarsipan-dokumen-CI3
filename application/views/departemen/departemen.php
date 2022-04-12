
<div class="card">
  <div class="card-header bg-info text-white mt-3">
    Form Data Departemen
  </div>
  <div class="card-body">
  <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url('departemen/tambah_aksi'); ?>">
	  <div class="form-group">
	    <label for="nama_departemen">Nama Departemen</label>
	    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen">

	  </div>
	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>

<div class="card">
  <div class="card-header bg-info text-white mt-3">
    Data Departemen
  </div>
  <div class="card-body">
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nama Departemen</th>
			<th>Aksi</th>
			<th></th>
    	</tr>
		

<?php $no=1;foreach ($hasil as $q): ?>

	<tr>
		
	<tr>
    		<td><?=$no++?></td>
    		<td><?php echo $q->nama_departemen ?></td>
    		<td>
    		<td>
			<a href="<?php echo base_url()?>departemen/update/<?php echo $q->id_departemen; ?>" class="btn btn-success" role="button">Update</a>
			<a href="<?php echo base_url()?>departemen/hapus/<?php echo $q->id_departemen; ?>" class="btn btn-danger" role="button" onclick="return confirm ('Apakah anda yakin')">Delete</a>
    		</td>
    	</tr>
<?php endforeach; ?>


    	
    </table>
  </div>
</div>