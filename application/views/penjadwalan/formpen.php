<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Penjdawalan
  </div>
  <div class="card-body">
    <form method="post" action="<?= base_url('penjadwalan/tambah_aksi'); ?>" enctype="multipart/form-data">
	   <div class="form-group">
                    <label>Nama Departemen</label>
                    <select class="form-control" name="id_departemen" id="id_departemen" required>
                        <?php foreach($hasil as $q):?>
                        <option value="<?php echo $q->id_departemen;?>"><?php echo $q->nama_departemen;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>

	  <div class="form-group">
	    <label for="nama_kegiatan">Nama Kegiatan</label>
	    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
	  </div>

	  <div class="form-group">
	    <label for="tanggal_kegiatan">tanggal_kegiatan</label>
	    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
	  </div>

	  <div class="form-group">
	    <label for="keterangan">Keterangan</label>
	    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
	  </div>

	  </div>
	  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>