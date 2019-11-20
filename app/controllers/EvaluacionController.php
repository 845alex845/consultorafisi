<?php 
include_once('../app/model/Docente.php');
include_once("../app/service/DocenteService.php");

Class EvaluacionController extends Controller{
	public function __construct(){
	//	$this->examenModelo=$this->modelo('Examen');
	}
	public function index(){
		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		$nro=$_POST['nropreguntas'];
		$datos2=$_POST['hobbies'];
		$datos =[
			'nro' => $nro,
		];

	$this->vista2('paginas/selectquestion',$datos,$datos2);
	}
	public function method(){
		SESSION::init();
		$nro=$_POST['nropreguntas'];
		$datos2=$_POST['hobbies'];
		$datos =[
			'nro' => $nro,
		];

	$this->vista2('paginas/selectquestion',$datos,$datos2);
	}
	public function gaa(){
		SESSION::init();
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];

	$this->vista('paginas/selectquestion');
	}
    public function crear(){
        SESSION::init();
        
        $tipo=$_POST['tipoexamen'];
        $fecha=$_POST['fechainicio'];
        $hora=$_POST['horainicio'];
        $duracion=$_POST['duracion'];

			$datos=[
                'tipo' => $tipo,
                'fecha'=>$fecha,
                'hora'=>$hora,
                'duracion'=>$duracion,
				
			];
			/*$datos2=$temas;*/
			
			$this->vista('paginas/gaa2',$datos);
	}


 }