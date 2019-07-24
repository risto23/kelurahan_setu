<?php

include "../fungsi/config.php";

 if(isset($_GET['id_konfirmasi']))
{
	$id = $_GET['id_konfirmasi'];
	$konfirmasi=1;
	$data = mysqli_query($koneksi,"select * from pengaduan where id_pengaduan='$id'");
	while ($row=mysqli_fetch_array($data)) {
		$status=$row['konfirmasi'];
	    
	}
	if ($status==0) {
		$data = mysqli_query($koneksi,"UPDATE pengaduan SET konfirmasi='$konfirmasi' WHERE id_pengaduan='$id'");
		if ($data)
		{
			echo"<script> alert('Konfirmasi Berhasil') ; window.location.href='beranda.php'; </script>";
		}
		else {
			echo"<script> alert('Konfirmasi Gagal') ; window.location.href='beranda.php'; </script>";
		}	
		
	}
	elseif ($status==1) {
		echo"<script> alert('Konfirmasi Sudah Pernah dilakukan') ; window.location.href='beranda.php'; </script>";
	}
	
		
	
	
}
?>