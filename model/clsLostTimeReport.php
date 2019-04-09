<?php
class LostTimeReport{
	
	private $idReport;
	private $workShiftReport;
	private $idProductionUnitEvent;
	private $colorProductionUnitEvent;
	private $durationProductionUnitEvent;


	public function __construct($idReport,$workShiftReport,$idProductionUnitEvent,$colorProductionUnitEvent,
			 $durationProductionUnitEvent){
		$this->idReport=$idReport;
		$this->workShiftReport=$workShiftReport;
		$this->idProductionUnitEvent=$idProductionUnitEvent;
		$this->colorProductionUnitEvent=$colorProductionUnitEvent;
		$this->durationProductionUnitEvent=$durationProductionUnitEvent;

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
}

?>