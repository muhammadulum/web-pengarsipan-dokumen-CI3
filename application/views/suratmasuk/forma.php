<div class="card mt-3">
  <div class="card-header bg-info text-white ">
    Form Data Surat Masuk
  </div>
  <div class="card-body">
  <?php echo form_open_multipart('surat_masuk/uploadImage');?>
    <!-- <form method="post" action="<?= base_url('surat_proposal/tambah_aksi'); ?>" enctype="multipart/form-data"> -->


	<div class="form-group">
	    <label for="no_surat">No Surat</label>
	    <input type="text" class="form-control" id="no_surat" name="no_surat" required>
		
	  </div>

	  <div class="form-group">
	    <label for="tanggal_surat">Tanggal Surat</label>
	    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
	  </div>

	  <div class="form-group">
	    <label for="tanggal_diterima">Tanggal Diterima</label>
	    <input type="date" class="form-control" id="tanggal_diterima" name="tanggal_diterima" required>
	  </div>

	  <div class="form-group">
	    <label for="perihal">Perihal</label>
	    <input type="text" class="form-control" id="perihal" name="perihal" required>
	  </div>

	   <div class="form-group">
                    <label>Nama Departemen</label>
                    <select class="form-control" name="id_departemen" id="id_departemen" required>
                        <?php foreach($hasil as $q):?>
                        <option value="<?php echo $q->id_departemen;?>"><?php echo $q->nama_departemen;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>

	  <div class="form-group">
	    <label for="nama_instansi">Nama Instansi</label>
	    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" required>
	  </div>

    <div class="form-group">
	    <label for="file">File</label>
	    <input type="file" class="form-control" id="file" name="userfile" required>
	  </div>
    
	  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
	  <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
	</form>
  </div>
</div>