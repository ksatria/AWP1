<?php
	include "Tanggal.php";
	
	// Instansiasi objek Tanggal
	// Format: $nama_objek = new NamaClass();
	$tgl_kemerdekaan_indonesia 	= new Tanggal(17,8,1945);
	$tgl_kemerdekaan_amerika	= new Tanggal(4,7,1776);
	$tgl_kemerdekaan_korsel		= new Tanggal(15,8,1945);
	
	echo "Indonesia merdeka pada tanggal ".$tgl_kemerdekaan_indonesia->get_tanggal()."<br />";
	
	echo "Amerika merdeka pada tanggal ".$tgl_kemerdekaan_amerika->get_tanggal()."<br />";
	
	echo "Korea Selatan merdeka pada tanggal ".$tgl_kemerdekaan_korsel->get_tanggal()."<br />";
?>