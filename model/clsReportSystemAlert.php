<?php

class ReportSystemAlert 
{
	private $idReportSystemAlert;
	private $idMachineSystem;
	private $idUser;
	private $idSystemAlert;
	private $dateReportSystem;
	private $statusReportSystem;

	public function __construct($idReportSystemAlert, $idMachineSystem, $idUser, $idSystemAlert, $dateReportSystem,$statusReportSystem)
	{
 		$this->idReportSystemAlert=$idReportSystemAlert;
 		$this->idMachineSystem=$idMachineSystem;
 		$this->idUser=$idUser;
 		$this->idSystemAlert=$idSystemAlert;
 		$this->dateReportSystem=$dateReportSystem;
 		$this->statusReportSystem=$statusReportSystem;

 	}

 	public function getIdReportSystemAlert(){
 		return $this->idReportSystemAlert;
 	}
 	public function getIdMachineSystem(){
 		return $this->idMachineSystem;
 	}
 	public function getIdUser(){
 		return $this->idUser;
 	}
 	public function getIdSystemAlert(){
 		return $this->idSystemAlert;
 	}
 	public function getDateReportSystem(){
 		return $this->dateReportSystem;
 	}
 	public function getStatusReportSystem(){
 		return $this->statusReportSystem;
 	}
}	


?>