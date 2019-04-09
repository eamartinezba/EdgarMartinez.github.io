<?php
class EGPMonthlyReport{
	
private $idEGPMonthlyReport;
private $turn_idturn;
private $machineAvailability;
private $machinePerformance;
private $machineQuality;
private $Machine_idMachine;
private $dateOEEPeriodicalReport;


public function __construct($idEGPMonthlyReport, $turn_idturn,$machineAvailability,$machinePerformance,$machineQuality,$Machine_idMachine, $dateOEEPeriodicalReport){
	$this->idEGPMonthlyReport=$idEGPMonthlyReport;
	$this->turn_idturn=$turn_idturn;
	$this->machineAvailability=$machineAvailability;
	$this->machinePerformance=$machinePerformance;
	$this->machineQuality=$machineQuality;
	$this->Machine_idMachine=$Machine_idMachine;
	$this->dateOEEPeriodicalReport=$dateOEEPeriodicalReport;
	
	
}

public function getIdEGPMonthlyReport(){
	return $this->idEGPMonthlyReport;
}

public function getTurn_idturn(){
	return $this->turn_idturn;
}

public function getMachineAvailability(){
	return $this->machineAvailability;
}

public function getMachinePerformance(){
	return $this->machinePerformance;
}

public function getMachineQuality(){
	return $this->machineQuality;
}

public function getMachine(){
	return $this->Machine_idMachine;
}

public function getDateOEE(){
	return $this->dateOEEPeriodicalReport;
}

}
?>