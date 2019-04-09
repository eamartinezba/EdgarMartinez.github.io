<?php
class WorkShift{
	
	private $idWorkShift;
	private $descWorkShift;
	private $startTimeWorkShift;
	private $endTimeWorkShift;
	private $activeWorkShift;
	
	public function __construct($id, $desc, $startTime, $endTime, $activeWorkShift){
		$this->idWorkShift=$id;
		$this->descWorkShift=$desc;
		$this->startTimeWorkShift=$startTime;
		$this->endTimeWorkShift=$endTime;
		$this->activeWorkShift=$activeWorkShift;
	}
	
	public function getIdWorkShift(){
		return $this->idWorkShift;
	}
	
	public function getDescWorkShift(){
		return $this->descWorkShift;
	}
	
	public function getStartWorkShift(){
		return $this->startTimeWorkShift;
	}
	
	public function getEndWorkShift(){
		return $this->endTimeWorkShift;
	}
	
	public function getActiveWorkShift(){
		return $this->activeWorkShift;
	}
	
	public function __toString(){
		return $this->idWorkShift.' '.$this->descWorkShift.' '.substr($this->startTimeWorkShift,0,8).'-'.substr($this->endTimeWorkShift,0,8);
	}
}

?>