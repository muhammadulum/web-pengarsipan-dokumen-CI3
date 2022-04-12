<div class="card mt-3">
  <div class="card-header bg-info text-white ">

    Data Arsip Surat Masuk
  </div>
  <div class="card-body">
  	<a href="<?= base_url('surat_masuk/insert'); ?>"class="btn btn-success mb-3">Tambah Data </a>
    <form action="" method="POST">
  <input class="cari" type="text" name="cari" placeholder="Cari..."> 
  <input class="submit" type="submit" value="cari" ><br><br>
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

        if (isset($_POST['cari'])) {
          $cari = $_POST['cari'];
       $tampilcari="SELECT*FROM tbl_surat_masuk where nama_instansi LIKE '%".$cari."%'";
       $query=$this->db->query($tampilcari)->result_array();
       $no=1;
        }else {
         
          
      $tampilsemua ="SELECT tbl_surat_masuk.*, tbl_departemen.nama_departemen FROM tbl_surat_masuk,tbl_departemen
       WHERE tbl_surat_masuk.id_departemen = tbl_departemen.id_departemen";       
 $query=$this->db->query($tampilsemua)->result_array();
   $no=1;
        }
         
         ?>
         <?php foreach ($query as $q): ?>
         <tr>
            <td><?=$no++?></td>
            <td><?=$q['no_surat']?></td>
            <td><?=$q['tanggal_surat']?></td>
            <td><?=$q['tanggal_diterima']?></td>
            <td><?=$q['perihal']?></td>
            <td><?=$q['nama_departemen']?></td>
            <td><?=$q['nama_instansi']?></td>
            <td>

            <?php
                    //uji apakah data nya ada atau tidak
                    if (empty($q['file'])) {
                        echo " - ";
                    }else{
                        ?>
                        <a href="<?= base_url(); ?>file/<?=$q['file']?>" target="$_blank">Lihat File</a>
                        <?php 
                    }

                ?>

                            </td>
            <td>
                <a href="" class ="btn btn-success" name="edit">Edit </a>
                <a href="" class ="btn btn-danger" name="hapus" 
                    onclick="return confirm('Apakah yakin ingin menghapus ?')" >Hapus </a>
            </td>
        </tr>
  
        <?php endforeach; ?>
    </table>
  </div>
</div>