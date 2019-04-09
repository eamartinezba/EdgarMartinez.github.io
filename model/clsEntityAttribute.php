<?php
class EntityAttribute{
	private $idEntityAttribute;
	private $descEntityAttribute;
	private $activeEntityAttribute;

	public function __construct($idEntityAttribute,$descEntityAttribute,$activeEntityAttribute){
		$this->idEntityAttribute=$idEntityAttribute;
		$this->descEntityAttribute=$descEntityAttribute;
		$this->activeEntityAttribute=$activeEntityAttribute;
	}

	public function getIdEntityAttribute(){
		return $this->idEntityAttribute;
	}
	public function getDescEntityAttribute(){
		return $this->descEntityAttribute;
	}
	public function getActiveEntityAttribute(){
		return $this->activeEntityAttribute;
	}
}
?>