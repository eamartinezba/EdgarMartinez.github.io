<?php
class AnalogReport
{
	private $idProductionUnit;
	private $analogTime;
	private $totalValue;
	
	public function __construct($idProductionUnit,$analogTime, $totalValue){
		$this->idProductionUnit=$idProductionUnit;
		$this->totalValue=$totalValue;
		$this->analogTime=$analogTime;
	}
	
	public function getAnalogProductionUnit(){
		return $this->idProductionUnit;
	}
	public function getTotalValue(){
		return $this->totalValue;
	}
	
	public function getAnalogTime(){
		return $this->analogTime;
	}
}
?>