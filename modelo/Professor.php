<?php
	require_once 'Pessoa.php';
	
	class Professor extends Pessoa{
		private $Siap;
		
		
		public function setSiap($Siap){
			$this->ra = $ra;
		}
		
		public function getSiap(){
			return $this->Siap;
		}
	}
?>