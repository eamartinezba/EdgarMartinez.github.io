<?php 

class Personnel
{
	private $idPersonnel;
	private $enterprisePersonnel;
	private $typePersonnel;
	private $firstnamePersonnel;
	private $lastnamePersonnel;
	private $adressPersonnel;
	private $phoneNumberPersonnel;
	private $emailPersonnel;
	private $observationPersonnel;
	private $activePersonnel;
	private $includeLogin;
	
	public function __construct($idPersonnel,$enterprisePersonnel,$typePersonnel,$firstnamePersonnel,$lastnamePersonnel,$adressPersonnel,$phoneNumberPersonnel,$emailPersonnel,$observationPersonnel,$activePersonnel,$includeLogin)
	{
		$this->idPersonnel=$idPersonnel;
		$this->enterprisePersonnel=$enterprisePersonnel;
		$this->typePersonnel=$typePersonnel;
		$this->firstnamePersonnel=$firstnamePersonnel;
		$this->lastnamePersonnel=$lastnamePersonnel;
		$this->adressPersonnel=$adressPersonnel;
		$this->phoneNumberPersonnel=$phoneNumberPersonnel;
		$this->emailPersonnel=$emailPersonnel;
		$this->observationPersonnel=$observationPersonnel;
		$this->activePersonnel=$activePersonnel;
		$this->includeLogin=$includeLogin;
	}
	public function getIdPersonnel(){
		return $this->idPersonnel;
	}

	public function getEnterprisePersonnel(){
		return $this->enterprisePersonnel;
	}
	public function getTypePersonnel(){
		return $this->typePersonnel;
	}
	public function getFirstnamePersonnel(){
		return $this->firstnamePersonnel;
	}

	public function getLastnamePersonnel(){
		return $this->lastnamePersonnel;
	}

	public function getAdressPersonnel(){
		return $this->adressPersonnel;
	}

	public function getPhoneNumberPersonnel(){
		return $this->phoneNumberPersonnel;
	}

	public function getEmailPersonnel(){
		return $this->emailPersonnel;
	}

	public function getObservationPersonnel(){
		return $this->observationPersonnel;
	}
	public function getActivePersonnel(){
		return $this->activePersonnel;
	}
	public function getIncludeLogin(){
		return $this->includeLogin;
	}
	public function getPersonalizeName(){
        
        if(strrpos(trim($this->firstnamePersonnel),' ') != null){
            $name=substr($this->firstnamePersonnel, 0, (strpos($this->firstnamePersonnel,' ')+2) ).'. ';
        }else{
            $name=$this->firstnamePersonnel;
        }
        return $name. " " . $this->lastnamePersonnel;
    }
	public function __toString(){
		return $this->idPersonnel ." - ".$this->firstnamePersonnel ." ". $this->lastnamePersonnel; 
	}
}


?>