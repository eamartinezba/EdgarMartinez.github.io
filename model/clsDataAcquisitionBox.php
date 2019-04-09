<?php
class DataAcquisitionBox{
	private $idDataAcquisitionBox;
	private $OPCChannelAcquisitionBox;
	private $versionDataAcquisitionBox;
	private $controlStrategyDataAcquisitionBox;
	private $IpDataAcquisitionBox;
	private $activeDataAcquisitionBox;

	public function __construct($idDataAcquisitionBox,$OPCChannelAcquisitionBox,$versionDataAcquisitionBox,$controlStrategyDataAcquisitionBox,$IpDataAcquisitionBox,$activeDataAcquisitionBox){

		$this->idDataAcquisitionBox=$idDataAcquisitionBox;
		$this->OPCChannelAcquisitionBox=$OPCChannelAcquisitionBox;
		$this->versionDataAcquisitionBox=$versionDataAcquisitionBox;
		$this->controlStrategyDataAcquisitionBox=$controlStrategyDataAcquisitionBox;
		$this->IpDataAcquisitionBox=$IpDataAcquisitionBox;
		$this->activeDataAcquisitionBox=$activeDataAcquisitionBox;	

	}

	public function getIdDataAcquisitionBox(){
		return $this->idDataAcquisitionBox;
	}
	public function getOPCChannelAcquisitionBox(){
		return $this->OPCChannelAcquisitionBox;
	}
	public function getVersionDataAcquisitionBox(){
		return $this->versionDataAcquisitionBox;
	}
	public function getControlStrategyDataAcquisitionBox(){
		return $this->controlStrategyDataAcquisitionBox;
	}	
	public function getIpDataAcquisitionBox(){
		return $this->IpDataAcquisitionBox;
	}
	public function getActiveDataAcquisition(){
		return $this->activeDataAcquisitionBox;
	}

	
}
?>