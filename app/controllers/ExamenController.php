<?php 
include_once('../app/model/Docente.php');
include_once("../app/service/DocenteService.php");

Class ExamenController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];
		$this->vista('paginas/evaluaciones',$datos);
	}
	public function login(){

	}

 }