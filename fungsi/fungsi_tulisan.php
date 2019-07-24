<?php

function tulisan($text)
{
	$cut_text = substr($text, 0, 200);
	if ($text{200 - 1} != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
		$new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
		$cut_text = substr($text, 0, $new_pos);
	}
	echo $cut_text." ...";
}