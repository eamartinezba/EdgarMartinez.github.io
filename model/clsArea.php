<?php

class Area{
	
	private $idArea;
	private $siteArea;
	private $descArea;
	private $activeArea;
	
	public function __construct($idArea, $siteArea, $descArea,$activeArea){
		$this->idArea=$idArea;
		$this->siteArea=$siteArea;
		$this->descArea=$descArea;		
		$this->activeArea=$activeArea;
	}
	
	public function getIdArea(){
		return $this->idArea;
	}
	
	public function getSiteArea(){
		return $this->siteArea;
	}
	
	public function getDescArea(){
		return $this->descArea;
	}
	public function getActiveArea(){
		return $this->activeArea;
	}
	public function __toString(){
		return $this->idArea.'('.$this->descArea.')';
	}
	
	
	
}
?>