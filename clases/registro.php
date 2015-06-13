<?php
	class registrovotante{
	private $idvotante;
	private $dui;
	private $nombre;
	private $apellido;
	private $foto;
	private $genero;
	private $fechavenci;
	private $direccion;
	private $iddepa;
	private $idmuni;

	//Generacion de metodos set y get para variable idvotante
	public function setIdvotante($idvotante){
		$this->idvotante= $idvotante;
	}

	public function getIdvotante(){
	return $this->idvotante;
	}

	//Generacion de metodos set y get para variable dui
	public function setDui($dui){
		$this->dui= $dui;
	}

	public function getDui(){
	return $this->dui;
	}

	//Generacion de metodos set y get para variable nombre
	public function setNombre($nombre){
		$this->nombre= $nombre;
	}

	public function getNombre(){
	return $this->nombre;
	}

	//Generacion de metodos set y get para variable apellido
	public function setApellido($apellido){
		$this->apellido= $apellido;
	}

	public function getApellido(){
	return $this->apellido;
	}

	//Generacion de metodos set y get para variable foto
	public function setFoto($foto){
		$this->foto= $foto;
	}

	public function getFoto(){
	return $this->foto;
	}

	//Generacion de metodos set y get para variable genero
	public function setGenero($genero){
		$this->genero= $genero;
	}

	public function getGenero(){
	return $this->genero;
	}

	//Generacion de metodos set y get para variable fechanaci
	public function setFechavenci($fechavenci){
		$this->fechanaci= $fechavenci;
	}

	public function getFechavenci(){
	return $this->fechanaci;
	}

	//Generacion de metodos set y get para variable direccion
	public function setDireccion($direccion){
		$this->direccion= $direccion;
	}

	public function getDireccion(){
	return $this->direccion;
	}

	//Generacion de metodos set y get para variable iddepa
	public function setIddepa($iddepa){
		$this->iddepa= $iddepa;
	}

	public function getIddepa(){
	return $this->iddepa;
	}

	//Generacion de metodos set y get para variable idmuni
	public function setIdmuni($idmuni){
		$this->idmuni= $idmuni;
	}

	public function getIdmuni(){
	return $this->idmuni;
	}

}
?>