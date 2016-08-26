<?php
	class Tanggal{
		// Properti
		var $tanggal;
		var $bulan;
		var $tahun;
		
		// Method
		function set_tanggal($tgl, $bln, $thn){
			$this->tanggal = $tgl;
			$this->bulan = $bln;
			$this->tahun = $thn;
		}
	}
?>