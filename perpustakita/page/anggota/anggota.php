

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>npm</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>jenis kelamin</th>
                                            <th>Program Studi</th>
                                            <th>Kontak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("SELECT * from tb_anggota");

                                            while ($data=$sql->fetch_assoc()) {
                    
                                            
                                            
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['npm'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tempat_lahir'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $data['jk'];?></td>
                                            <td><?php echo $data['prodi'];?></td>
                                            <td><?php echo $data['kontak'];?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['npm']; ?>" class="btn btn-info">Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ... ???')" href="?page=anggota&aksi=hapus&id=<?php echo $data['npm']; ?>" class="btn btn-danger">Hapus</a>

                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>


                                  </div>
                                  <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top: 0px;"><i class="fa fa-plus"></i>Tambah Data</a>

                                 
                        </div>
                    </div>
                </div>  
        </div>    