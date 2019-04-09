<?php
class OPCChannel{
	private $idOPCChannel;
	private $statusCommunicationOPCChanel;
	private $activeOPCChannel;

	public function __construct($idOPCChannel,$statusCommunicationOPCChanel,$activeOPCChannel){
		$this->idOPCChannel=$idOPCChannel;
		$this->statusCommunicationOPCChanel=$statusCommunicationOPCChanel;
		$this->activeOPCChannel=$activeOPCChannel;
	}

	public function getIdOPCChannel(){
		return $this->idOPCChannel;
	}
	public function getStatusCommunicationOPCChannel(){
		return $this->statusCommunicationOPCChanel;
	}
	public function getActiveOPCChannel(){
		return $this->activeOPCChannel;
	}
}
?>