<?php 
include "../fungsi/config.php";

if (isset($_GET['id_hapus']))
{
	$id = $_GET['id_hapus'];
	
		$proses = mysqli_query($koneksi,"delete from pengaduan where id_pengaduan = '$id'");
		if($proses)
		{
			
			echo"<script> alert('Pengaduan Berhasil Dihapus') ; window.location.href='beranda.php'; </script>";
		}
		else {
			echo"<script> alert('Pengaduan Gagal Dihapus, Silahkan Ulangi') ; window.location.href='beranda.php'; </script>";
		}
	
}


?>