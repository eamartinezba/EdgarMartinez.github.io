<?php
class ErrorMessage{
	private $idErrorMessage;
	private $categoryErrorMessage;
	private $titleErrorMessage;
	private $descErrorMessage;
	private $typeErrorMessage;

	public function __construct($idErrorMessage,$categoryErrorMessage,$titleErrorMessage,$descErrorMessage,$typeErrorMessage){
		$this->idErrorMessage=$idErrorMessage;
		$this->categoryErrorMessage=$categoryErrorMessage;
		$this->titleErrorMessage=$titleErrorMessage;
		$this->descErrorMessage=$descErrorMessage;
		$this->typeErrorMessage=$typeErrorMessage;
	}

	public function getIdErrorMessage(){
		return $this->idErrorMessage;
	}
	public function getCategoryErrorMessage(){
		return $this->categoryErrorMessage;
	}
	public function getTitleErrorMessage(){
		return $this->titleErrorMessage;
	}
	public function getDescErrorMessage(){
		return $this->descErrorMessage;
	}
	public function getTypeErrorMessage(){
		return $this->typeErrorMessage;
	}
	public function setTitleErrorMessage($titleExtra){
		$this->titleErrorMessage.=" ".$titleExtra;
	}
	public function replaceDescrErrorMessage($extra){
		$this->descErrorMessage=str_replace("{}",$extra, $this->descErrorMessage);
	}

	public function __toString(){
		return $this->titleErrorMessage.','.$this->descErrorMessage.','.$this->typeErrorMessage;
	}
}
?>