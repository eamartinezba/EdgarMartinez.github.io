<?php 
class Dashboard{
	private $idProductionUnitEventReport;
	private $idProductionUnit;
	private $idWorkshift;
	private $idProductionUnitEvent;
	private $bitWorkshift;
	private $colorProductionUnitEvent;
	private $descProductionUnitEvent;
	private $durationProductionUnitEvent;
	private $OEE;
	private $OEEAvailability;
	private $OEEPerformance;
	private $OEEQuality;
	private $today;
	

	public function __construct(
									$idProductionUnitEventReport,
									$idProductionUnit,
									$idWorkshift,
									$idProductionUnitEvent,
									$bitWorkshift,
									$colorProductionUnitEvent,
									$descProductionUnitEvent,
									$durationProductionUnitEvent,
									$OEE,
									$OEEAvailability,
									$OEEPerformance,
									$OEEQuality,
									$today
																	
		){
		$this->idProductionUnitEventReport=$idProductionUnitEventReport;
		$this->idProductionUnit=$idProductionUnit;
		$this->idWorkshift=$idWorkshift;
		$this->idProductionUnitEvent=$idProductionUnitEvent;
		$this->bitWorkshift=$bitWorkshift;
		$this->colorProductionUnitEvent=$colorProductionUnitEvent;
		$this->descProductionUnitEvent=$descProductionUnitEvent;
		$this->durationProductionUnitEvent=$durationProductionUnitEvent;
		$this->OEE=$OEE;
		$this->OEEAvailability=$OEEAvailability;
		$this->OEEPerformance=$OEEPerformance;
		$this->OEEQuality=$OEEQuality;
		$this->today=$today;
		
	}	
	public function getIdProductionUnitEventReport(){
		return $this->idProductionUnitEventReport;
	}
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getIdworkshift(){
		return $this->idWorkshift;
	}
	public function getIdProductionUnitEvent(){
		return $this->idProductionUnitEvent;
	}
	public function getBitWorkshift(){
		return $this->bitWorkshift;
	}
	public function getColorProductionUnitEvent(){
		return $this->colorProductionUnitEvent;
	}
	public function getDescProductionUnitEvent(){
		return $this->descProductionUnitEvent;
	}
	public function getDurationProductionUnitEvent(){
		return $this->durationProductionUnitEvent;
	}
	public function getOEE(){
		return $this->OEE;
	}
	public function getOEEAvailability(){
		return $this->OEEAvailability;
	}
	public function getOEEPerformance(){
		return $this->OEEPerformance;
	}
	public function getOEEQuality(){
		return $this->OEEQuality;
	}
	public function getToday(){
		return $this->today;
	}
}

?>