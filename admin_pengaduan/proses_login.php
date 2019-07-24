<?php

include '../fungsi/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$ceklogin = mysqli_num_rows(mysqli_query($koneksi, "select * from login where username = '$username' AND password = '$password' "));

if($ceklogin == 1)
{
	session_start();
	$data = mysqli_query($koneksi, "select * from login where username = '$username' AND password = '$password' ");
	while ($datasession= mysqli_fetch_array($data))
	{
		$_SESSION['user'] = $datasession['id_login'];
		$_SESSION["last_login_timestamp"] = time(); // waktu model UNIX
	}
	echo"<script> alert('LOGIN SUKSES') ; window.location.href='beranda.php'; </script>";
}
else {
	echo"<script> alert('USERNAME ATAU PASSWORD SALAH') ; window.location.href='index.php'; </script>";
}