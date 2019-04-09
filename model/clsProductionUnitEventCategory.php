<?php
class ProductionUnitEventCategory{
	
	private $idProductionUnitEventCategory;
	private $descProductionUnitEventCategory;
	private $activeProductionUnitEventCategory;
	
	public function __construct($idProductionUnitEventCategory, $descProductionUnitEventCategory,$activeProductionUnitEventCategory){
		$this->idProductionUnitEventCategory=$idProductionUnitEventCategory;
		$this->descProductionUnitEventCategory=$descProductionUnitEventCategory;
		$this->activeProductionUnitEventCategory=$activeProductionUnitEventCategory;
	}
	
	public function getIdProductionUnitEventCategory(){
		return $this->idProductionUnitEventCategory;
	}
	
	public function getDescProductionUnitEventCategory(){
		return $this->descProductionUnitEventCategory;
	}
	public function getActiveProductionUnitEventCategory(){
		return $this->activeProductionUnitEventCategory;
	}
	public function __toString(){
		return $this->descProductionUnitEventCategory;
	}
}
?>