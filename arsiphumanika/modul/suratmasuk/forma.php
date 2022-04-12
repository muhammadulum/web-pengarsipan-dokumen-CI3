<?php
	//panggil function.php untuk upload file
	include "config/function.php";
	//uji jika klik tombol edit atau hapus
	if (isset($_GET['hal'])) 
	{
		if ($_GET['hal'] == "edit") 
		{
			//tampilkan data yang akan di edit
			$tampil = mysqli_query($koneksi,"SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
    			WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen and tbl_surat_masuk.id_surat_masuk ='$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if ($data) 
			{
				//jika data di temukan maka data akan di tampung ke dlm variable
				$vno_surat = $data['no_surat'];
				$vtanggal_surat = $data['tanggal_surat'];
				$vtanggal_diterima = $data['tanggal_diterima'];
				$vperihal = $data['perihal'];
				$vid_departemen = $data['id_departemen'];
				$vnama_departemen = $data['nama_departemen'];
				$vnama_instansi = $data['nama_instansi'];
				$vfile = $data['file'];

			}
		}elseif ($_GET['hal'] == 'hapus') {
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_surat_masuk WHERE id_surat_masuk='$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert ('Data berhasil di Hapus');
					document.location='?halaman=surat_masuk'; 
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
				$ubah = mysqli_query($koneksi, "UPDATE tbl_surat_masuk SET 
													no_surat = '$_POST[no_surat]',
													tanggal_surat = '$_POST[tanggal_surat]',
													tanggal_diterima = '$_POST[tanggal_diterima]',
													perihal = '$_POST[perihal]',
													id_departemen = '$_POST[id_departemen]',
													nama_instansi = '$_POST[nama_instansi]',
													file = '$file'	
											    where id_surat_masuk = '$_GET[id]'");
				
				if ($ubah) 
				{
					echo "<script>
						alert ('Data berhasil di ubah');
						document.location='?halaman=surat_masuk'; 
					</script>";
				}else{
					echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=surat_masuk'; 
				</script>";
				}	
			}

		else 
		{
		//perintah simpan data baru
		//simpan data
			$file = upload();
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_surat_masuk 
											  VALUES ('',
											  		  '$_POST[no_surat]',
											  		  '$_POST[tanggal_surat]',
											  		  '$_POST[tanggal_diterima]',
											  		  '$_POST[perihal]',
											  		  '$_POST[id_departemen]',
											  		  '$_POST[nama_instansi]',
											  		  '$file'
											  		  ) ");
			
			if ($simpan) 
			{
				echo "<script>
					alert ('Data Tersimpan');
					document.location='?halaman=surat_masuk'; 
				</script>";
			}else
			{
				echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=surat_masuk'; 
				</script>";
			}
		}

	}

	

?>

<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Arsip Surat Masuk
  </div>
  <div class="card-body">
    <form method="post" action="" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="no_surat">No. Surat</label>
	    <input type="text" class="form-control" id="no_surat" name="no_surat"
	    value="<?=@$vno_surat?>">
	   </div>

	  <div class="form-group">
	    <label for="tanggal_surat">Tanggal Surat</label>
	    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat"
	    value="<?=@$vtanggal_surat?>">
	  </div>

	  <div class="form-group">
	    <label for="tanggal_diterima">Tanggal Terima</label>
	    <input type="date" class="form-control" id="tanggal_diterima" name="tanggal_diterima"
	    value="<?=@$vtanggal_diterima?>">
	  </div>

	  <div class="form-group">
	    <label for="perihal">Perihal</label>
	    <input type="text" class="form-control" id="perihal" name="perihal"
	    value="<?=@$vperihal?>">
	  </div>

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
	    <label for="nama_instansi">Nama Instansi</label>
	    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi"
	    value="<?=@$vnama_instansi?>">
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