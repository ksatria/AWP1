<?php
	class Tanggal{
		// Properti
		var $tanggal;
		var $bulan;
		var $tahun;
		
		// Deklarasi konstruktor kelas
		function __construct($tgl, $bln, $thn){
			$this->tanggal = $tgl;
			$this->bulan = $bln;
			$this->tahun = $thn;
		}
		
		// Method
		function set_tanggal($tgl, $bln, $thn){
			$this->tanggal = $tgl;
			$this->bulan = $bln;
			$this->tahun = $thn;
		}
		
		function get_tanggal(){
			$daftarBulan = array(1 => "Januari",
								 2 => "Februari",
								 3 => "Maret",
								 4 => "April",
								 5 => "Mei",
								 6 => "Juni",
								 7 => "Juli",
								 8 => "Agustus",
								 9 => "September",
								 10 => "Oktober",
								 11 => "November",
								 12 => "Desember");
								 
			$hasil = $this->tanggal." ".$daftarBulan[$this->bulan]." ".$this->tahun;
			
			return $hasil;
		}
	}
?>