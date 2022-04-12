<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Data Inventaris
  </div>
  <div class="card-body">
  	<a href="?halaman=inventaris&hal=tambahdata"class="btn btn-success mb-3">Tambah Data </a>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nama Barang</th>
    		<th>Jumlah</th>
    		<th>Kondisi</th>
    		<th>Keterangan</th>
            <th>Aksi</th>
    	</tr>
    	<?php
    		$tampil=mysqli_query($koneksi, "SELECT * from tbl_inventaris order by id_inventaris desc");
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nama_barang']?></td>
    		<td><?=$data['jumlah']?></td>
    		<td><?=$data['kondisi']?></td>
    		<td><?=$data['keterangan']?></td>
    		<td>
    			<a href="?halaman=inventaris&hal=edit&id=<?=$data['id_inventaris']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=inventaris&hal=hapus&id=<?=$data['id_inventaris']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>