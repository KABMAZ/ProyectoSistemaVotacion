<?php


class Partido{
	private $id;
	private $Nombre;
	private $bandera;
	private $dui;
	private $representante;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->Nombre;
	}

	public function getBandera(){
		return $this->bandera;
	}

	public function getDui(){
		return $this->dui;
	}

	public function getRepresentante(){
		return $this->representante;
	}

	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}

	public function setBandera($bandera){
		$this->bandera = $bandera;
	}

	public function setDui($dui){
		$this->dui = $dui;
	}

	public function setRepresentante($representante){
		$this->representante = $representante;
	}

} 