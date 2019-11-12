<?php 
include_once('../app/model/Docente.php');


Class HomeController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	$this->docenteModelo= $this->modelo('Docente');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		//session_start();
		//$datos=array();
		$docente=$this->docenteModelo->obtenerDocentes($_SESSION['usuario']);
		//$doc=Docente::obtenerDocentes($_SESSION['usuario']);
		$datos=$docente;
		//$datos=$docente;
		$this->vista('paginas/home',$datos);
	}
	public function login(){

	}

 }