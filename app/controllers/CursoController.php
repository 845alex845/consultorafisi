<?php 

Class CursoController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	//$this->cursoModelo=$this->modelo('Curso');
	$this->vista('paginas/cursos');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];
		
	}
	public function login(){

	}

 }