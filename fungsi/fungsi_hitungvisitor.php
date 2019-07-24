<?php
date_default_timezone_set('Asia/Jakarta');
include "config.php";
$date = date('Y-m-d');
$todayvisitor = 0;
$totalvisitor = 0;

$data = mysqli_query($koneksi,"select * from tb_visitor where date_visitor = '$date'");
while ($pengunjung=mysqli_fetch_array($data)) {
	$todayvisitor = $todayvisitor + $pengunjung['nilai_visitor'];
}

$data = mysqli_query($koneksi,"select * from tb_visitor");
while ($pengunjung=mysqli_fetch_array($data)) {
	$totalvisitor = $totalvisitor + $pengunjung['nilai_visitor'];
}



	
