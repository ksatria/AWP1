<?php
	require_once("Hewan.php");
	
	// Keyword extends digunakan untuk
	// menurunkan suatu kelas ke kelas
	// lainnya
	class Kucing extends Hewan{
		public function __construct(){
			parent::__construct("4 buah kaki","berjalan/berlari","meong","berbulu lebat");
		}
		
		public function statusBulu(){
			// Mengembalikan nilai properti/variabel berbulu dari kelas Hewan
			return parent::lihatBulu();
		}
	}
?>