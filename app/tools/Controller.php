<?php 
require_once 'Session.php';
//este será el controlado principal
//cargará los modelos y las vistas 
class Controller{
//cargar modelo
	public function modelo($modelo){
		//carga
		require_once '../app/model/' .$modelo . '.php';
		//instanciamos el modelo;
		return new $modelo();
	}
//cargar vista
	public function vista($vista, $datos =[]){

		//Session::init(); //iniciamos una sesion- contiene al session_star()
		//chequeamos si el archivo vista existe
	/*	if(!(Session::getStatus()==1)||empty(Session::get('docente'))){*/
			if(file_exists('../app/view/' .$vista . '.php')){
				require_once '../app/view/' .$vista . '.php';
			}
			else{
				//si el archivo de la vista no existe
				die('la vista no existe');
			}/*
		}else{
			
			die('NO PUEDE INGRESAR SIN HABERTE LOGUEADO');
		}*/
		

	}
	public function vista2($vista, $datos =[],$datos2=[]){

		//Session::init(); //iniciamos una sesion- contiene al session_star()
		//chequeamos si el archivo vista existe
	/*	if(!(Session::getStatus()==1)||empty(Session::get('docente'))){*/
			if(file_exists('../app/view/' .$vista . '.php')){
				require_once '../app/view/' .$vista . '.php';
			}
			else{
				//si el archivo de la vista no existe
				die('la vista no existe');
			}/*
		}else{
			
			die('NO PUEDE INGRESAR SIN HABERTE LOGUEADO');
		}*/
		

	}
}

 ?>