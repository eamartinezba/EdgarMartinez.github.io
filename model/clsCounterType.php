<?php
class CounterType{
	private $idCounterType;
	private $descCounterType;
	private $activeCounterType;

	public function __construct($idCounterType,$descCounterType,$activeCounterType){
		$this->idCounterType=$idCounterType;
		$this->descCounterType=$descCounterType;
		$this->activeCounterType=$activeCounterType;
	}
	public function getIdCounterType(){
		return $this->idCounterType;
	}
	public function getDescCounterType(){
		return $this->descCounterType;
	}
	public function getActiveCounterType(){
		return $this->activeCounterType;
	}
}
?>