<?php

class ProductionUnitTimeLine{
	 	
 	private $idReportProductionUnitTimeLine;
 	private $idProductionUnitEvent;
	private $idWorkshift;
	private $idDataSource;
	private $idProductionUnit;
 	private $stampDateTime;
 	private $durationReport;
 	private $qualityUnits;
	private $wasteUnits;
	private $performanceOEE;
	private $colorProductionUnitEvent;
 	private $acumulateDuration;
	private $availabilityTime;
	private $realUnitsProduction;
	private $production;
	private $qualityOEE;
	private $availabilityOEE;
	private $endDateTime;

	public function __construct($idReportProductionUnitTimeLine,$idProductionUnitEvent,$idWorkshift,$idDataSource, $idProductionUnit, $stampDateTime,$durationReport,$qualityUnits,$wasteUnits,$performanceOEE,$colorProductionUnitEvent,$acumulateDuration,$availabilityTime,$realUnitsProduction,$production,$qualityOEE,$availabilityOEE,$endDateTime=null
						  ){
		$this->idReportProductionUnitTimeLine=$idReportProductionUnitTimeLine;
	 	$this->idProductionUnitEvent=$idProductionUnitEvent;
	 	$this->idWorkshift=$idWorkshift;
		$this->idDataSource=$idDataSource;
		$this->idProductionUnit=$idProductionUnit;
	 	$this->stampDateTime=$stampDateTime;
	 	$this->durationReport=$durationReport;
	 	$this->qualityUnits=$qualityUnits;
		$this->wasteUnits=$wasteUnits;
		$this->performanceOEE=$performanceOEE;
		$this->colorProductionUnitEvent=$colorProductionUnitEvent;
	 	$this->acumulateDuration=$acumulateDuration;
		$this->availabilityTime=$availabilityTime;
		$this->realUnitsProduction=$realUnitsProduction;
		$this->production=$production;
		$this->qualityOEE=$qualityOEE;
		$this->availabilityOEE=$availabilityOEE;
		$this->endDateTime=$endDateTime;
	 	
	}
	
	public function getIdReportProductionUnitTimeLine(){
		return $this->idReportProductionUnitTimeLine;
	}
	public function getIdProductionUnitEvent(){
		return $this->idProductionUnitEvent;
	}
	public function getIdWorkshift(){
		return $this->idWorkshift;
	}
	public function getIdDataSource(){
		return $this->idDataSource;
	}
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getStampDateTime(){
		return $this->stampDateTime;
	}
	public function getDurationReport(){
		return $this->durationReport;
	}
	public function getQualityUnits(){
		return $this->qualityUnits;
	}
	public function getWasteUnits(){
		return $this->wasteUnits;
	}
	public function getPerformanceOEE(){
		return $this->performanceOEE;
	}
	public function getColorProductionUnitEvent(){
		return $this->colorProductionUnitEvent;
	}
	public function getAcumulateDuration(){
		return $this->acumulateDuration;
	}
	public function getAvailabilityTime(){
		return $this->availabilityTime;
	}
	public function getRealUnitsProduction(){
		return $this->realUnitsProduction;
	}
	public function getProduction(){
		return $this->production;
	}
	public function getQualityOEE(){
		return $this->qualityOEE;
	}
	public function getAvailabilityOEE(){
		return $this->availabilityOEE;
	}
	public function getEndDateTime(){
		return $this->endDateTime;
	}
}
?>