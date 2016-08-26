<?php
	class Manusia{
		function tidur($waktu = "malam"){
			if($waktu == "malam")
				echo "Memejamkan mata";
			else
				echo "Mendengkur pada saat ".$waktu;
		}		
	}
?> 