<?php
class QualityParameter{
	private $idQualityParameter;
	private $descQualityParameter;
	private $activeQualityParameter;

	public function __construct($idQualityParameter,$descQualityParameter,$activeQualityParameter){
		$this->idQualityParameter=$idQualityParameter;
		$this->descQualityParameter=$descQualityParameter;
		$this->activeQualityParameter=$activeQualityParameter;
	}
	public function getIdQualityParameter(){
		return $this->idQualityParameter;
	}
	public function getDescQualityParameter(){
		return $this->descQualityParameter;
	}
	public function getActiveQualityParameter(){
		return $this->activeQualityParameter;
	}
}
?>