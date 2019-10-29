<?php
require_once 'Persona.php';
class Alumno extends Persona{
    private $cod_alumno;
    private $semestre;
    

    public function __construct(){
        /*parent::__construct();*/
    }

	public function getCod_alumno(){
		return $this->cod_alumno;
	}

	public function setCod_alumno($cod_alumno){
		$this->cod_alumno = $cod_alumno;
	}

	public function getSemestre(){
		return $this->semestre;
	}

	public function setSemestre($semestre){
		$this->semestre = $semestre;
	}        
    public function __destruct(){}  
}