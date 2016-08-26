<?php
	require_once("Hewan.php");
	
	class Kelinci extends Hewan{
		public function __construct(){
			parent::__construct("2 buah kaki","lompat","cekcekcek");
		}
	}
?>