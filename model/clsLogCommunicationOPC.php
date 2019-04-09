<?php
class LogCommunicationOPC{
	private $idLogCommunicationOPC;
	private $idOpcPu;
	private $idEventType;
	private $registerDateTime;

	public function __construct($idLogCommunicationOPC,$idOpcPu,$idEventType,$registerDateTime){
		$this->idLogCommunicationOPC=$idLogCommunicationOPC;
		$this->idOpcPu=$idOpcPu;
		$this->idEventType=$idEventType;
		$this->registerDateTime=$registerDateTime;
	}

	public function getIdLogCommunicationOPC(){
		return $this->idLogCommunicationOPC;
	}
	public function getIdOpcPu(){
		return $this->idOpcPu;
	}
	public function getIdEventType(){
		return $this->idEventType;
	}
	public function getRegisterDateTime(){
		return $this->registerDateTime;
	}

}
?>