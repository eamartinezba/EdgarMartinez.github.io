<?php

Class MachineScheduleReport{
	
	private $turnIdTurn;
	private $descTurn;
	private $startTimeTurn;
	private $endTimeTurn;
	private $dateSchedule;
	
	public function __construct($turnIdTurn, $descTurn, $startTimeTurn, $endTimeTurn, $dateSchedule){
		$this->turnIdTurn=$turnIdTurn;
		$this->descTurn=$descTurn;
		$this->startTimeTurn=$startTimeTurn;
		$this->endTimeTurn=$endTimeTurn;
		$this->dateSchedule=$dateSchedule;		
	}
	
	public function getTurnIdTurn(){
		return $this->turnIdTurn;
	}
	
	public function getDescTurn(){
		return $this->descTurn;
	}
	
	public function getStartTimeTurn(){
		return  $this->startTimeTurn;
	}
	
	public function getEndTimeTurn(){
		return $this->endTimeTurn;
	}
	
	public function getDateSchedule(){
		return $this->dateSchedule;
	}
}
?>