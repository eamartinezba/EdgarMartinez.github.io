<?php

class ProductionUnitSchedule{
	
	private $idMachine;
	private $idWorkShift;
	private $startDateSchedule;
	private $endDateSchedule;
	
	
	public function __construct($idMachine,$idWorkShift,$startDateSchedule,$endDateSchedule){
		$this->idMachine=$idMachine;
		$this->idWorkShift=$idWorkShift;
		$this->startDateSchedule=$startDateSchedule;
		$this->endDateSchedule=$endDateSchedule;
		
	}
	
	public function getIdMinTimeOnTurn(){
		return $this->idWorkShift;
	}
	
	public function getIdMachine(){
		return $this->idMachine;
	}
	
	public function getStartDateSchedule(){
		return $this->startDateSchedule;
	}
	public function getEndDateSchedule(){
		return $this->endDateSchedule;
	}
	
}

?>