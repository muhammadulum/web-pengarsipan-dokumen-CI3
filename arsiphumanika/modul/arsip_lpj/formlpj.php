<?php
	//panggil function.php untuk upload file
	include "config/function.php";
	//uji jika klik tombol edit atau hapus
	if (isset($_GET['hal'])) 
	{
		if ($_GET['hal'] == "edit") 
		{
			//tampilkan data yang akan di edit
			$tampil = mysqli_query($koneksi,"SELECT tbl_lpj.*, tbl_departemen.nama_departemen FROM tbl_lpj,tbl_departemen
    			WHERE tbl_lpj.id_departemen = tbl_departemen.id_departemen and tbl_lpj.id_lpj ='$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) 
			{
				//jika data di temukan maka data akan di tampung ke dlm variable
				$vid_departemen = $data['id_departemen'];
				$vnama_departemen = $data['nama_departemen'];
				$vnama_kegiatann = $data['nama_kegiatann'];
				$vfile = $data['file'];

			}
		}elseif ($_GET['hal'] == 'hapus') {
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_lpj WHERE id_lpj ='$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert ('Data berhasil di Hapus');
					document.location='?halaman=arsip_lpj'; 
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

			//cek apakah user pilih gambar atau tidak
			if ($_FILES['file']['error'] === 4) {
				$file =$vfile;	
			}else{
				$file = upload();
			}
				$ubah = mysqli_query($koneksi, "UPDATE tbl_lpj SET 
													id_departemen = '$_POST[id_departemen]',
													nama_kegiatann = '$_POST[nama_kegiatann]',
													file = '$file'	
											    where id_lpj = '$_GET[id]'");
				
				if ($ubah) 
				{
					echo "<script>
						alert ('Data berhasil di ubah');
						document.location='?halaman=arsip_lpj'; 
					</script>";
				}else{
					echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=arsip_lpj'; 
				</script>";
				}	
			}

		else 
		{
		//perintah simpan data baru
		//simpan data
			$file = upload();
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_lpj
											  VALUES ('',
											  		  '$_POST[id_departemen]',
											  		  '$_POST[nama_kegiatann]',
											  		  '$file'
											  		  ) ");
			
			if ($simpan) 
			{
				echo "<script>
					alert ('Data Tersimpan');
					document.location='?halaman=arsip_lpj'; 
				</script>";
			}else
			{
				echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=arsip_lpj'; 
				</script>";
			}
		}

	}

	

?>

<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Arsip LPJ
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
	    <label for="nama_kegiatann">Nama Kegiatan</label>
	    <input type="text" class="form-control" id="nama_kegiatann" name="nama_kegiatann"
	    value="<?=@$vnama_kegiatann?>">
	  </div>

	   <div class="form-group">
	    <label for="file">Pilih File</label>
	    <input type="file" class="form-control" id="file" name="file"
	    value="<?=@$vfile?>">
	  </div>

	  </div>
	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>