<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Arsip Surat Keluar
  </div>
  <div class="card-body">
  <?= $this->session->flashdata('message'); ?>
  	<a href="<?= base_url('surat_keluar/tambah'); ?>"class="btn btn-success mb-3">Input Data Baru</a>

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
    		<th>No Surat</th>
    		<th>Tanggal Surat</th>
			<th>Perihal</th>
			<th>Tujuan</th>
			<th>File</th>
			<th>Aksi</th>
			<th>
				
			</th>

    	</tr>
		
		
		<?php $no=1; foreach ($hasil as $q): ?>

		<tr>
	
		<tr>
		<td><?=$no++?></td>
		<td><?php echo $q->no_surat ?></td>
		<td><?php echo $q->tanggal_surat?></td>
		<td><?php echo $q->perihal?></td>
		<td><?php echo $q->tujuan?></td>
		
		<td>
		<?php
                    //uji apakah data nya ada atau tidak
                    if (empty('<?php echo $q->file ?>')) {
                        echo " - ";
                    }else{
                        ?>
                        <a href="<?= base_url(); ?>file/<?php echo $q->file ?>" target="$_blank">Lihat File</a>
                        <?php 
                    }

                ?>
		<td>
		<a href="<?php echo base_url()?>surat_keluar/update/<?php echo $q->id_surat_keluar; ?>" class="btn btn-success" role="button">Update</a>
			<a href="<?php echo base_url()?>surat_keluar/hapus/<?php echo $q->id_surat_keluar; ?>" class="btn btn-danger" role="button" onclick="return confirm ('Apakah anda yakin')">Delete</a>
		</td>
	</tr>
	<?php endforeach; ?>
    </table>
  </div>
  </div>
