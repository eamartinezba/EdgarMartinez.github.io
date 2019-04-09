<?php
class ComponentDataAcquisitionBox{
	private $idComponentDataAcquisitionBox;
	private $descComponentDataAcquisitionBox;
	private $modelComponentDataAcquisitionBox;
	private $activeComponentDataAcquisitionBox;

	public function __construct($idComponentDataAcquisitionBox,$descComponentDataAcquisitionBox,$modelComponentDataAcquisitionBox,$activeComponentDataAcquisitionBox){
		$this->idComponentDataAcquisitionBox=$idComponentDataAcquisitionBox;
		$this->descComponentDataAcquisitionBox=$descComponentDataAcquisitionBox;
		$this->modelComponentDataAcquisitionBox=$modelComponentDataAcquisitionBox;
		$this->activeComponentDataAcquisitionBox=$activeComponentDataAcquisitionBox;
	}

	public function getIdComponentDataAcquisitionBox(){
		return $this->idComponentDataAcquisitionBox;
	}
	public function getDescComponentDataAcquisitionBox(){
		return $this->descComponentDataAcquisitionBox;
	}
	public function getModelComponentDataAcquisitionBox(){
		return $this->modelComponentDataAcquisitionBox;
	}
	public function getActiveComponentDataAcquisitionBox(){
		return $this->activeComponentDataAcquisitionBox;
	}
	public function __toString(){
		return $this->descComponentDataAcquisitionBox."(".$this->modelComponentDataAcquisitionBox.")";
	}
}

?>