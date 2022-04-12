<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Arsip Proposal
  </div>
  <div class="card-body">
  	<a href="?halaman=proposal&hal=tambahdata"class="btn btn-success mb-3">Tambah Data </a>
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
    			SELECT tbl_proposal.*, tbl_departemen.nama_departemen FROM tbl_proposal,tbl_departemen
    			WHERE tbl_proposal.id_departemen = tbl_departemen.id_departemen");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td><?=$data['nama_kegiatan']?></td>
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
    			<a href="?halaman=proposal&hal=edit&id=<?=$data['id_proposal']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=proposal&hal=hapus&id=<?=$data['id_proposal']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>