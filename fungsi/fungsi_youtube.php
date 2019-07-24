<?php

function cek_youtube($url)
{
	$link_yg_diperbolehkan = array("youtube","YOUTUBE");
	$hasil = 0;
	$jml_kata = count($link_yg_diperbolehkan);
	for ($i=0;$i<$jml_kata;$i++)
	{
		if (stristr($url,$link_yg_diperbolehkan[$i]))
		{
			$url_embed_youtube = str_replace("watch?v=","embed/", $url);
			$hasil=$url_embed_youtube;
		}
		else {
			$hasil =1;
		}
	}
	return $hasil;
}

function cek_embed($url)
{
	$link_yg_diperbolehkan = array("watch?v");
	$hasil = 0;
	$jml_kata = count($link_yg_diperbolehkan);
	for ($i=0;$i<$jml_kata;$i++)
	{
		if (stristr($url,$link_yg_diperbolehkan[$i]))
		{
			$hasil =1;
		}
		else {
			$url_embed_youtube = str_replace("watch?v=","embed/", $url);
			$hasil=$url_embed_youtube;
		}
	}
	return $hasil;
}