<?php
	class cargo{
	private $idcargo;
	private $tipocargo;
	private $yearelectoral;

	//Generacion de metodos set y get para variable Idcargo
	public function setIdcargo($idcargo){
		$this->idcargo= $idcargo;
	}

	public function getIdcargo(){
	return $this->idcargo;
	}

	//Generacion de metodos set y get para variable Tipocargo
	public function setTipocargo($tipocargo){
		$this->tipocargo= $tipocargo;
	}

	public function getTipocargo(){
	return $this->tipocargo;
	}

	//Generacion de metodos set y get para variable Yearelectoral
	public function setYearelectoral($yearelectoral){
		$this->yearelectoral= $yearelectoral;
	}

	public function getYearelectoral(){
	return $this->yearelectoral;
	}
}
?>
	