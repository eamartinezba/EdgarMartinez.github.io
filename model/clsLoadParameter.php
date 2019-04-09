<?php
class LoadParameter{
	private $idMachine;
	private $bitOperator;
	private $bitActivity;
	private $bitProductReference;

	public function __construct($idMachine,$bitOperator,$bitActivity,$bitProductReference){
		$this->idMachine=$idMachine;
		$this->bitOperator=$bitOperator;
		$this->bitActivity=$bitActivity;
		$this->bitProductReference=$bitProductReference;
	}
	public function getIdMachine(){
		return $this->idMachine;
	}
	public function getBitOperator(){
		return $this->bitOperator;
	}
	public function getBitActivity(){
		return $this->bitActivity;
	}
	public function getBitProductReference(){
		return $this->bitProductReference;
	}
}
?>