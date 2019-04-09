<?php
class ConsolidateResum{
	private $idConsolidateResum;
	private $scheduleTime;
	private $noScheduleTime;
	private $availableTime;
	private $productiveTime;
	private $unProductiveTime;
	private $capability;
	private $realProduction;
	private $qualityProduction;
	private $wasteProduction;
	private $availabilityOEE;
	private $performanceOEE;
	private $qualityOEE;

	public function __construct($idConsolidateResum,$scheduleTime,$noScheduleTime,$availableTime,$productiveTime,$unProductiveTime,$capability,$realProduction,$qualityProduction,$wasteProduction,$availabilityOEE,$performanceOEE,$qualityOEE){
		$this->idConsolidateResum=$idConsolidateResum;
		$this->scheduleTime=$scheduleTime;
		$this->noScheduleTime=$noScheduleTime;
		$this->availableTime=$availableTime;
		$this->productiveTime=$productiveTime;
		$this->unProductiveTime=$unProductiveTime;
		$this->capability=$capability;
		$this->realProduction=$realProduction;
		$this->qualityProduction=$qualityProduction;
		$this->wasteProduction=$wasteProduction;
		$this->availabilityOEE=$availabilityOEE;
		$this->performanceOEE=$performanceOEE;
		$this->qualityOEE=$qualityOEE;
	}

	public function getIdConsolidateResumt(){
		return $this->idConsolidateResum;
	}
	public function getScheduleTime(){
		return $this->scheduleTime;
	}
	public function getNoScheduleTime(){
		return $this->noScheduleTime;
	}
	public function getAvailableTime(){
		return $this->availableTime;
	}
	public function getProductiveTime(){
		return $this->productiveTime;
	}
	public function getUnProductiveTime(){
		return $this->unProductiveTime;
	}
	public function getCapability(){
		return $this->capability;
	}
	public function getRealProduction(){
		return $this->realProduction;
	}
	public function getQualityProduction(){
		return $this->qualityProduction;
	}
	public function getWasteProduction(){
		return $this->wasteProduction;
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
}

?>