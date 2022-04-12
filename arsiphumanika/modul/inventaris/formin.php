<?php
	//panggil function.php untuk upload file
	include "config/function.php";
	//uji jika klik tombol edit atau hapus
	if (isset($_GET['hal'])) 
	{
		if ($_GET['hal'] == "edit") 
		{
			//tampilkan data yang akan di edit
			$tampil=mysqli_query($koneksi, "SELECT * from tbl_inventaris order by id_inventaris desc");
			$data = mysqli_fetch_array($tampil);
			if ($data) 
			{
				//jika data di temukan maka data akan di tampung ke dlm variable
				$vnama_barang = $data['nama_barang'];
				$vjumlah = $data['jumlah'];
				$vkondisi = $data['kondisi'];
				$vketerangan = $data['keterangan'];

			}
		}elseif ($_GET['hal'] == 'hapus') {
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_inventaris WHERE id_inventaris='$_GET[id]'");
			if ($hapus) 
			{
				echo "<script>
					alert ('Data berhasil di Hapus');
					document.location='?halaman=inventaris'; 
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
			
				$ubah = mysqli_query($koneksi, "UPDATE tbl_inventaris SET 
													nama_barang = '$_POST[nama_barang]',
													jumlah = '$_POST[jumlah]',
													kondisi = '$_POST[kondisi]',
													keterangan = '$_POST[keterangan]',
											    where id_inventaris = '$_GET[id]'");
				
				if ($ubah) 
				{
					echo "<script>
						alert ('Data berhasil di ubah');
						document.location='?halaman=inventaris'; 
					</script>";
				}else{
					echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=inventaris'; 
				</script>";
				}	
			}

		else 
		{
		//perintah simpan data baru
		//simpan data
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_inventaris
											  VALUES ('',
											  		  '$_POST[nama_barang]',
											  		  '$_POST[jumlah]',
											  		  '$_POST[kondisi]',
											  		  '$_POST[keterangan]'
											  		  ) ");
			
			if ($simpan) 
			{
				echo "<script>
					alert ('Data Tersimpan');
					document.location='?halaman=inventaris'; 
				</script>";
			}else
			{
				echo "<script>
					alert ('Simpan Data Gagal!!');
					document.location='?halaman=inventaris'; 
				</script>";
			}
		}

	}

	

?>

<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Inventaris
  </div>
  <div class="card-body">
    <form method="post" action="" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="nama_barang">Nama Barang</label>
	    <input type="text" class="form-control" id="nama_barang" name="nama_barang"
	    value="<?=@$vnama_barang?>">
	   </div>

	  <div class="form-group">
	    <label for="jumlah">Jumlah</label>
	    <input type="text" class="form-control" id="jumlah" name="jumlah"
	    value="<?=@$vjumlah?>">
	  </div>

	  <div class="form-group">
	    <label for="kondisi">Kondisi</label>
	    <input type="text" class="form-control" id="kondisi" name="kondisi"
	    value="<?=@$vkondisi?>">
	  </div>

	  <div class="form-group">
	    <label for="keterangan">Keterangan</label>
	    <input type="text" class="form-control" id="keterangan" name="keterangan"
	    value="<?=@$vketerangan?>">
	  </div>

	  </div>
	  <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>