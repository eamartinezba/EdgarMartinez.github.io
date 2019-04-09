<?php
class OEEAreaReport{
	private $totalDuration;
	private $qualityUnits;
	private $wasteUnits;
	private $availableDuration;
	private $productiveDuration;
	private $performanceOEE;
	private $idProductionUnit;
	private $noScheduleDuration;
	private $improductiveDuration;
	private $availabilityOEE;
	private $realUnits;
	private $productiveCapacity;
	private $qualityOEE;

	public function __construct($totalDuration,$qualityUnits,$wasteUnits,$availableDuration,$productiveDuration,$performanceOEE,$idProductionUnit,$noScheduleDuration,$improductiveDuration,$availabilityOEE,$realUnits,$productiveCapacity,$qualityOEE){

		$this->totalDuration=$totalDuration;
		$this->qualityUnits=$qualityUnits;
		$this->wasteUnits=$wasteUnits;
		$this->availableDuration=$availableDuration;
		$this->productiveDuration=$productiveDuration;
		$this->performanceOEE=$performanceOEE;
		$this->idProductionUnit=$idProductionUnit;
		$this->noScheduleDuration=$noScheduleDuration;
		$this->improductiveDuration=$improductiveDuration;
		$this->availabilityOEE=$availabilityOEE;
		$this->realUnits=$realUnits;
		$this->productiveCapacity=$productiveCapacity;
		$this->qualityOEE=$qualityOEE;
	}

	public function getTotalDuration(){
		return $this->totalDuration;
	}
	public function getQualityUnits(){
		return $this->qualityUnits;
	}
	public function getWasteUnits(){
		return $this->wasteUnits;
	}
	public function getAvailableDuration(){
		return $this->availableDuration;
	}
	public function getProductiveDuration(){
		return $this->productiveDuration;
	}
	public function getPerformanceOEE(){
		return $this->performanceOEE;
	}
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getNoScheduleDuration(){
		return $this->noScheduleDuration;
	}
	public function getImproductiveDuration(){
		return $this->improductiveDuration;
	}
	public function getAvailabilityOEE(){
		return $this->availabilityOEE;
	}
	public function getRealUnits(){
		return $this->realUnits;
	}
	public function getProductiveCapacity(){
		return $this->productiveCapacity;
	}
	public function getQualityOEE(){
		return $this->qualityOEE;
	}

}
?>