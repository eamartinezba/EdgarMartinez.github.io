<?php
class TypePersonnel{
	private $idTypePersonnel;
	private $descTypePersonnel;
	private $statusTypePersonnel;

	public function __construct($idTypePersonnel,$descTypePersonnel,$statusTypePersonnel){
		$this->idTypePersonnel=$idTypePersonnel;
		$this->descTypePersonnel=$descTypePersonnel;
		$this->statusTypePersonnel=$statusTypePersonnel;
	}
	public function getIdTypePersonnel(){
		return $this->idTypePersonnel;
	}
	public function getDescTypePersonnel(){
		return $this->descTypePersonnel;
	}
	public function getStatusTypePersonnel(){
		return $this->statusTypePersonnel;
	}
}

?>