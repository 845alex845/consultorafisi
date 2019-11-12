<?php 

Class TemasController extends Controller{
	public function __construct(){

		$this->cursoModelo=$this->modelo('Curso');
		//$this->cursoModelo=$this->modelo('Temas');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];
		$this->vista('paginas/temas',$datos);//paginas es la carpeta de view
	}
	public function method($id){
		SESSION::init();
		$cursos=$this->cursoModelo->obtenerCursos1($id);
			$datos=[
				'id' => $id,
				'nombre'=> $cursos->NOM_CURSO,
			];
			//require_once '../app/view/paginas/temas.php';
			$this->vista('paginas/temas',$datos);
		
	}

 }