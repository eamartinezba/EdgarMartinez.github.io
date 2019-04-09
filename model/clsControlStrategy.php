<?php

class ControlStrategy{
	private $idControlStrategy;
	private $maxWorkshift;
	private $maxQualityEvent;
	private $maxActivePersonnel;
	private $maxItemProductReference;
	private $maxEventProductionUnit;
	private $activeControlStrategy;

	public function __construct($idControlStrategy,$maxWorkshift,$maxQualityEvent,$maxActivePersonnel,$maxItemProductReference,$maxEventProductionUnit,$activeControlStrategy){
		$this->idControlStrategy=$idControlStrategy;
		$this->maxWorkshift=$maxWorkshift;
		$this->maxQualityEvent=$maxQualityEvent;
		$this->maxActivePersonnel=$maxActivePersonnel;
		$this->maxItemProductReference=$maxItemProductReference;
		$this->maxEventProductionUnit=$maxEventProductionUnit;
		$this->activeControlStrategy=$activeControlStrategy;
	}


	public function getIdControlStrategy(){
		return $this->idControlStrategy;
	}
	public function getMaxWorkshift(){
		return $this->maxWorkshift;
	}
	public function getMaxQualityEvent(){
		return $this->maxQualityEvent;
	}
	public function getMaxActivePersonnel(){
		return $this->maxActivePersonnel;
	}
	public function getMaxItemProductReference(){
		return $this->maxItemProductReference;
	}
	public function getMaxEventProductionUnit(){
		return $this->maxEventProductionUnit;
	}
	public function getActiveControlStrategy(){
		return $this->activeControlStrategy;
	}
}
?>