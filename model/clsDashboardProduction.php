<?php 
class DashboardProduction{
	private $idProductionUnitEventReport;
	private $idProductionUnit;
	private $idWorkshift;
	private $codSecundaryJob;
	private $idItemProductReference;
	private $descItemProductReference;
	private $bitWorkshift;
	private $qualityUnits;
	private $OEE;
	private $OEEAvailability;
	private $OEEPerformance;
	private $OEEQuality;
	private $today;
	

	public function __construct(
									$idProductionUnitEventReport,
									$idProductionUnit,
									$idWorkshift,
									$codSecundaryJob,
									$idItemProductReference,
									$descItemProductReference,
									$bitWorkshift,
									$qualityUnits,
									$OEE,
									$OEEAvailability,
									$OEEPerformance,
									$OEEQuality,
									$today
																	
		){
		$this->idProductionUnitEventReport=$idProductionUnitEventReport;
		$this->idProductionUnit=$idProductionUnit;
		$this->idWorkshift=$idWorkshift;
		$this->codSecundaryJob=$codSecundaryJob;
		$this->idItemProductReference=$idItemProductReference;
		$this->descItemProductReference=$descItemProductReference;
		$this->bitWorkshift=$bitWorkshift;
		$this->qualityUnits=$qualityUnits;
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
	public function getCodSecundaryJob(){
		return $this->codSecundaryJob;
	}
	public function getBitWorkshift(){
		return $this->bitWorkshift;
	}
	public function getIdItemProductReference(){
		return $this->idItemProductReference;
	}
	public function getDescItemProductReference(){
		return $this->descItemProductReference;
	}
	public function getQualityUnits(){
		return $this->qualityUnits;
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