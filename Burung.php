<?php
	require_once("Hewan.php");
	
	class Burung extends Hewan{
		public function __construct(){
			parent::__construct("2 buah sayap","terbang","cuiittt");
		}
	}
?>