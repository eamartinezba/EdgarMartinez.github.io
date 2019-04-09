<?php
class ReportOperator{
	private $idReportOperator;
	private $idEventReportOperator;
	private $idWorkShift;
	private $idProductionUnitReportOperator;
	private $durationReportOperator;
	private $idPersonnelReport;
	
	public function __construct($idReportOperator,$idEventReportOperator,$idWorkShift,$idProductionUnitReportOperator, $durationReportOperator, $idPersonnelReport){

		$this->idReportOperator=$idReportOperator;	
		$this->idEventReportOperator=$idEventReportOperator;	
		$this->idWorkShift=$idWorkShift;
		$this->idProductionUnitReportOperator=$idProductionUnitReportOperator;
		$this->durationReportOperator=$durationReportOperator;		
		$this->idPersonnelReport=$idPersonnelReport;
	}

	public function getIdReportOperator(){
		return $this->idReportOperator;
	}
	public function getIdEventReportOperator(){
		return $this->idEventReportOperator;
	}
	public function getIdWorkShiftReportOperator(){
		return $this->idWorkShift;
	}
	public function getIdProductionUnitReportOperator(){
		return $this->idProductionUnitReportOperator;
	}
	public function getDurationReportOperator(){
		return $this->durationReportOperator;
	}
	
	public function getIdPersonnelReport(){
		return $this->idPersonnelReport;
	}
	
}
?>