<?php
class ItemProductReferenceProductionUnit
{
	private $productionUnitItemProductReference;
	private $idProductionUnit;
	private $idItemProductReference;
	private $quantityCavity;
	private $goalProduction;
	private $cycleProduction;
	private $activeCavityItemProduction;

	public function __construct($productionUnitItemProductReference,$idProductionUnit,$idItemProductReference,$quantityCavity, $goalProduction,$cycleProduction,$activeCavityItemProduction){
		$this->productionUnitItemProductReference=$productionUnitItemProductReference;
		$this->idProductionUnit=$idProductionUnit;
		$this->idItemProductReference=$idItemProductReference;
		$this->quantityCavity=$quantityCavity;
		$this->goalProduction=$goalProduction;
		$this->cycleProduction=$cycleProduction;
		$this->activeCavityItemProduction=$activeCavityItemProduction;
	}

	public function getProductionUnitItemProductReference(){
		return $this->productionUnitItemProductReference;
	}
	public function getProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getItemProductReference(){
		return $this->idItemProductReference;
	}
	public function getQuantityCavity(){
		return $this->quantityCavity;
	}
	public function getGoalProduction(){
		return $this->goalProduction;
	}
	public function getCycleProduction(){
		return $this->cycleProduction;
	}
	public function getActiveCavityItemProduction(){
		return $this->activeCavityItemProduction;
	}
}

?>