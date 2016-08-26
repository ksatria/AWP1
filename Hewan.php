<?php
	class Hewan{
		public $alatGerak;
		public $caraGerak;
		public $suara;
		public $ukuran;
		public $ekor;
		public $telinga;
		protected $berbulu;
		
		public function __construct($alatGerak, $caraGerak, $suara, $statusBulu){
			$this->alatGerak = $alatGerak;
			$this->caraGerak = $caraGerak;
			$this->suara = $suara;
			$this->berbulu = $statusBulu;
		}
		
		public function bersuara(){
			return $this->suara;
		}
		
		public function bergerak(){
			return $this->caraGerak." dengan ".$this->alatGerak;
		}
		
		protected function lihatBulu(){
			return $this->berbulu;
		}
	}
?>