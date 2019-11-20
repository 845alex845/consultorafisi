<?php 
include_once('../app/model/Examen.php');

Class ExamenController extends Controller{
	public function __construct(){
		$this->examenModelo=$this->modelo('Examen');
		$this->temaModelo=$this->modelo('Temas');
	}
	public function index(){

		//todo controlador debe cargar un metodo index
		//obtener usuario
		SESSION::init();
		$datos =[
			'titulo' => 'Bienvenidos a mi webMVC'
		];

//	$this->vista('paginas/examen');
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
					'cod' =>55551,
					'tipo' => $tipo,
					'fecha'=>$fecha,
					'hora'=>$hora,
					'duracion'=>$duracion,
					'estado'=>1,
				];
			if($this->examenModelo->agregarExamen($datos['cod'],$datos['tipo'],$datos['fecha'],$datos['hora'],$datos['duracion'],$curso,$_SESSION['usuario'])){
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

 }