<?php
class ProductionUnitEventSubCategory{
	
	private $idProductionUnitEventSubCategory;
	private $categoryProductionUnitEventSubCategory;
	private $descProductionUnitEventSubCategory;
	private $activeProductionUnitEventSubCategory;
	
	public function __construct($idProductionUnitEventSubCategory, $categoryProductionUnitEventSubCategory,$descProductionUnitEventSubCategory,$activeProductionUnitEventSubCategory){
		$this->idProductionUnitEventSubCategory=$idProductionUnitEventSubCategory;
		$this->categoryProductionUnitEventSubCategory=$categoryProductionUnitEventSubCategory;
		$this->descProductionUnitEventSubCategory=$descProductionUnitEventSubCategory;
		$this->activeProductionUnitEventSubCategory=$activeProductionUnitEventSubCategory;
	}
	
	public function getIdProductionUnitEventSubCategory(){
		return $this->idProductionUnitEventSubCategory;
	}
	public function getCategoryProductionUnitEventSubCategory(){
		return $this->categoryProductionUnitEventSubCategory;
	}
	public function getDescProductionUnitEventSubCategory(){
		return $this->descProductionUnitEventSubCategory;
	}
	public function getActiveProductionUnitEventSubCategory(){
		return $this->activeProductionUnitEventSubCategory;
	}
	public function __toString(){
		return $this->descProductionUnitEventSubCategory;
	}
}