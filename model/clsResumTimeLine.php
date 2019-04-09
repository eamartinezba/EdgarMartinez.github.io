<?php
class ResumTimeLine{
	private $idDailySummary;
	private $idWorkShift;
	private $nonScheduleTime;
	private $scheduleTime;
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

	public function __construct($idDailySummary,$idWorkShift,$nonScheduleTime,$scheduleTime,$availableTime,$productiveTime,$unProductiveTime,$capability,$realProduction,$qualityProduction,$wasteProduction,$availabilityOEE,$performanceOEE,$qualityOEE){
		$this->idDailySummary=$idDailySummary;
		$this->idWorkShift=$idWorkShift;
		$this->nonScheduleTime=$nonScheduleTime;
		$this->scheduleTime=$scheduleTime;
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

	public function getIdDailySummary(){
		return $this->idDailySummary;
	}
	public function getIdWorkShift(){
		return $this->idWorkShift;
	}
	public function getNonScheduleTime(){
		return $this->nonScheduleTime;
	}
	public function getScheduleTime(){
		return $this->scheduleTime;
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