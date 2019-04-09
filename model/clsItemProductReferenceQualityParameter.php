<?php
class ItemProductReferenceQuantityParameter{
	private $idItemProductReference;
	private $idQuality;
	private $idUnitMeasurement;
	private $standardValue;
	private $accuracyValue;

	public function __construct($idItemProductReference,$idQuality,$idUnitMeasurement,$standardValue,$accuracyValue){
		$this->idItemProductReference=$idItemProductReference;
		$this->idQuality=$idQuality;
		$this->idUnitMeasurement=$idUnitMeasurement;
		$this->standardValue=$standardValue;
		$this->accuracyValue=$accuracyValue;
	}
	public function getIdItemProductReference(){
		return $this->idItemProductReference;
	}
	public function getIdQuality(){
		return $this->idQuality;
	}
	public function getIdUnitMeasurement(){
		return $this->idUnitMeasurement;
	}
	public function getStandardValue(){
		return $this->standardValue;
	}
	public function getAccuracyValue(){
		return $this->accuracyValue;
	}
}
?>