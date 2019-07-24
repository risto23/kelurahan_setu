<?php

include "fungsi/config.php";

if(isset($_POST['input']))
{
	$img_pengaduan = $_FILES['img_pengaduan']['name'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$date_pengaduan = $_POST['date_pengaduan'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$kronologi =  addslashes($_POST['kronologi']);
	$konfirmasi=0;

	$data = mysqli_query($koneksi,"insert into pengaduan (bukti,nama,no_ktp,email,tanggal,alamat,deskripsi,konfirmasi) values ('$img_pengaduan','$nama','$no_ktp','$email','$date_pengaduan','$alamat','$kronologi','$konfirmasi')");

	if ($data)
	{
		move_uploaded_file($_FILES['img_pengaduan']['tmp_name'], "gambar_pengaduan/".$_FILES['img_pengaduan']['name']);
		echo"<script> alert('Pengaduan berhasil dilakukan') ; window.location.href='index.php'; </script>";
	}
	else {
		echo"<script> alert('Pengaduan Gagal Diinput, Silahkan ulangi lagi') ; window.location.href='pengaduan.php'; </script>";
	}
}

