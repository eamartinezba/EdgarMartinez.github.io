<?php
class JobOrderReport{
	private $idJobOrderReport;
	private $codSecundaryJobOrderReport;
	private $referenceJobOrderReport;
	private $jobItemProductReference;
	private $idProductionUnit;
	private $quantityRequestedJobOrderReport;
	private $goalJobOrderReport;
	private $quantityCavityJobOrderReport;
	private $durationJobOrderReport;
	private $availabilityDurationJobOrderReport;
	private $productiveDurationJobOrderReport;
	private $improductiveDurationJobOrderReport;
	private $noScheduleDurationJobOrderReport;
	private $availabilityOEEJobOrderReport;
	private $performanceOEEJobOrderReport;
	private $qualityOEEJobOrderReport;
	private $productiveCapacityJobOrderReport;
	private $realUnitsJobOrderReport;
	private $qualityUnitsJobOrderReport;
	private $wasteUnitsJobOrderReport;
	private $idWorkshift;

	public function __construct($idJobOrderReport,
								$codSecundaryJobOrderReport,
								$referenceJobOrderReport,
								$jobItemProductReference,
								$idProductionUnit,
								$quantityRequestedJobOrderReport,
								$goalJobOrderReport,
								$quantityCavityJobOrderReport,
								$durationJobOrderReport,								
								$availabilityDurationJobOrderReport,
								$productiveDurationJobOrderReport,
								$improductiveDurationJobOrderReport,
								$noScheduleDurationJobOrderReport,
								$availabilityOEEJobOrderReport,
								$performanceOEEJobOrderReport,
								$qualityOEEJobOrderReport,
								$productiveCapacityJobOrderReport, 
								$realUnitsJobOrderReport,
								$qualityUnitsJobOrderReport,
								$wasteUnitsJobOrderReport,
								$idWorkshift){

		$this->idJobOrderReport=$idJobOrderReport;
		$this->codSecundaryJobOrderReport=$codSecundaryJobOrderReport;
		$this->referenceJobOrderReport=$referenceJobOrderReport;
		$this->jobItemProductReference=$jobItemProductReference;
		$this->idProductionUnit=$idProductionUnit;
		$this->quantityRequestedJobOrderReport=$quantityRequestedJobOrderReport;
		$this->goalJobOrderReport=$goalJobOrderReport;
		$this->quantityCavityJobOrderReport=$quantityCavityJobOrderReport;
		$this->durationJobOrderReport=$durationJobOrderReport;
		$this->availabilityDurationJobOrderReport=$availabilityDurationJobOrderReport;
		$this->productiveDurationJobOrderReport=$productiveDurationJobOrderReport;
		$this->improductiveDurationJobOrderReport=$improductiveDurationJobOrderReport;
		$this->noScheduleDurationJobOrderReport=$noScheduleDurationJobOrderReport;
		$this->availabilityOEEJobOrderReport=$availabilityOEEJobOrderReport;
		$this->performanceOEEJobOrderReport=$performanceOEEJobOrderReport;
		$this->qualityOEEJobOrderReport=$qualityOEEJobOrderReport;
		$this->productiveCapacityJobOrderReport=$productiveCapacityJobOrderReport;
		$this->realUnitsJobOrderReport=$realUnitsJobOrderReport;
		$this->qualityUnitsJobOrderReport=$qualityUnitsJobOrderReport;
		$this->wasteUnitsJobOrderReport=$wasteUnitsJobOrderReport;
		$this->idWorkshift=$idWorkshift;
	
	}

	public function getIdJobOrderReport(){
		return $this->idJobOrderReport;
	}
	public function getCodSecundaryJobOrderReport(){
		return $this->codSecundaryJobOrderReport;
	}
		
	public function getReferenceJobOrderReport(){
		return $this->referenceJobOrderReport;
	}
	public function getJobItemProductReference(){
		return $this->jobItemProductReference;
	}
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}	
	public function getQuantityRequestedJobOrderReport(){
		return $this->quantityRequestedJobOrderReport;
	}
	public function getGoalJobOrderReport(){
		return $this->goalJobOrderReport;
	}
	public function getQuantityCavityJobOrderReport(){
		return $this->quantityCavityJobOrderReport;
	}
	public function getDurationJobOrderReport(){
		return $this->durationJobOrderReport;
	}
	public function getAvailabilityDuartionJobOrderReport(){
		return $this->availabilityDurationJobOrderReport;
	}
	public function getProductiveDurationJobOrderReport(){
		return $this->productiveDurationJobOrderReport;
	}
	public function getImproductiveDurationJobOrderReport(){
		return $this->improductiveDurationJobOrderReport;
	}
	public function getNoScheduleDurationJobOrderReport(){
		return $this->noScheduleDurationJobOrderReport;
	}
	public function getAvailabilityOEEJobOrderReport(){
		return $this->availabilityOEEJobOrderReport;
	}
	public function getPerformanceOEEJobOrderReport(){
		return $this->performanceOEEJobOrderReport;
	}
	public function getQualityOEEJobOrderReport(){
		return $this->qualityOEEJobOrderReport;
	}
	public function getProductiveCapacityJobOrderReport(){
		return $this->productiveCapacityJobOrderReport;
	}
	public function getRealUnitsJobOrderReport(){
		return $this->realUnitsJobOrderReport;
	}
	public function getQualityUnitsJobOrderReport(){
		return $this->qualityUnitsJobOrderReport;
	}
	public function getWasteUnitsJobOrderReport(){
		return $this->wasteUnitsJobOrderReport;
	}
	public function getIdWorkshift(){
		return $this->idWorkshift;
	}
}
?>