<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Inventaris
  </div>
  <div class="card-body">
    <form method="post" action="<?= base_url('inventaris/tambah_aksi'); ?>" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="nama_barang">Nama Barang</label>
	    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
	   </div>

	  <div class="form-group">
	    <label for="jumlah">Jumlah</label>
	    <input type="text" class="form-control" id="jumlah" name="jumlah">
	  </div>

	  <div class="form-group">
	    <label for="kondisi">Kondisi</label>
	    <input type="text" class="form-control" id="kondisi" name="kondisi">
	  </div>

	  <div class="form-group">
	    <label for="keterangan">Keterangan</label>
	    <input type="text" class="form-control" id="keterangan" name="keterangan">
	  </div>

	  </div>
	  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>