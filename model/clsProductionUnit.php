<?php
class ProductionUnit{
	
	private $idProductionUnit;
	private $routeOperationProductionUnit;
	private $dataRepositoryProductionUnit;
	private $DABProductionUnit;
	private $areaProductionUnit;
	private $descProductionUnit;
	private $inventoryPlateProductionUnit;
    private $goalProgrammingProductionUnit;
    private $goalProductionUnit;
    private $productionUnitCrew;
    private $activeProductionUnit;
	
	public function __construct($idProductionUnit,$routeOperationProductionUnit,$dataRepositoryProductionUnit,$DABProductionUnit,$areaProductionUnit,$descProductionUnit, $inventoryPlateProductionUnit, $goalProgrammingProductionUnit,$goalProductionUnit, $productionUnitCrew,$activeProductionUnit){
		$this->idProductionUnit=$idProductionUnit;
		$this->routeOperationProductionUnit=$routeOperationProductionUnit;
		$this->dataRepositoryProductionUnit=$dataRepositoryProductionUnit;
		$this->DABProductionUnit=$DABProductionUnit;
		$this->areaProductionUnit=$areaProductionUnit;
		$this->descProductionUnit=$descProductionUnit;
		$this->inventoryPlateProductionUnit=$inventoryPlateProductionUnit;
		$this->goalProgrammingProductionUnit=$goalProgrammingProductionUnit;
		$this->goalProductionUnit=$goalProductionUnit;
		$this->productionUnitCrew=$productionUnitCrew;
        $this->activeProductionUnit=$activeProductionUnit;
	}
	
	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getRouteOperationProductionUnit(){
		return $this->routeOperationProductionUnit;
	}
	public function getDataRepositoryProductionUnit(){
		return $this->dataRepositoryProductionUnit;
	}
	public function getDABProductionUnit(){
		return $this->DABProductionUnit;
	}
	public function getAreaProductionUnit(){
		return $this->areaProductionUnit;
	}
	
	public function getDescProductionUnit(){
		return $this->descProductionUnit;
	}
	
	public function getInventoryPlateProductionUnit(){
		return $this->inventoryPlateProductionUnit;
	}
    
	public function getGoalProgrammingProductionUnit(){
		return $this->goalProgrammingProductionUnit;
	}
	public function getGoalProductionUnit(){
		return $this->goalProductionUnit;
	}
	public function getProductionUnitCrew(){
		return $this->productionUnitCrew;
	}
    public function getActiveProductionUnit(){
		return $this->activeProductionUnit;
	}
	public function __toString(){
		return $this->idProductionUnit.' - '.$this->descProductionUnit.' ('.$this->inventoryPlateProductionUnit.')';
	}
	public function formatProductReference(){
		return $this->idProductionUnit.' - '.$this->inventoryPlateProductionUnit;
	}
}
?>