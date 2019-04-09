<?php
class Site{
	
	private $idSite;
	private $idEnterpriseSite;
	private $addressSite;
	private $startTimeDaySite;
	private $startSystemDateTime;
	private $numberDaysHotReport;
	private $phoneNumberSite;
	private $defaultOperator;
	private $defaultJob;
	private $defaultItemProductReference;
	private $statusDataDispersion;
	private $statusLoadDashboard;
	private $activeSite;
	private $activeBWX;
	
	public function __construct($idSite,$idEnterpriseSite,$addressSite,$startTimeDaySite,$startSystemDateTime,$numberDaysHotReport,$phoneNumberSite,$defaultOperator,$defaultJob,$defaultItemProductReference,$statusDataDispersion,$statusLoadDashboard,$activeSite,$activeBWX){
		$this->idSite=$idSite;
		$this->idEnterpriseSite=$idEnterpriseSite;
		$this->addressSite=$addressSite;
		$this->startTimeDaySite=$startTimeDaySite;
		$this->startSystemDateTime=$startSystemDateTime;
		$this->numberDaysHotReport=$numberDaysHotReport;
		$this->phoneNumberSite=$phoneNumberSite;
		$this->defaultOperator=$defaultOperator;
		$this->defaultJob=$defaultJob;
		$this->defaultItemProductReference=$defaultItemProductReference;
		$this->statusDataDispersion=$statusDataDispersion;
		$this->statusLoadDashboard=$statusLoadDashboard;
		$this->activeSite=$activeSite;
		$this->activeBWX=$activeBWX;
	}
	
	
	public function getIdSite(){
		return $this->idSite;
	}	
	public function getIdEnterpriseSite(){
		return $this->idEnterpriseSite;
	}	
	public function getAddressSite(){
		return $this->addressSite;
	}	
	public function getStartTimeDaySite(){
		return $this->startTimeDaySite;
	}	
	public function getStartSystemDateTime(){
		return $this->startSystemDateTime;
	}	
	public function getNumberDaysHotReport(){
		return $this->numberDaysHotReport;
	}	
	public function getPhoneNumberSite(){
		return $this->phoneNumberSite;
	}
	public function getDefaultOperator(){
		return $this->defaultOperator;
	}
	public function getDefaultJob(){
		return $this->defaultJob;
	}
	public function getDefaultItemProductReference(){
		return $this->defaultItemProductReference;
	}
	public function getActiveDataDispersion(){
		return $this->statusDataDispersion;
	}
	public function getActiveLoadDashboard(){
		return $this->statusLoadDashboard;
	}	
	public function getActiveSite(){
		return $this->activeSite;
	}
	public function getActiveBWX(){
		return $this->activeBWX;
	}
	public function __toString(){
		return $this->idEnterpriseSite.'-'.$this->addressSite;
	}
}
?>
