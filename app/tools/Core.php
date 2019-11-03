<?php 
/*mapear la url ingresada en el navegador
1. controlador
2. metodo
3. parametro
Ejm: /articulos/actualizar/4
*/ 
Class Core{
	//son alternativas por defecto en caso no se cargue ninguna
protected  $controladorActual ='LoginController';
protected $metodoActual= 'index';
protected $parametros =[];

public function __construct(){
	$url = $this->getUrl();
	//buscar en controladores si el controlador existe
	if(file_exists('../app/controllers/' . ucwords($url[0]) .'.php')){
//si existe se setea como controlador por defecto
		$this->controladorActual =ucwords($url[0]);
		//unset indice
		unset($url[0]);
	}
	require_once '../app/controllers/' . $this->controladorActual . '.php';
	$this->controladorActual = new $this->controladorActual;
	//verificamos el metodo

	if(isset($url[1])){
	if(method_exists($this->controladorActual, $url[1])){
		//si se cargó
		$this->metodoActual = $url[1];
		unset($url[1]);
	}
}
//para probar q metodo entro
//echo $this->metodoActual;

//obtenemos los posibles parametros
$this->parametros=$url ? array_values($url) :[];

//llamar call back con parametros array
call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
}
public function getUrl(){
	//echo $_GET['url'];
	if(isset($_GET['url'])){
		//para limpiar todo espacio que tenga mi url al final
		$url = rtrim($_GET['url'],'/');
		$url = filter_var($url,FILTER_SANITIZE_URL);
		$url = explode('/',$url);
		return $url;
	}
}
}
?>