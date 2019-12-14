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
		if($_SESSION['usuario']>12000000 && $_SESSION['usuario']<99999999){
			//alumnos
			$curso=$this->cursoModelo->obtenerCursosa($_SESSION['usuario']);
		}else{
			$curso=$this->cursoModelo->obtenerCursosd($_SESSION['usuario']);
		}
		

		$datos=$curso;
	
		$this->vista('paginas/cursos',$datos);
	}

 }