<?php
class JobOrderInventory{
	private $dateJobOrderInventory;
	private $workshiftJobOrderInventory;
	private $jobInventory;
	private $itemProductReferenceInventory;
	private $jobItemProductInventory;
	private $personnelJobOrderInventory;
	private $quantityInventory;
	private $purgeWeightInventory;
	private $massWeightInventory;

	public function __construct($dateJobOrderInventory,$workshiftJobOrderInventory,$jobInventory,$itemProductReferenceInventory,$jobItemProductInventory,$personnelJobOrderInventory,$quantityInventory,$purgeWeightInventory,$massWeightInventory){
		$this->dateJobOrderInventory=$dateJobOrderInventory;
		$this->workshiftJobOrderInventory=$workshiftJobOrderInventory;
		$this->jobInventory=$jobInventory;
		$this->itemProductReferenceInventory=$itemProductReferenceInventory;
		$this->jobItemProductInventory=$jobItemProductInventory;
		$this->personnelJobOrderInventory=$personnelJobOrderInventory;
		$this->quantityInventory=$quantityInventory;
		$this->purgeWeightInventory=$purgeWeightInventory;
		$this->massWeightInventory=$massWeightInventory;
	}

	public function getDateJobOrderInventory(){
		return $this->dateJobOrderInventory;
	}
	public function getWorkshitJobOrderInventory(){
		return $this->workshiftJobOrderInventory;
	}
	public function getJobInventory(){
		return $this->jobInventory;
	}
	public function getItemProductReferenceInventory(){
		return $this->itemProductReferenceInventory;
	}
	public function getJobItemProductInventory(){
		return $this->jobItemProductInventory;
	}
	public function getPersonnelJobOrderInventory(){
		return $this->personnelJobOrderInventory;
	}
	public function getQuantityInventory(){
		return $this->quantityInventory;
	}
	public function getPurgeWeightInventory(){
		return $this->purgeWeightInventory;
	}
	public function getMassWeightInventory(){
		return $this->massWeightInventory;
	}
	public function setQuantityInventory($quantityInventory){
		return $this->quantityInventory+=$quantityInventory;
	}
	public function setUserJobOrderInventory($personnelJobOrderInventory){
		$this->personnelJobOrderInventory=$personnelJobOrderInventory;
	}
	public function setPurgeWeightInventory($purgeWeightInventory){
		$this->purgeWeightInventory+=$purgeWeightInventory;
	}
	public function setMassWeightInventory($massWeightInventory){
		$this->massWeightInventory+=$massWeightInventory;
	}
}
?>