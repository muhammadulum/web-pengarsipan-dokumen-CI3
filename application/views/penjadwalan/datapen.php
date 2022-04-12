<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Penjadwalan Kegiatan
  </div>
  <div class="card-body">
   <?= $this->session->flashdata('message'); ?>
  	<a href="<?= base_url('penjadwalan/tambah'); ?>"class="btn btn-success mb-3">Input Kegiatan</a>

	  <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data penjadwalan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Departemen</th>
    		<th>Nama Kegiatan</th>
    		<th>Tanggal Kegiatan</th>
    		<th>Keterangan</th>
			<th>Aksi</th>
			<th>
				
			</th>

    	</tr>
		
		
		<?php $no=1; foreach ($hasil as $q): ?>

		<tr>
	
		<tr>
		<td><?=$no++?></td>
		<td><?php echo $q->nama_departemen ?></td>
		<td><?php echo $q->nama_kegiatan ?></td>
		<td><?php echo $q->tanggal_kegiatan ?></td>
		<td><?php echo $q->keterangan ?></td>
		<td>
		<td>
		<a href="<?php echo base_url()?>penjadwalan/update/<?php echo $q->id_penjadwalan; ?>" class="btn btn-success" role="button">Update</a>
			<a href="<?php echo base_url()?>penjadwalan/hapus/<?php echo $q->id_penjadwalan; ?>" class="btn btn-danger" role="button" onclick="return confirm ('Apakah anda yakin')">Delete</a>
		</td>
	</tr>
	<?php endforeach; ?>
    </table>
  </div>
  </div>
