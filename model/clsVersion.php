<?php
class Version{
	private $idVersion;

	public function __construct($idVersion){
		$this->idVersion=$idVersion;
	}

	public function getVersion(){
		return $this->idVersion;
	}
}
?>