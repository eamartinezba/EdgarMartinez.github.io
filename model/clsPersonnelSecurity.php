<?php
class PersonnelSecurity{
	private $idPersonnel;
	private $idSecurity;
	private $codePersonnelSecurity;
	private $activeSecuritySchema;

	public function __construct($idPersonnel,$idSecurity,$codePersonnelSecurity,$activeSecuritySchema){
		$this->idPersonnel=$idPersonnel;
		$this->idSecurity=$idSecurity;
		$this->codePersonnelSecurity=$codePersonnelSecurity;
		$this->activeSecuritySchema=$activeSecuritySchema;
	}

	public function getIdPersonnel(){
		return $this->idPersonnel;
	}
	public function getIdSecurity(){
		return $this->idSecurity;
	}
	public function getCodePersonnelSecurity(){
		return $this->codePersonnelSecurity;
	}
	public function getActiveSecuritySchema(){
		return $this->activeSecuritySchema;
	}
	public function setActiveSecuritySchema($activeSecuritySchema){
		$this->activeSecuritySchema=$activeSecuritySchema;
	}
}
?>