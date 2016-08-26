<?php
	class Manusia{
		// Polymorphism: satu nama banyak bentuk
		// Banyak bentuk bermakna satu function bisa menerima bervariasi jumlah dan macam parameter
		function tidur($waktu = "malam"){
			if($waktu == "malam")
				echo "Memejamkan mata";
			else
				echo "Mendengkur pada saat ".$waktu;
		}		
	}
?> 