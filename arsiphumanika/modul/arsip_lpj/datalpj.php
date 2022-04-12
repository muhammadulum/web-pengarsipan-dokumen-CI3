<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Arsip LPJ
  </div>
  <div class="card-body">
  	<a href="?halaman=arsip_lpj&hal=tambahdata"class="btn btn-success mb-3">Tambah Data </a>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Departemen</th>
    		<th>Nama Kegiatan</th>
    		<th>File</th>
    		<th>Aksi</th>
    	</tr>
    	<?php
    		$tampil=mysqli_query($koneksi, "
    			SELECT tbl_lpj.*, tbl_departemen.nama_departemen FROM tbl_lpj,tbl_departemen
    			WHERE tbl_lpj.id_departemen = tbl_departemen.id_departemen");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td><?=$data['nama_kegiatann']?></td>
    		<td>
    			<?php
    				//uji apakah data nya ada atau tidak
    				if (empty($data['file'])) {
    					echo " - ";
    				}else{
    					?>
    					<a href="file/<?=$data['file']?>" target="$_blank">Lihat File</a>
    					<?php 
    				}

    			?>
    		</td>
    		<td>
    			<a href="?halaman=arsip_lpj&hal=edit&id=<?=$data['id_lpj']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=arsip_lpj&hal=hapus&id=<?=$data['id_lpj']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>