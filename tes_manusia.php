<?php
	include "Manusia.php";
	
	$man = new Manusia();
	$man->tidur(); echo "<br />";
	$man->tidur("siang");
?>