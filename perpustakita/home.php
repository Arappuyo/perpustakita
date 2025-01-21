<?php
$conn = mysqli_connect("localhost", "root", "", "db_perpustakita");
?>

<marquee>Selamat Datang Dihalaman Utama Perpustakaan</marquee>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Perpustakaan</h2>   
                        <h5></h5>
                    </div>
                </div>              
                  <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <b> <?php
                        $get1 = mysqli_query($conn, "select * from tb_anggota");
                        $count1 = mysqli_num_rows($get1);                      
                        ?>
                <p style="font-size: 20px;"><?php echo $count1; ?> Anggota</p></b>
                <a href="?page=anggota">
                    <p class="text-muted">Lihat Detail</p></a>
                </div>
             </div>
		     </div>
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                        $get1 = mysqli_query($conn, "select * from tb_buku");
                        $count1 = mysqli_num_rows($get1);                      
                        ?>
                <p style="font-size: 20px;"><?php echo $count1; ?> Buku</p></b>
                    <a href="?page=buku">
                    <p class="text-muted">Lihat Detail</p></a>
                </div>
             </div>
		     </div>
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-money fa"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                        $get1 = mysqli_query($conn, "select * from tb_transaksi");
                        $count1 = mysqli_num_rows($get1);                      
                        ?>
                <p style="font-size: 20px;"><?php echo $count1; ?> Transaksi</p></b>
                <a href="?page=transaksi">
                    <p class="text-muted">Lihat Details</p></a>
                </div>
             </div>
		     </div>
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                        $get1 = mysqli_query($conn, "select * from tb_user");
                        $count1 = mysqli_num_rows($get1);                      
                        ?>
                <p style="font-size: 20px;"><?php echo $count1; ?> User</p></b>
                    <p class="text-muted"></p>
                </div>
             </div>
		     </div>
			</div>
            <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Perpustakaan
                        </div>
                        <div class="panel-body">
                            <p><center>Selamat datang di website Perpustakaan, perpustakaan digital yang memudahkan kita untuk mengelola data-data perpustakaan</p>
                        </div>
                        
                    </div>
                </div>
   
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Anggota Yang Meminjam Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_transaksi where status='pinjam'");

                                            while ($data=$sql->fetch_assoc()) {
                                            
                                  
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tgl_pinjam'];?></td>
                                            <td><?php echo $data['tgl_kembali'];?></td>                                            
                                            <td>

	                                            <?php 

	                                            	$denda = 5000;

	                                            	$tgl_dateline = $data['tgl_kembali'];
	                                            	$tgl_kembali = date('Y-m-d');

	                                            	$lambat = terlambat($tgl_dateline, $tgl_kembali);
	                                            	$denda1 = $lambat*$denda;

	                                            	if ($lambat>0) {
	                                            		echo "

	                                            				<font color='red'>$lambat hari<br>(Rp $denda1)</font>

	                                            		";
	                                            	}else{
	                                            		echo $lambat ."Hari";
	                                            	}

	                                            ?>
                                                </td>
                                            <td><?php echo $data['status'];?></td>
                                            </tr>


                                        <?php  } ?>
                                    </tbody>


                                  </div>
                                  </div>
                    </div>
                </div>  
        </div>    
       
