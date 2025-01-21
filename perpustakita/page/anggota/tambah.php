<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
    </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Identitas Anggota</h3>
                                    <form method="POST" onsubmit="return validasi(this)">
                                        <div class="form-group">
                                            <label>NPM</label>
                                            <input class="form-control" name="npm" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir"  />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk"/> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk"/> Wanita
                                            </label>
                                            

                                        </div>

                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option value="ti">Teknik Informatika</option>
                                                <option value="si">Sistem Informasi</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Kontak</label>
                                            <input class="form-control" name="kontak" />
                                        
                                        </div>

                                        <div>
                                            
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>

                                 </div>

                                 </form>
                             </div>
</div>
</div>
</div>

<?php

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $kontak = $_POST['kontak'];

    $simpan = $_POST['simpan'];

    if ($simpan) {
    
        $sql = $koneksi->query("insert into tb_anggota (npm, nama, tempat_lahir, tgl_lahir, jk, prodi, kontak)values('$npm', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi','$kontak')");

        if ($sql) {
            ?>

            <script type="text/javascript">

                alert("Data Berhasil Disimpan"); 
                window.location.href="?page=anggota";
                
            </script>

            <?php
        }
    }

?>