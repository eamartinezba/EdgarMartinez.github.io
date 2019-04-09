<?php 

class SystermAlerts 
{
	private $idSystemAlert;
	private $descSystemAlert;
	
	public function __construct($idSystemAlert, $descSystemAlert)
	{
		$this->idSystemAlert=$idSystemAlert;
		$this->descSystemAlert=$descSystemAlert;
	}
	public function getIdSystemAlert(){
		return $this->idSystemAlert;
	}
	public function getDescSystemAlert(){
		return $this->descSystemAlert;
	}
}



?>