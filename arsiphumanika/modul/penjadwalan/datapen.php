<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Penjadwalan Kegiatan
  </div>
  <div class="card-body">
  	<a href="?halaman=penjadwalan&hal=tambahdata"class="btn btn-success mb-3">Input Kegiatan</a>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Departemen</th>
    		<th>Nama Kegiatan</th>
    		<th>Tanggal Kegiatan</th>
    		<th>Keterangan</th>
    		<th>Aksi</th>

    	</tr>
    	<?php
    		$tampil=mysqli_query($koneksi, "
    			SELECT tbl_penjadwalan.*, tbl_departemen.nama_departemen FROM tbl_penjadwalan,tbl_departemen
    			WHERE tbl_penjadwalan.id_departemen = tbl_departemen.id_departemen");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td><?=$data['nama_kegiatan']?></td>
    		<td><?=$data['tanggal_kegiatan']?></td>
    		<td><?=$data['keterangan']?></td>
    		<td>
    			<a href="?halaman=penjadwalan&hal=edit&id=<?=$data['id_penjadwalan']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=penjadwalan&hal=hapus&id=<?=$data['id_penjadwalan']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
