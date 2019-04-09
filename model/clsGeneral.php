<?php
class General{
	
	private $id;
	private $title;
	private $image;
	
	
	public function __construct($id, $title, $image){
		$this->id=$id;
		$this->title=$title;
		$this->image=$image;		
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getImage(){
		return $this->title;		
	}
	
	public function __toString(){
		return $this->id.'-'.$this->title.'</br>';
	}
	
}
?>