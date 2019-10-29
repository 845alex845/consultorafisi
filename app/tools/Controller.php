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
		
			//|| empty(Session::get('username'))
			//si no hay
		//chequeamos si el archivo vista existe
			if(file_exists('../app/view/' .$vista . '.php')){
				require_once '../app/view/' .$vista . '.php';//abro la vista login
			}
			else{
				//si el archivo de la vista no existe
				die('la vista no existe');
			}
		

	}
}

 ?>