<?php
class ItemProductReference 
{
	private $idItemProductReference;
	private $descItemProductReference;
	private $unitsPackingItemProductReference;
	private $dateSetItemProductReference;
	private $activeItemProductReference;

	function __construct($idItemProductReference,$descItemProductReference,$unitsPackingItemProductReference,$dateSetItemProductReference,$activeItemProductReference)
	{
		$this->idItemProductReference=$idItemProductReference;
		$this->descItemProductReference=$descItemProductReference;
		$this->unitsPackingItemProductReference=$unitsPackingItemProductReference;
		$this->dateSetItemProductReference=$dateSetItemProductReference;
		$this->activeItemProductReference=$activeItemProductReference;
	}

	public function  getIdItemProductReference(){
		return $this->idItemProductReference;
	}
	public function getDescItemProductReference(){
		return $this->descItemProductReference;
	}
	public function getUnitPacking(){
		return $this->unitsPackingItemProductReference;
	}
	public function getDateSetItemProductReference(){
		return $this->dateSetItemProductReference;
	}
	public function getActiveItemProductReference(){
		return $this->activeItemProductReference;
	}
	public function __toString(){
		return $this->descItemProductReference." - ". $this->idItemProductReference;
	}
}
?>