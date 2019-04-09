<?php
class AssemblyDataAcquisitionBox{
	private $idDataAcquisitionBox;
	private $idComponentDAB;
	private $serialAssemblyDAB;

	public function __construct($idDataAcquisitionBox,$idComponentDAB,$serialAssemblyDAB){

		$this->idDataAcquisitionBox=$idDataAcquisitionBox;
		$this->idComponentDAB=$idComponentDAB;
		$this->serialAssemblyDAB=$serialAssemblyDAB;
	}

	public function getIdDataAcquisitionBox(){
		return $this->idDataAcquisitionBox;
	}
	public function getIdComponentDAB(){
		return $this->idComponentDAB;
	}
	public function getSerialAssemblyDAB(){
		return $this->serialAssemblyDAB;
	}
}
?>