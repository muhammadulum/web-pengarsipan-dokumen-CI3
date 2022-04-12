<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Arsip Surat Keluar
  </div>
  <div class="card-body">
  	<a href="?halaman=surat_keluar&hal=tambahdata"class="btn btn-success mb-3">Tambah Data </a>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nomor Surat</th>
    		<th>Tanggal Surat</th>
    		<th>Perihal</th>
    		<th>Tujuan</th>
    		<th>File</th>
    		<th>Aksi</th>
    	</tr>
    	<?php
    		$tampil=mysqli_query($koneksi, "SELECT * from tbl_surat_keluar order by id_surat_keluar asc");
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['no_surat']?></td>
    		<td><?=$data['tanggal_surat']?></td>
    		<td><?=$data['perihal']?></td>
    		<td><?=$data['tujuan']?></td>
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
    			<a href="?halaman=surat_keluar&hal=edit&id=<?=$data['id_surat_keluar']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=surat_keluar&hal=hapus&id=<?=$data['id_surat_keluar']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>