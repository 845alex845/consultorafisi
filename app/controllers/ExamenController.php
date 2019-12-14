<?php 
include_once('../app/model/Examen.php');

Class ExamenController extends Controller{
	public function __construct(){
		$this->preguntaModelo=$this->modelo('Pregunta');
		$this->examenModelo=$this->modelo('Examen');
		$this->temaModelo=$this->modelo('Temas');
		$this->alternativaModelo=$this->modelo('Alternativa');
	}
	public function index(){

		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		$datos=[
			'a'=>1,
		];
		if($_SESSION['usuario']>12000000 && $_SESSION['usuario']<99999999){
			
			$datos2=$this->examenModelo->obtenerExamenes($_SESSION['usuario']);
			$this->vista2('paginas/evaluaciones2',$datos,$datos2);

		}else if($_SESSION['usuario']<12000000){
			//docentes
			$datos2=$this->examenModelo->obtenerExamenes($_SESSION['usuario']);
			$this->vista2('paginas/evaluaciones',$datos,$datos2);

		}
		
//	$this->vista('paginas/examen');
	}
	public function evaluar($codexa){
		SESSION::init();
		$datos=[
			'a'=>14,
			'b'=>1,
			'e'=>10043,
			'p'=>'practica',
			'f'=>'13/12/2019',
			'c'=>'BASE DE DATOS 2'
		];
		$datos2=$this->examenModelo->obtenerExamenes($_SESSION['usuario']);
			
		//$datos2=$_POST['alternativas'];
		$this->vista2('paginas/evaluaciones2',$datos,$datos2);
	}
	public function method($idcurso){
		//esta funcion se invoca despues de clickear CREAR EXAMEN EN LOS TEMAS<s
		SESSION::init();
			$datos=[
				'id' => $idcurso,
				
			];	
			$this->vista('paginas/iniciarexamen',$datos);
	}

	public function selectTemas(){
		$datos=[
			'a'=>1,
		];
		$this->vista('paginas/selecttemas',$datos);

	}

	public function crear($idcurso){
		SESSION::init();
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$tipo=$_POST['tipoexamen'];
			$fecha=$_POST['fechainicio'];
			$hora=$_POST['horainicio'];
			$duracion=$_POST['duracion'];
			$curso=$idcurso;
			$temas=$this->temaModelo->obtenerTemas($curso);
			$datos2=$temas;
				$datos=[
					'tipo' => $tipo,
					'fecha'=>$fecha,
					'hora'=>$hora,
					'duracion'=>$duracion,
					'estado'=>1,
					'idcurso'=>$idcurso,
					'usuadoc'=>$_SESSION['usuario'],
				];
			if($this->examenModelo->agregarExamen($datos['tipo'],$datos['fecha'],$datos['hora'],$datos['duracion'],$_SESSION['usuario'],$curso)){
				$this->vista2('paginas/selecttemas',$datos,$datos2);
			}else{
				//cuando se presione el boton se debe asegurar q esté lleno
			}
			
		}else{
			$datos=[
				'cod' =>'',
				'tipo' => '',
				'fecha'=>'',
				'hora'=>'',
				'duracion'=>'',
				'estado'=>0,
			];
		}

	}
	public function cargarExamen($codexamen){
		SESSION::init();
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$datos=[
				'codexa'=>$codexamen,
			];
			$datos2=$this->examenModelo->obtenerExamenes($_SESSION['usuario']);
			$this->vista2('paginas/evaluaciones',$datos,$datos2);
		}
	}
	public function cargarExamen2(){
		SESSION::init();
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$datos=[
				'codexa'=>123456,
			];
			$datos2=$this->examenModelo->obtenerExamenes($_SESSION['usuario']);
			$this->vista2('paginas/evaluaciones2',$datos,$datos2);
		}
	}
	public function cargarformato($codexa){
		SESSION::init();
		$datoexamen=$this->examenModelo->obtenerExamen2($codexa);
		//tipo de examen
		$datos=$this->examenModelo->obtenerFormato($codexa);
		$datos2=[
			'codexa'=>$codexa,
			'tipoexamen'=>$datoexamen['TIPO_EXAMEN'],
		];
		$this->vista2('paginas/formatoexamen2',$datos,$datos2);
	}

 }