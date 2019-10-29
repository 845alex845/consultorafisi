<?php
require_once 'Persona.php';
class Docente{
    private $cod_docente;
    private $nombres;
	private $apellidos;
	private $edad;
	private $contraseña;

    public function __construct(){
        /*parent::__construct();*/
    }

	public function getCod_docente(){
		return $this->cod_docente;
	}

	public function setCod_docente($cod_docente){
		$this->cod_docente =$cod_docente;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getApellidos(){
        return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
	public function getEdad(){
        return $this->edad;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}
	public function getContraseña(){
        return $this->contraseña;
	}

	public function setContraseña($contraseña){
		$this->contraseña = $contraseña;
    }
        
    public function __destruct(){}
}