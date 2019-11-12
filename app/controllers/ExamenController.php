<?php 
include_once('../app/model/Docente.php');
include_once("../app/service/DocenteService.php");

Class ExamenController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	//	$this->vista('paginas/examen');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];

	$this->vista('paginas/examen');
	}


 }