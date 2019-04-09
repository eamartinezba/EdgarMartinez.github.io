<?php
class SystemAccess{
	private $idSystemAccess;
	private $personnelSystemAccess;
	private $roleSystemAccess;
	private $passwordSystemAccess;
	private $onLine;
	private $statusSystemAccess;
	private $activeTwoFA;
	private $secretKeyTwoFA;
	
	public function __construct($idSystemAccess, $personnelSystemAccess, $roleSystemAccess, $passwordSystemAccess, $onLine,$statusSystemAccess,$activeTwoFA,$secretKeyTwoFA){
		$this->idSystemAccess=$idSystemAccess;
		$this->personnelSystemAccess=$personnelSystemAccess;
		$this->roleSystemAccess=$roleSystemAccess;
		$this->passwordSystemAccess=$passwordSystemAccess;
		$this->onLine=$onLine;
		$this->statusSystemAccess=$statusSystemAccess;
		$this->activeTwoFA=$activeTwoFA;
		$this->secretKeyTwoFA=$secretKeyTwoFA;
	}
	
	public function getIdSystemAccess(){
		return $this->idSystemAccess;
	}	
	public function getPersonnelSystemAccess(){
		return $this->personnelSystemAccess;
	}		
	public function getRoleSystemAccess(){
		return $this->roleSystemAccess;
	}
	public function getPasswordSystemAccess(){
		return $this->passwordSystemAccess;
	}
	public function getOnLine(){
		return $this->onLine;
	}
	public function getStatusSystemAccess(){
		return $this->statusSystemAccess;
	}
	public function getActiveTwoFA(){
		return $this->activeTwoFA;
	}
	public function getSecretKeyTwoFA(){
		return $this->secretKeyTwoFA;
	}
	
	public function __toString(){
		return $this->idSystemAccess;
	}
	
}
?>