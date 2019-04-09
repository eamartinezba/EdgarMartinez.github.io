<?php
class ProductionUnitProductionUnitEvent{
	private $idProductionUnit;
	private $idProductionUnitEvent;
	private $idEventType;
	private $idCounterType;
	private $specialValueProductionUnitEvent; 
	private $shortcutProductionUnitEvent;

	public function __construct($idProductionUnit,$idProductionUnitEvent,$idEventType,$idCounterType,$specialValueProductionUnitEvent,$shortcutProductionUnitEvent){
		$this->idProductionUnit=$idProductionUnit;
		$this->idProductionUnitEvent=$idProductionUnitEvent;
		$this->idEventType=$idEventType;
		$this->idCounterType=$idCounterType;
		$this->specialValueProductionUnitEvent=$specialValueProductionUnitEvent;
		$this->shortcutProductionUnitEvent=$shortcutProductionUnitEvent;	
	}

	public function getIdProductionUnit(){
		return $this->idProductionUnit;
	}

	public function getIdProductionUnitEvent(){
		return $this->idProductionUnitEvent;
	}
	public function getIdEventType(){
		return $this->idEventType;
	}

	public function getIdCounterType(){
		return $this->idCounterType;
	}
	public function getSpecialValueProductionUnitEvent(){
		return $this->specialValueProductionUnitEvent;
	}

	public function getShortcutProductionUnitEvent(){
		return $this->shortcutProductionUnitEvent;
	}	
}
?>