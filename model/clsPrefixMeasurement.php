<?php
class PrefixMeasurement{
	private $idPrefixMeasurement;
	private $descPrefixMeasurement;
	private $symbolPrefixMeasurement;
	private $spectralNotation;
	private $statusPrefixMeasurement;

	public function __construct($idPrefixMeasurement,$descPrefixMeasurement,$symbolPrefixMeasurement,$spectralNotation,$statusPrefixMeasurement){
		$this->idPrefixMeasurement=$idPrefixMeasurement;
		$this->descPrefixMeasurement=$descPrefixMeasurement;
		$this->symbolPrefixMeasurement=$symbolPrefixMeasurement;
		$this->spectralNotation=$spectralNotation;
		$this->statusPrefixMeasurement=$statusPrefixMeasurement;
	}
	public function getIdPrefixMeasurement(){
		return $this->idPrefixMeasurement;
	}
	public function getDescPrefixMeasurement(){
		return $this->descPrefixMeasurement;
	}
	public function getSymbolPrefixMeasurement(){
		return $this->symbolPrefixMeasurement;
	}
	public function getSpectralNotation(){
		return $this->spectralNotation;
	}
	public function getStatusPrefixMeasurement(){
		return $this->statusPrefixMeasurement;
	}
}
?>