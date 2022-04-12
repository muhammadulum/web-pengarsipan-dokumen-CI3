
<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Inventaris
  </div>
  <div class="card-body">
  <?= $this->session->flashdata('message'); ?>
  	<a href="<?= base_url('inventaris/tambah'); ?>"class="btn btn-success mb-3">Tambah Data Inevntaris</a>

	  <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data proposal.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nama Barang</th>
    		<th>Jumlah</th>
    		<th>Kondisi</th>
    		<th>Keterangan</th>
			<th>Aksi</th>
			<th></th>
    	</tr>

		
            
    	
    	<?php $no=1;foreach ($hasil as $q): ?>

		<tr>

		<tr>
		<td><?=$no++?></td>
		<td><?php echo $q->nama_barang?></td>
		<td><?php echo $q->jumlah?></td>
		<td><?php echo $q->kondisi?></td>
		<td><?php echo $q->keterangan?></td>
		<td>
		<td>
			<!-- <a href="" class ="btn btn-success" >Edit </a> -->
			<a href="<?php echo base_url()?>inventaris/update/<?php echo $q->id_inventaris; ?>" class="btn btn-success" role="button">Update</a>
			<a href="<?php echo base_url()?>inventaris/hapus/<?php echo $q->id_inventaris; ?>" class="btn btn-danger" role="button" onclick="return confirm ('Apakah anda yakin')">Delete</a>
		</td>
		</tr>
		<?php endforeach; ?>
    </table>
  </div>
</div>