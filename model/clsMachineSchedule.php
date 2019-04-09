<?php

class MachineSchedule{
	
	private $idMinTimeOnTurn;
	private $idMachine;
	private $dateSchedule;
	
	
	public function __construct($idMinTimeOnTurn, $idMachine, $dateSchedule){
		$this->idMinTimeOnTurn=$idMinTimeOnTurn;
		$this->idMachine=$idMachine;
		$this->dateSchedule=$dateSchedule;
		
	}
	
	public function getIdMinTimeOnTurn(){
		return $this->idMinTimeOnTurn;
	}
	
	public function getIdMachine(){
		return $this->idMachine;
	}
	
	public function getDateSchedule(){
		return $this->dateSchedule;
	}
	
	
}

?>