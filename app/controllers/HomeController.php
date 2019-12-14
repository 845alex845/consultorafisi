<?php 
include_once('../app/model/Docente.php');
include_once('../app/model/Alumno.php');
include_once('../app/model/Administrador.php');
Class HomeController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	$this->docenteModelo= $this->modelo('Docente');
	$this->alumnoModelo=$this->modelo('Alumno');
	$this->administradorModelo=$this->modelo('Administrador');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		//session_start();
		//$datos=array();
		//precisar los rangos :v
		if($_SESSION['usuario']>12000000 && $_SESSION['usuario']<99999999){
			//alumnos
			$alumno=$this->alumnoModelo->obtenerAlumno($_SESSION['usuario']);
			$datos=$alumno;
		}else if($_SESSION['usuario']<12000000){
			//docentes
			$docente=$this->docenteModelo->obtenerDocente($_SESSION['usuario']);
			$datos=$docente;
		}else{
			//administrador
			$administrador=$this->administradorModelo->obtenerAdmin($_SESSION['usuario']);
			$datos=$administrador;
		}
		


		$this->vista('paginas/home',$datos);
	}
	public function login(){

	}

 }