<?php
	
	$npm = $_GET['id'];

	$koneksi->query("delete from tb_anggota where npm ='$npm'");

?>


<script type="text/javascript">
		window.location.href="?page=anggota";
</script>