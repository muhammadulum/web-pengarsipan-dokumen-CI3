
    <body>
        <div class="container">
            <div class="col-md-9">
                <h3>Update data Mahasiswa</h3>
                <hr>
                <form action="<?php echo site_url('surat_lpj/Update') ?>" method = "post">
                    <input type="hidden" name="id" value=" <?php echo $tb_mahasiswa->id_lpj ?> ">
                    
            
                    <div class = "form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <?php foreach ($tb_jurusan as $prodi): ?>
                                <option value="<?php echo $prodi->id_departemen ?>" <?php if($prodi->id_departemen == $tb_mahasiswa->id_departemen) echo 'selected'; ?>><?php echo $prodi->nama_departemen ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class = "form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $tb_mahasiswa->nama_kegiatann ?> ">
                    </div>
                   
                    <input type="submit" class="btn btn-success" value="Simpan">
                </form>
            </div>
        </div>
       
    </body>
