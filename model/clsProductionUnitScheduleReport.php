<?php

Class ProductionUnitScheduleReport{
	
	private $idWorkShift;
	private $descWorkShift;
	private $startTimeWorkShift;
	private $endTimeWorkShift;
	private $dateSchedule;
	
	public function __construct($idWorkShift, $descWorkShift, $startTimeWorkShift, $endTimeWorkShift, $dateSchedule){
		$this->idWorkShift=$idWorkShift;
		$this->descWorkShift=$descWorkShift;
		$this->startTimeWorkShift=$startTimeWorkShift;
		$this->endTimeWorkShift=$endTimeWorkShift;
		$this->dateSchedule=$dateSchedule;		
	}
	
	public function getIdWorkShift(){
		return $this->idWorkShift;
	}
	
	public function getDescWorkShift(){
		return $this->descWorkShift;
	}
	
	public function getStartTimeWorkShift(){
		return  $this->startTimeWorkShift;
	}
	
	public function getEndTimeWorkShift(){
		return $this->endTimeWorkShift;
	}
	
	public function getDateSchedule(){
		return $this->dateSchedule;
	}
}
?>