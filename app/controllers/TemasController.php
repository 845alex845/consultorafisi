<?php 

Class TemasController extends Controller{
	public function __construct(){
		//echo 'controlador paginas se ha cargado';
	
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];
		$this->vista('paginas/temas',$datos);//paginas es la carpeta de view
	}
	public function login(){

	}

 }