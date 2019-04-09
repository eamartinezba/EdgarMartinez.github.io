<?php
class DailyReport{

	private $idReport;
	private $workShiftReport;
	private $idProductionUnitEvent;
	private $colorProductionUnitEvent;
	private $durationProductionUnitEvent;
	private $idProductionUnit;

	public function __construct($idReport,$workShiftReport,$idProductionUnitEvent,$colorProductionUnitEvent,
			 $durationProductionUnitEvent,$idProductionUnit=null){
		$this->idReport=$idReport;
		$this->workShiftReport=$workShiftReport;
		$this->idProductionUnitEvent=$idProductionUnitEvent;
		$this->colorProductionUnitEvent=$colorProductionUnitEvent;
		$this->durationProductionUnitEvent=$durationProductionUnitEvent;
		$this->idProductionUnit=$idProductionUnit;

	}
	public function getIdReport(){
		return $this->idReport;
	}
	public function getWorkShiftReport(){
		return $this->workShiftReport;
	}
	public function getIdProductionUnitEvent(){
		return $this->idProductionUnitEvent;
	}

	public function getDescActivityMachine(){
		return $this->descActivityMachine;
	}

	public function getColorProductionUnitEvent(){
		return $this->colorProductionUnitEvent;
	}
	public function getDurationProductionUnitEvent(){
		return $this->durationProductionUnitEvent;
	}
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}

	
}
?>