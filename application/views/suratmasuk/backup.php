<div class="card mt-3">
  <div class="card-header bg-info text-white ">

    Data Arsip Surat Masuk
  </div>
  <div class="card-body">
  	<a href="<?= base_url('surat_masuk/insert'); ?>"class="btn btn-success mb-3">Tambah Data </a>
    <form action="" method="POST">
  <input class="cari" type="text" name="keyword" placeholder="Cari..."> 
  <input class="btn btn-primary" type="submit" name="search"><br><br>
  <strong>Cari berdasarkan nama instansi!</strong>
  </form>

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

         <?php $no=1;foreach ($hasil&& $hasilrel as $q): ?>
         <tr>
            <td><?=$no++?></td>
            <td><?php echo $q->no_surat ?></td>
            <td><?php echo $q->tanggal_surat ?></td>
            <td><?php echo $q->tanggal_diterima ?></td>
            <td><?php echo $q->perihal ?></td>
            <td><?php echo $q->nama_departemen ?></td>
            <td><?php echo $q->nama_instansi?></td>
            <td>

            <?php
                    //uji apakah data nya ada atau tidak
                    if (empty("<?php echo $q->file ?>")) {
                        echo " - ";
                    }else{
                        ?>
                        <a href="<?= base_url(); ?>file/<?php echo $q->file ?>" target="$_blank">Lihat File</a>
                        <?php 
                    }

                ?>

                            </td>
            <td>
                <a href="" class ="btn btn-success" name="edit">Edit </a>
                
                <form action="<?= base_url('surat_masuk/hapus'); ?>" method="post">
			<input type="hidden" value="<?php echo $q->id_surat_masuk?>">
			<button class="btn btn-danger" onclick="return confirm ('Apakah anda yakin')">
			<i class="fa fa-trash"></i>Hapus</button> 
			</form>
                  
            </td>
        </tr>
  
        <?php endforeach; ?>
    </table>
  </div>
</div>