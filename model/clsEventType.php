<?php
class EventType{
	private $idEventType;
	private $descEventType;
	private $activeEventType;

	public function __construct($idEventType,$descEventType,$activeEventType){
		$this->idEventType=$idEventType;
		$this->descEventType=$descEventType;
		$this->activeEventType=$activeEventType;
	}	

	public function getIdEventType(){
		return $this->idEventType;
	}
	public function getDescEventType(){
		return $this->descEventType;
	}
	public function getActiveEventType(){
		return $this->activeEventType;
	}
}
?>