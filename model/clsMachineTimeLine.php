<?php

class MachineTimeLine{
	 	
 	private $idReportMachineTimeLine;
 	private $dataSourceActivityMachine;
	private $idWorkShift;
 	private $stampDateTime;
 	private $durationReportActivityMachine;
 	private $idSubCategory;
 	private $idActivityMachine;
	private $colorActivityMachine;
	private $descActivityMachine;
	private $bitAvailability;
	private $bitPerformance;
	private $bitQuality;
	private $availabilityOEE;
	private $performanceOEE;
	private $qualityOEE;
	private $realProduction;
	private $wasteProduction;
	private $goodProduction;
	private $idProductionUnit;

	public function __construct($idReportMachineTimeLine, 
								$dataSourceActivityMachine,
								$idWorkShift, 
								$stampDateTime,
								$durationReportActivityMachine,
								$idSubCategory, 
								$idActivityMachine,
								$colorActivityMachine,
								$descActivityMachine,
								$bitAvailability,
								$bitPerformance,
								$bitQuality,
								$availabilityOEE,
								$performanceOEE,
								$qualityOEE,
								$realProduction,
								$wasteProduction,
								$goodProduction,
								$idProductionUnit
						  ){
	
	 	$this->idReportMachineTimeLine=$idReportMachineTimeLine;
	 	$this->dataSourceActivityMachine=$dataSourceActivityMachine;
	 	$this->idWorkShift=$idWorkShift;
	 	$this->stampDateTime=$stampDateTime;
	 	$this->durationReportActivityMachine=$durationReportActivityMachine;	 	
	 	$this->idSubCategory=$idSubCategory;
	 	$this->idActivityMachine=$idActivityMachine;
	 	$this->colorActivityMachine=$colorActivityMachine;
	 	$this->descActivityMachine=$descActivityMachine;
	 	$this->bitAvailability=$bitAvailability;
		$this->bitPerformance=$bitPerformance;
		$this->bitQuality=$bitQuality;
	 	$this->availabilityOEE=$availabilityOEE;
	 	$this->performanceOEE=$performanceOEE;
	 	$this->qualityOEE=$qualityOEE;
	 	$this->realProduction=$realProduction;
	 	$this->wasteProduction=$wasteProduction;
	 	$this->goodProduction=$goodProduction;
	 	$this->idProductionUnit=$idProductionUnit;
	}
	
	public function getIdReportMachineTimeLine(){
		return $this->idReportMachineTimeLine;
	}
	public function getDataSourceMachineTimeLine(){
		return $this->dataSourceActivityMachine;
	}
	public function getIdWorkShift(){
		return $this->idWorkShift;
	}
	public function getDuration(){
		return $this->durationReportActivityMachine;
	}
	public function getStampDateTime(){
		return $this->stampDateTime;
	}

	public function getIdSubCategory(){
		return $this->idSubCategory;
	}
	public function getIdActivityMachine(){
		return $this->idActivityMachine;
	}
	public function getColorActivityMachine(){
		return $this->colorActivityMachine;
	}
	public function getDescActivityMachine(){
		return $this->descActivityMachine;
	}
	public function getBitAvailability(){
		return $this->bitAvailability;
	}
	public function getBitPerformance(){
		return $this->bitPerformance;
	}
	public function getBitQuality(){
		return $this->bitQuality;
	}
	public function getAvailabilityOEE(){
		return $this->availabilityOEE;
	}
	public function getPerformanceOEE(){
		return $this->performanceOEE;
	}
	public function getQualityOEE(){
		return $this->qualityOEE;
	}
	public function getRealProduction(){
		return $this->realProduction;
	}
	public function getWasteProduction(){
		return $this->wasteProduction;
	}
	public function getGoodProduction(){
		return $this->goodProduction;
	}
	public function getIdProductionUni(){
		return $this->idProductionUnit;
	}
}
?>