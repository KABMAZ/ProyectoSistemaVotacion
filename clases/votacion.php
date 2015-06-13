<?php

class Votacion {
    private $id;
    private $sufragio;
    private $candidatura;
 
   
    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSufragio($sufragio) {
        $this->sufragio = $sufragio;
    }

    public function setCandidatura($candidatura) {
        $this->candidatura = $candidatura;
    }
     

   

   

    public function getSufragio() {
        return $this->sufragio;
    }

     public function getCandidatura() {
        return $this->candidatura;
    }
   
    
    
   

}