<?php
class CompanyGlobal{
	
	private $idCompanyGlobal;
	private $systemGlobal;
	private $nameCompanyGlobal;
	private $initialCompanyGlobal;
	private $emailCompanyGlobal;
	private $logoCompanyGlobal;
	
	
	
	public function __construct($idCompanyGlobal,$systemGlobal, $nameCompanyGlobal,$initialCompanyGlobal, $emailCompanyGlobal){
		$this->idCompanyGlobal=$idCompanyGlobal;
		$this->systemGlobal=$systemGlobal;
		$this->nameCompanyGlobal=$nameCompanyGlobal;
		$this->initialCompanyGlobal=$initialCompanyGlobal;
		$this->emailCompanyGlobal=$emailCompanyGlobal;
		$this->logoCompanyGlobal=null;
		
	}
	
	public function setLogoCompanyGlobal($logoCompanyGlobal){
		$this->logoCompany=$logoCompanyGlobal;
	}
	
	public function getIdCompanyGlobal(){
		return $this->idCompanyGlobal;
	}
	public function getSystemCompanyGlobal(){
		return $this->systemGlobal;
	}
	public function getNameCompanyGlobal(){
		return $this->nameCompanyGlobal;
	}
	public function getInitialCompanyGlobal(){
		return $this->initialCompanyGlobal;
	}
	public function getEmailCompanyGlobal(){
		return $this->emailCompanyGlobal;
	}
	
	public function getLogoCompanyGlobal(){
		return $this->logoCompanyGlobal;
	}
	
	public function __toString(){
		return $this->idCompanyGlobal.'-'.$this->nameCompanyGlobal;
	}
}
?>