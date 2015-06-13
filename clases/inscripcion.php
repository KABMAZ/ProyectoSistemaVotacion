<?php
	class inscripartido{
	private $idinscripparti;
	private $nombrepartido;
	private $bandera;
	private $dui;
	private $representante;

	//Generacion de metodos set y get para variable idinscripparti
	public function setIdinscripparti($idinscripparti){
		$this->idinscripparti= $idinscripparti;
	}

	public function getIdinscripparti(){
	return $this->idinscripparti;
	}

	//Generacion de metodos set y get para variable nombrepartido
	public function setNombrepartido($nombrepartido){
		$this->nombrepartido= $nombrepartido;
	}

	public function getNombrepartido(){
	return $this->nombrepartido;
	}

	//Generacion de metodos set y get para variable bandera
	public function setBandera($bandera){
		$this->bandera= $bandera;
	}

	public function getBandera(){
	return $this->bandera;
	}

	//Generacion de metodos set y get para variable dui
	public function setDui($dui){
		$this->dui= $dui;
	}

	public function getDui(){
	return $this->dui;
	}

	//Generacion de metodos set y get para variable representante
	public function setRepresentante($representante){
		$this->representante= $representante;
	}

	public function getRepresentante(){
	return $this->representante;
	}

}
?>