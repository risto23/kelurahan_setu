<?php
include 'config.php';

function get_client_ip_env() {
	$ipaddress = '';
 	if (getenv('HTTP_CLIENT_IP'))
 	{
  		$ipaddress = getenv('HTTP_CLIENT_IP');
 	}
 	else if(getenv('HTTP_X_FORWARDED_FOR'))
 	{
  		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
 	}
 	else if(getenv('HTTP_X_FORWARDED'))
 	{
  		$ipaddress = getenv('HTTP_X_FORWARDED');
 	}
 	else if(getenv('HTTP_FORWARDED_FOR'))
 	{
  		$ipaddress = getenv('HTTP_FORWARDED_FOR');
 	}
 	else if(getenv('HTTP_FORWARDED'))
 	{
  		$ipaddress = getenv('HTTP_FORWARDED');
 	}
 	else if(getenv('REMOTE_ADDR'))
 	{
  		$ipaddress = getenv('REMOTE_ADDR');
 	}
 	else
 	{
  		$ipaddress = 'UNKNOWN IP Address';
 	}

 	return $ipaddress;
}

date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d');
$time = date('H:i:s');
$ip_user = get_client_ip_env();

$cekip = mysqli_num_rows(mysqli_query($koneksi,"select * from tb_visitor where ip_visitor = '$ip_user' AND date_visitor = '$date'"));
if ($cekip < 1)
{
	$input = mysqli_query($koneksi,"insert into tb_visitor (ip_visitor,date_visitor,time_visitor,nilai_visitor) values ('$ip_user','$date','$time',1)");
}
?>