<div class="card mt-3">
  <div class="card-header bg-info text-white ">

    Data Arsip Surat Masuk
  </div>
  <div class="card-body">
  	<a href="?halaman=surat_masuk&hal=tambahdata"class="btn btn-success mb-3">Tambah Data </a>
    <form action="" method="">
  <input class="cari" type="text" name="cari" placeholder="Cari..."> 
  <input class="button" type="submit" value="Cari" ><br><br>
  <strong>Cari berdasarkan nama instansi!</strong>
  </form></kekiri>

    </form>
    <br>
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nomor Surat</th>
    		<th>Tanggal Surat</th>
    		<th>Tanggal Terima</th>
    		<th>Perihal</th>
    		<th>Departemen / Tujuan</th>
    		<th>Nama Instansi</th>
    		<th>File</th>
    		<th>Aksi</th>
    	</tr>
        <?php
         if(isset($_GET['cari'])){
       $cari = $_GET['cari'];
       $tampil=mysqli_query($koneksi,"SELECT*FROM tbl_surat_masuk where nama_instansi LIKE '%".$cari."%'");}
        else{ $tampil = mysqli_query($koneksi, "SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
                WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen");       
        }    
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) :
         ?>
         <tr>
            <td><?=$no++?></td>
            <td><?=$data['no_surat']?></td>
            <td><?=$data['tanggal_surat']?></td>
            <td><?=$data['tanggal_diterima']?></td>
            <td><?=$data['perihal']?></td>
            <td><?=$data['nama_departemen']?></td>
            <td><?=$data['nama_instansi']?></td>
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
                <a href="?halaman=surat_masuk&hal=edit&id=<?=$data['id_surat_masuk']?>" class ="btn btn-success">Edit </a>
                <a href="?halaman=surat_masuk&hal=hapus&id=<?=$data['id_surat_masuk']?>" class ="btn btn-danger" 
                    onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
            </td>
        </tr>
    <?php endwhile;
    ?>

    	<!--<?php
    		$tampil=mysqli_query($koneksi, "
    			SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
    			WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['no_surat']?></td>
    		<td><?=$data['tanggal_surat']?></td>
    		<td><?=$data['tanggal_diterima']?></td>
    		<td><?=$data['perihal']?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td><?=$data['nama_instansi']?></td>
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
    			<a href="?halaman=surat_masuk&hal=edit&id=<?=$data['id_surat_masuk']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=surat_masuk&hal=hapus&id=<?=$data['id_surat_masuk']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>-->
    </table>
  </div>
</div>