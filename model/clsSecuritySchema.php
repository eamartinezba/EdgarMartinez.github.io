<?php
class SecuritySchema{
	private $idSecuritySchema;
	private $descSecuritySchema;
	private $activeSecuritySchema;

	public function __construct($idSecuritySchema,$descSecuritySchema,$activeSecuritySchema){
		$this->idSecuritySchema=$idSecuritySchema;
		$this->descSecuritySchema=$descSecuritySchema;
		$this->activeSecuritySchema=$activeSecuritySchema;
	}

	public function getIdSecuritySchema(){
		return $this->idSecuritySchema;
	}
	public function getDescSecuritySchema(){
		return $this->descSecuritySchema;
	}
	public function getActiveSecuritySchema(){
		return $this->activeSecuritySchema;
	}
}
?>