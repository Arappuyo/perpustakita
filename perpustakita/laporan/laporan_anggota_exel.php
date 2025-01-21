<?php

	$koneksi = new mysqli("localhost", "root","","db_perpustakita");

	$filename = "anggota_exel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename=$filename");
	header("content-type: application/vdn.ms-exel");



?>

<h2>Laporan Anggota</h2>

<table border="1">
	<tr>
                  <th>No</th>
                  <th>npm</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>jenis kelamin</th>
                  <th>Program Studi</th>
              </tr>

   <?php

        $no = 1;

        $sql = $koneksi->query("select * from tb_anggota");

        while ($data=$sql->fetch_assoc()) {

        $jk = ($data["jk"]==l)?"Laki-laki":"Wanita";

        $prodi = ($data["prodi"]==ti)?"Teknik Informatika":"Sistem Informasi";
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['npm'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['tempat_lahir'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><?php echo $data["jk"];?></td>
            <td><?php echo $data["prodi"];?></td>
        </tr>


        <?php  } ?>
</table>