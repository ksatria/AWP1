<?php
	include "Kucing.php";
	include "Burung.php";
	include "Kelinci.php";
	
	$miauw = new Kucing();
	// $bird  = new Burung();
	// $bunny = new Kelinci();
	
	echo "Suara si Miauw: ".$miauw->bersuara()."<br />";
	echo "Cara gerak Miauw: ".$miauw->bergerak()."<br />";
	echo "Apakah Miauw berbulu?: ".$miauw->statusBulu()."<br />";
	
	
	
	
	// echo "Suara si Bird: ".$bird->bersuara()."<br />";
	// echo "Cara gerak Bird: ".$bird->bergerak()."<br />";
	// echo "Suara si Bunny: ".$bunny->bersuara()."<br />";
	// echo "Cara gerak Bunny: ".$bunny->bergerak()."<br />";
?>