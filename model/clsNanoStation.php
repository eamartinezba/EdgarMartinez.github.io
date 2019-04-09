<?php
class NanoStation{
	private $idNanoStation;
	private $modelNanoStation;
	private $brandNanoStation;
	private $statusNanoStation;

	public function __construct($idNanoStation,$modelNanoStation,$brandNanoStation,$statusNanoStation){
		$this->idNanoStation=$idNanoStation;
		$this->modelNanoStation=$modelNanoStation;
		$this->brandNanoStation=$brandNanoStation;
		$this->statusNanoStation=$statusNanoStation;
	}

	public function getIdNanoStation(){
		return $this->idNanoStation;
	}
	public function getModelNanoStation(){
		return $this->modelNanoStation;
	}
	public function getBrandNanoStation(){
		return $this->brandNanoStation;
	}
	public function getStatusNanoStation(){
		return $this->statusNanoStation;
	}
}
?>