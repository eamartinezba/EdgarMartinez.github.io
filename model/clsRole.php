<?php
class Role{

	private $idRole;
	private $descRole;
	private $resetSystemAccessOnLine;
	private $activeRole;
	public function __construct($idRole, $descRole,$resetSystemAccessOnLine,$activeRole){
		$this->idRole=$idRole;
		$this->descRole=$descRole;
		$this->resetSystemAccessOnLine=$resetSystemAccessOnLine;
		$this->activeRole=$activeRole;
	}
	
	public function getIdRole(){
		return $this->idRole;
	}
	
	public function getDescRole(){
		return $this->descRole;
	}
	public function getResetSystemAccessOnLine(){
		return $this->resetSystemAccessOnLine;
	}
	public function getActiveRole(){
		return $this->activeRole;
	}
	public function __toString(){
		return $this->idRole;
	}
	
}

?>