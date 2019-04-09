<?php
class DataSource{
	private $idDataSource;
	private $descDataSource;
	private $iconDataSource;
	private $activeDataSource;

	public function __construct($idDataSource,$descDataSource,$iconDataSource,$activeDataSource){
		$this->idDataSource=$idDataSource;
		$this->descDataSource=$descDataSource;
		$this->iconDataSource=$iconDataSource;
		$this->activeDataSource=$activeDataSource;
	}

	public function getIdDataSource(){
		return $this->idDataSource;
	}
	public function getDescDataSource(){
		return $this->descDataSource;
	}
	public function getIconDataSource(){
		return $this->iconDataSource;
	}
	public function getActiveDataSource(){
		return $this->activeDataSource;
	}
	
}

?>