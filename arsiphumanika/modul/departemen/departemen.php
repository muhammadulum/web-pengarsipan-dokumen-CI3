<?php

	//uji jika tombol simpan diklik
	if (isset($_POST['bsimpan'])) 
	{

		//pengujian data apakah ingin di edit/ di simpan baru
		if(@$_GET['hal'] == "edit"){
			//perintah edit data
			//ubah data
				$ubah = mysqli_query($koneksi, "UPDATE tbl_departemen SET nama_departemen = '$_POST[nama_departemen]' where id_departemen = '$_GET[id]'");
				
				if ($ubah) 
				{
					echo "<script>
						alert ('Data berhasil di ubah');
						document.location='?halaman=departemen'; 
					</script>";
				}	
			}

		else 
		{
		//perintah simpan data baru
		//simpan data
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_departemen VALUES ('','$_POST[nama_departemen]') ");
			
			if ($simpan) 
			{
				echo "<script>
					alert ('Data Tersimpan');
					document.location='?halaman=departemen'; 
				</script>";
			}
		}

	}

	//uji jika klik tombol edit atau hapus
	if (isset($_GET['hal'])) 
	{
		if ($_GET['hal'] == "edit") 
		{
			//tampilkan data yang akan di edit
			$tampil = mysqli_query($koneksi,"SELECT * from tbl_departemen where id_departemen='$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) 
			{
				//jika data di temukan maka data akan di tampung ke dlm variable
				$vnama_departemen = $data['nama_departemen'];
			}
		}else{
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_departemen WHERE id_departemen='$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert ('Data berhasil di Hapus');
					document.location='?halaman=departemen'; 
				</script>";
			}
		}
		
	}

?>




<div class="card">
  <div class="card-header bg-info text-white mt-3">
    Form Data Departemen
  </div>
  <div class="card-body">
    <form method="post" action="">
	  <div class="form-group">
	    <label for="nama_departemen">Nama Departemen</label>
	    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen"
	    value="<?=@$vnama_departemen?>">

	  </div>
	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>

<div class="card">
  <div class="card-header bg-info text-white mt-3">
    Data Departemen
  </div>
  <div class="card-body">
    <table class="table table-border table-hovered table-striped">
    	<tr>
    		<th>No</th>
    		<th>Nama Departemen</th>
    		<th>Aksi</th>
    	</tr>
    	<?php
    		$tampil=mysqli_query($koneksi, "SELECT * from tbl_departemen order by id_departemen asc");
    		$no = 1;
    		while ($data = mysqli_fetch_array($tampil)) :
    	?>
    	<tr>
    		<td><?=$no++?></td>
    		<td><?=$data['nama_departemen']?></td>
    		<td>
    			<a href="?halaman=departemen&hal=edit&id=<?=$data['id_departemen']?>" class ="btn btn-success">Edit </a>
    			<a href="?halaman=departemen&hal=hapus&id=<?=$data['id_departemen']?>" class ="btn btn-danger" 
    				onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
    		</td>
    	</tr>
    <?php endwhile; ?>
    </table>
  </div>
</div>