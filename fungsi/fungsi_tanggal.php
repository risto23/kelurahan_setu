<?php

function fungsi_tgl($data)
{
	$proses = explode("-", $data);
	$tahun = $proses[0];
	$bulan = $proses[1];
	$tgl = $proses[2];

	if ($bulan == 1)
	{
		$bulan = "Januari";
	}
	else if ($bulan == 2)
	{
		$bulan = "Februari";
	}
	else if ($bulan == 3)
	{
		$bulan = "Maret";
	}
	else if ($bulan == 4)
	{
		$bulan = "April";
	}
	else if ($bulan == 5)
	{
		$bulan = "Mei";
	}
	else if ($bulan == 6)
	{
		$bulan = "Juni";
	}
	else if ($bulan == 7)
	{
		$bulan = "Juli";
	}
	else if ($bulan == 8)
	{
		$bulan = "Agustus";
	}
	else if ($bulan == 9)
	{
		$bulan = "September";
	}
	else if ($bulan == 10)
	{
		$bulan = "Oktober";
	}
	else if ($bulan == 11)
	{
		$bulan = "November";
	}
	else {
		$bulan = "Desember";
	}

	return $tgl.' '.$bulan.' '.$tahun;
}