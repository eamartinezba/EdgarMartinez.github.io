<?php
class StatusJob{
	private $idStatusJob;
	private $descStatusJob;
	private $activeStatusJob;

	public function __construct($idStatusJob,$descStatusJob,$activeStatusJob){
		$this->idStatusJob=$idStatusJob;
		$this->descStatusJob=$descStatusJob;
		$this->activeStatusJob=$activeStatusJob;
	}
	public function getIdStatusJob(){
		return $this->idStatusJob;
	}
	public function getDescStatusJob(){
		return $this->descStatusJob;
	}
	public function getActiveStatusJob(){
		return $this->activeStatusJob;
	}
}
?>