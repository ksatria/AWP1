<?php
	// Deklarasi kelas bernama Mahasiswa
	class Mahasiswa{
		// Daftar properti mahasiswa
		var $nim;					// nim mahasiswa
		var $nama;					// nama lengkap mahasiswa
		var $daftarMK = array();	// array untuk menyimpan daftar nama matakuliah yang diambil oleh mahasiswa
		
		
		// Kostruktor
		function __construct($nim, $nama){
			$this->nim = $nim;
			$this->nama = $nama;
		}
		
		// Fungsi tambah_mk berguna untuk menambahkan daftar
		// nama matakuliah yang diambil oleh seorang mahasiswa
		function tambah_mk($namaMK){
			// Format seperti di bawah ini secara otomatis akan
			// menambahkan data atau nilai baru ke dalam array
			// pada indeks paling belakang.
			// Jadi apabila sudah ada 5 data pada array tsb,
			// maka data baru akan disimpan pada posisi ke-6.
			$this->daftarMK[] = $namaMK;
		}
		
		
		// Fungsi data_mhs berguna untuk menampilkan data mahasiswa
		// bersama dengan daftar matakuliah yang diambil
		function data_mhs(){
			echo "NIM : ".$this->nim."<br />";
			echo "Nama : ".$this->nama."<br />";
			echo "Daftar matakuliah yang diambil:<br />";
			
			$i = 0; // nomor urut daftar nama matakuliah yang diambil
			foreach($this->daftarMK as $mk){
				echo ++$i.". ".$mk."<br />";
			}
			
			// Cuma buat ganti baris aja kok :-)
			echo "<br />";
		}
	}
?>