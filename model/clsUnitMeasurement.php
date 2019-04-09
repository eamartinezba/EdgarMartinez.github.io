<?php
class UnitMeasurement{
	private $idUnitMeasurement;
	private $descUnitMeasurement;
	private $symbolUnitMeasurement;
	private $activeUnitMeasurement;

	public function __construct($idUnitMeasurement,$descUnitMeasurement,$symbolUnitMeasurement,$activeUnitMeasurement){
		$this->idUnitMeasurement=$idUnitMeasurement;
		$this->descUnitMeasurement=$descUnitMeasurement;
		$this->symbolUnitMeasurement=$symbolUnitMeasurement;
		$this->activeUnitMeasurement=$activeUnitMeasurement;
	}

	public function getIdUnitMeasurement(){
		return $this->idUnitMeasurement;
	}
	public function getDescUnitMeasurement(){
		return $this->descUnitMeasurement;
	}
	public function getSymbolUnitMeasurement(){
		return $this->symbolUnitMeasurement;
	}
	public function getActiveUnitMeasurement(){
		return $this->activeUnitMeasurement;
	}
}
?>