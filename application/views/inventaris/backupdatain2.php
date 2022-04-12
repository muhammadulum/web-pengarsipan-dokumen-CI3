
<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Inventaris
  </div>
  <div class="card-body">
  <?= $this->session->flashdata('message'); ?>
  	<a href="<?= base_url('inventaris/tambah'); ?>"class="btn btn-success mb-3">Tambah Data </a>
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
			<a href="" class ="btn btn-success" >Edit </a>
			<form action="<?= base_url('inventaris/hapus'); ?>" method="post">
			<input type="hidden" name="id_inventaris"value="<?php echo $q->id_inventaris ?>">
			<button class="btn btn-danger" onclick="return confirm ('Apakah anda yakin')">
			
			<i class="fa fa-trash"></i>Hapus</button> 
			</form>
		</td>
		</tr>
		<?php endforeach; ?>
    </table>
  </div>
</div>