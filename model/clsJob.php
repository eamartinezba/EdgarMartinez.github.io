<?php
class Job{
	private $idJob;
	private $codSecundaryJob;
	private $statusJob;
	private $dateSetJob;
	private $priorityJob;
	private $dateEndJob;
	private $endedJob;

	public function __construct($idJob,$codSecundaryJob,$statusJob,$dateSetJob,$priorityJob,$dateEndJob,$endedJob){
		$this->idJob=$idJob;
		$this->codSecundaryJob=$codSecundaryJob;
		$this->statusJob=$statusJob;
		$this->dateSetJob=$dateSetJob;
		$this->priorityJob=$priorityJob;
		$this->dateEndJob=$dateEndJob;
		$this->endedJob=$endedJob;	
	}

	public function getIdJob(){
		return $this->idJob;
	}
	public function getCodSecundaryJob(){
		return $this->codSecundaryJob;
	}
	public function getStatusJob(){
		return $this->statusJob;
	}	
	public function getDateSetJob(){
		return $this->dateSetJob;
	}
	public function getProrityJob(){
		return $this->priorityJob;
	}
	public function getDateEndJob(){
		return $this->dateEndJob;
	}
	public function getEndedProduction(){
		return $this->endedJob;
	}
}

?>