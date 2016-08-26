<?php
	include "Mahasiswa.php";
	
	$ani = new Mahasiswa("101", "Ani Sukani");
	$bejo = new Mahasiswa("102", "Bejo Jusuf");
	
	$ani->tambah_mk("Basis Data");
	$ani->tambah_mk("Struktur Data");
	$ani->tambah_mk("Web Programming");
	
	$bejo->tambah_mk("Ekonomi Pembangunan");
	$bejo->tambah_mk("Dasar-Dasar Akuntansi");
	
	$ani->data_mhs();
	$bejo->data_mhs();
?>