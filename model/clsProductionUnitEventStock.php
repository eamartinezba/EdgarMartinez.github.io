<?php

class ProductionUnitEventStock{
	
	private $idProductionUnitEvent;
	private $subCategoryProductionUnitEvent;
	private $descProductionUnitEvent;
	private $colorCodeProductionUnitEvent;
    private $stopProductionUnitEvent;
	private $activeProductionUnitEvent;
	
	public function __construct($idProductionUnitEvent,$subCategoryProductionUnitEvent,$descProductionUnitEvent,$colorCodeProductionUnitEvent,$stopProductionUnitEvent,$activeProductionUnitEvent){
		$this->idProductionUnitEvent=$idProductionUnitEvent;
		$this->subCategoryProductionUnitEvent=$subCategoryProductionUnitEvent;
		$this->descProductionUnitEvent=$descProductionUnitEvent;
		$this->colorCodeProductionUnitEvent=$colorCodeProductionUnitEvent;
       	$this->stopProductionUnitEvent=$stopProductionUnitEvent;
		$this->activeProductionUnitEvent=$activeProductionUnitEvent;
	 
	}
	
	public function getIdProductionUnitEvent(){
		return $this->idProductionUnitEvent;
	}	
	public function getSubCategoryProductionUnitEvent(){
		return $this->subCategoryProductionUnitEvent;
	}	
	public function getDescProductionUnitEvent(){
		return $this->descProductionUnitEvent;
	}
	public function getDescReportProductionUnitEvent(){
		$posString=strrpos($this->descProductionUnitEvent,'-');
		if($posString>0){
			$posString+=1;
		}
		return ucwords(strtolower(strtr(substr($this->descProductionUnitEvent,$posString),"ÁÉÍÓÚ","áéíóú")));

	}
	public function getColorCodeProductionUnitEvent(){
		return $this->colorCodeProductionUnitEvent;
	}
	public function getStopProductionUnitEvent(){
		return $this->stopProductionUnitEvent;
	}
	public function getActiveProductionUnitEvent(){
		return $this->activeProductionUnitEvent;
	}
	public function __toString(){
		return $this->idProductionUnitEvent." - ".$this->descProductionUnitEvent;
	}

}
?>