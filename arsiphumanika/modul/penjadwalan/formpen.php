<?php
	//panggil function.php untuk upload file
	include "config/function.php";
	//uji jika klik tombol edit atau hapus
	if (isset($_GET['hal'])) 
	{
		if ($_GET['hal'] == "edit") 
		{
			//tampilkan data yang akan di edit
			$tampil = mysqli_query($koneksi,"SELECT tbl_penjadwalan.*, tbl_departemen.nama_departemen FROM tbl_penjadwalan,tbl_departemen
    			WHERE tbl_penjadwalan.id_departemen = tbl_departemen.id_departemen and tbl_penjadwalan.id_penjadwalan ='$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) 
			{
				//jika data di temukan maka data akan di tampung ke dlm variable
				$vid_departemen = $data['id_departemen'];
				$vnama_departemen = $data['nama_departemen'];
				$vnama_kegiatan = $data['nama_kegiatan'];
				$vtanggal_kegiatan = $data['tanggal_kegiatan'];
				$vketerangan = $data['keterangan'];

			}
		}elseif ($_GET['hal'] == 'hapus') {
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_penjadwalan WHERE id_penjadwalan ='$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert ('Data berhasil di Hapus');
					document.location='?halaman=penjadwalan'; 
				</script>";
			}
		}
		
		
	}
	//uji jika tombol simpan diklik
	if (isset($_POST['bsimpan'])) 
	{

		//pengujian data apakah ingin di edit/ di simpan baru
		if(@$_GET['hal'] == "edit"){
			//perintah edit data
			//ubah data

			$ubah = mysqli_query($koneksi, "UPDATE tbl_penjadwalan SET 
													id_departemen = '$_POST[id_departemen]',
													nama_kegiatan = '$_POST[nama_kegiatan]',
													tanggal_kegiatan= '$_POST[tanggal_kegiatan]',
													keterangan = '$_POST[keterangan]'
											    where id_penjadwalan = '$_GET[id]'");
				
				if ($ubah) 
				{
					echo "<script>
						alert ('Data berhasil di ubah');
						document.location='?halaman=penjadwalan'; 
					</script>";
				}else{
					echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=penjadwalan'; 
				</script>";
				}	
			}

		else 
		{
		//perintah simpan data baru
		//simpan data
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_penjadwalan
											  VALUES ('',
											  		  '$_POST[id_departemen]',
											  		  '$_POST[nama_kegiatan]',
											  		  '$_POST[tanggal_kegiatan]',
											  		  '$_POST[keterangan]'							  
											  		  ) ");
			
			if ($simpan) 
			{
				echo "<script>
					alert ('Data Tersimpan');
					document.location='?halaman=penjadwalan'; 
				</script>";
			}else
			{
				echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=penjadwalan'; 
				</script>";
			}
		}

	}

	

?>

<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Penjadwalan Kegiatan
  </div>
  <div class="card-body">
    <form method="post" action="" enctype="multipart/form-data">

	  <div class="form-group">
	    <label for="id_departemen">Departemen / Tujuan</label>
	    <select class="form-control" name="id_departemen">
	    	<option value="<?=@$vid_departemen?>"><?=@$vnama_departemen?></option>
	    	<?php
	    		$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_departemen order by nama_departemen asc");
	    		while ($data = mysqli_fetch_array($tampil)) {
	    			echo "<option value = '$data[id_departemen]'> $data[nama_departemen] </option> ";
	    		}
	    	?>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="nama_kegiatan">Nama Kegiatan</label>
	    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
	    value="<?=@$vnama_kegiatan?>">
	  </div>

	  <div class="form-group">
	    <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
	    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan"
	    value="<?=@$vtanggal_kegiatan?>">
	  </div>

	<div class="form-group">
	    <label for="keterangan">Keterangan</label>
	    <select class="form-control" id="keterangan" name="keterangan"
	    value="<?=@$vtanggal_kegiatan?>">
	    <option>Terlaksana</option>
	    <option>Belum Terlaksana</option>
	    	

	    </select> 
	  </div>

	  </div>
	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>