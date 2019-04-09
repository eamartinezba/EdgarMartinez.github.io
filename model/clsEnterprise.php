<?php
class Enterprise{
	
	private $idEnterprise;
	private $initialEnterprise;
	private $nameEnterprise;
	private $emailEnterprise;
	private $logoEnterprise;
	private $intervalTurn;
	
	
	
	public function __construct($idEnterprise, $initialEnterprise,$nameEnterprise, $emailEnterprise, $logoEnterprise,$intervalTurn){
		$this->idEnterprise=$idEnterprise;
		$this->initialEnterprise=$initialEnterprise;
		$this->nameEnterprise=$nameEnterprise;
		$this->emailEnterprise=$emailEnterprise;
		$this->logoEnterprise=$logoEnterprise;
		$this->intervalTurn=$intervalTurn;
		
	}
	
	public function setLogoEnterprise($logoEnterprise){
		$this->logoEnterprise=$logoEnterprise;
	}
	
	public function getIdEnterprise(){
		return $this->idEnterprise;
	}
	public function getInitialEnterprise(){
		return $this->initialEnterprise;
	}
	public function getNameEnterprise(){
		return $this->nameEnterprise;
	}
	
	public function getEmailEnterprise(){
		return $this->emailEnterprise;
	}
	
	public function getLogoEnterprise(){
		return $this->logoEnterprise;
	}
	public function getIntervalTurn(){
		return $this->intervalTurn;
	}
	public function __toString(){
		return $this->idEnterprise.'-'.$this->nameEnterprise;
	}
}
?>