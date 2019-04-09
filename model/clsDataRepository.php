<?php
class DataRepository{
	private $idDataRepository;
	private $descDataRepository;
	private $activeDataRepository;

	public function __construct($idDataRepository,$descDataRepository,$activeDataRepository){
		$this->idDataRepository=$idDataRepository;
		$this->descDataRepository=$descDataRepository;
		$this->activeDataRepository=$activeDataRepository;
	}

	public function getIdDataRepository(){
		return $this->idDataRepository;
	}
	public function getDescDataRepository(){
		return $this->descDataRepository;
	}
	public function getActiveDataRepository(){
		return $this->activeDataRepository;
	}
}
?>