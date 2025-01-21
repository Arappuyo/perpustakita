<?php


	$npm = $_GET['id'];

	$sql = $koneksi->query("select * from tb_anggota where npm = '$npm'");

	$tampil = $sql->fetch_assoc();

	$jkl = $tampil['jk'];
	$prodi = $tampil['prodi'];


?>

<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
    </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Basic Form Examples</h3>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NPM</label>
                                            <input class="form-control" name="npm" value="<?php echo $tampil['npm']?>" readonly />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>" />
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" <?php if ($jkl=="l") {
                                                	echo "checked";
                                                } ?> /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" <?php if ($jkl=="p") {
                                                	echo "checked";
                                                } ?> /> Wanita
                                            </label>
                                            

                                        </div>

                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option value="ti" <?php if ($prodi=='ti') {
                                                	echo "selected";
                                                } ?>>Teknik Informatika</option>
                                                <option value="si" <?php if ($prodi=='si') {
                                                	echo "selected";
                                                } ?>>Sistem Informasi</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Kontak</label>
                                            <input class="form-control" name="kontak" />
                                        
                                        </div>

                                        <div>
                                            
                                            <input type="submit" name="simpan" value="ubah" class="btn btn-primary">
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
    
        $sql = $koneksi->query("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi', kontak='$kontak' where npm='$npm' ");

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