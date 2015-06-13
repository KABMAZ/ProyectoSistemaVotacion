<?php


class Candidato {
    private $id;
    private $dui;
    private $apellido;
    private $nombre;
    private $departamento;
    private $municipio;
    private $candidatura;
    
    public function getId() {
        return $this->id;
    }
 
     public function getDui() {
        return $this->dui;
    }

        public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

     public function getCandidatura() {
        return $this->candidatura;
    }
  
    public function setId($id) {
        $this->id = $id;
    }

    public function setDui($dui) {
        $this->dui = $dui;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    public function setCandidatura($candidatura) {
        $this->candidatura = $candidatura;
    } 

}
