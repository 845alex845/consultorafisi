<?php 
include_once('../app/model/Docente.php');

Class CursoController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	$this->cursoModelo=$this->modelo('Curso');

	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		//aqui jala los datos de los cursos :v
		SESSION::init();
		$curso=$this->cursoModelo->obtenerCursos($_SESSION['usuario']);

		$datos=$curso;
	
		$this->vista('paginas/cursos',$datos);
	}

 }