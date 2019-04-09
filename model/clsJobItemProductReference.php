<?php
class JobItemProductReference{
	private $idJob;
	private $idItemProductReference;
	private $productionUnitItemProduct;
	private $quantityRequested;
	private $quantityProduced;
	private $wasteProduced;
	private $pieceOrWeight;
	private $unitsPacking;
	private $jobItemProductReference;

	public function __construct($idJob,$idItemProductReference,$productionUnitItemProduct,$quantityRequested,$quantityProduced,$wasteProduced,$pieceOrWeight,$unitsPacking,$jobItemProductReference){
		$this->idJob=$idJob;
		$this->idItemProductReference=$idItemProductReference;
		$this->productionUnitItemProduct=$productionUnitItemProduct;
		$this->quantityRequested=$quantityRequested;
		$this->quantityProduced=$quantityProduced;
		$this->wasteProduced=$wasteProduced;
		$this->pieceOrWeight=$pieceOrWeight;
		$this->unitsPacking=$unitsPacking;
		$this->jobItemProductReference=$jobItemProductReference;
	}


	public function getJob(){
		return $this->idJob;
	}
	public function getItemProductReference(){
		return $this->idItemProductReference;
	}
	public function getProductionUnitItemProduct(){
		return $this->productionUnitItemProduct;
	}
	public function getQuantityRequested(){
		return $this->quantityRequested;
	}
	public function getQuantityProduced(){
		return $this->quantityProduced;
	}
	public function getWasteProduced(){
		return $this->wasteProduced;
	}
	public function getPieceOrWeight(){
		return  $this->pieceOrWeight;
	}
	public function getUnitsPacking(){
		return $this->unitsPacking;
	}
	public function getJobItemProductReference(){
		return $this->jobItemProductReference;
	}

	
}

?>