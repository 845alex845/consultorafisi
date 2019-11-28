<?php 
Class EvaluacionController extends Controller{
	public function __construct(){
		$this->preguntaModelo=$this->modelo('Pregunta');
		$this->examenModelo=$this->modelo('Examen');
		$this->alternativaModelo=$this->modelo('Alternativa');
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
	public function method($param){
		SESSION::init();
		$codigocurso=substr($param,-8);
		$codexamen=substr($param,0,5);

		$nro=$_POST['nropreguntas'];
		$datos2=$_POST['hobbies'];//temas que se han seleccionado, está como hobbies por mientras

		$preguntas=$this->preguntaModelo->obtenerPreguntas($codigocurso);//cod curso
		$datos3=$preguntas;
		//$datoexamen=$this->examenModelo->obtenerExamen($codexamen,$_SESSION['usuario']);
		
		$datos =[
			'nropreg' => $nro,
			'idcurso'=>$codigocurso,
			'codexa'=>$codexamen,
			//'tipoexamen'=>$datoexamen['TIPO_EXAMEN'],
			
		];
		
		
	$this->vista3('paginas/selectquestion',$datos,$datos2,$datos3);
	}
    public function crearExamen($codexam){//cod curso
		SESSION::init();
			$datoexamen=$this->examenModelo->obtenerExamen($codexam,$_SESSION['usuario']);
			$datos=$_POST['preguntas'];//codigos de las preguntas seleccionadas
			$datos2=[
				'codexa'=>$codexam,
				'tipoexamen'=>$datoexamen['TIPO_EXAMEN'],
			];

			//$puntos=bcdiv(20,count($datos),2);
			$puntos=2;
			$ind=0;
			while($ind<count($datos)){
				$this->examenModelo->crearExamen($datos2['codexa'],$datos[$ind],$puntos);
				$ind++;
			}
			$this->vista2('paginas/formatoexamen',$datos,$datos2);

	}
	public function programarExamen($codexam){
		//$datos=$codexam;
		$misalt=$_POST['alternativas'];
		$datos2=$misalt;
		$datos=[
			'codexa'=> $codexam,
		];

		$this->vista2('paginas/gaa',$datos,$datos2);
	}

 }