<?php
include_once("../app/model/Docente.php");
include_once("../app/service/DocenteService.php");
   
class LoginController extends Controller{

    public function __construct(){
    }
        public function index(){
            $this->vista('paginas/login3');//vista login
        }
        //crear otro metodo para alumno
        public function iniciarUser( ){
            //solo el docente se está logeando
            $user=$_POST['username'];
            $pass=$_POST['password']; 
            $conn=oci_connect("consultora","consultora");
           
            $sql="SELECT * FROM usuario WHERE codigo=$user and clave='$pass'";
            $prepare=oci_parse($conn,$sql);
            oci_execute($prepare);
            $filas=oci_fetch_assoc($prepare);
            return $filas;
        }
        public function login(){
            //por el momento el docente es el q se logea , aun falta el alumno
            $user=$_POST['username'];
            $pass=$_POST['password']; 
           if(($this->iniciarUser())==true){
           session_start();
           $_SESSION["usuario"]=$user;
            header('location: ../HomeController');    
            }else{
                echo "user= ".$user."<br>";
                echo "pass= ".$pass."<br>";
                header('location: ../LoginController'); 
                die('Usuario no registrado');
                
            }
            /*$codigo=$_POST['username'];
            $pass=$_POST['password']; 
            $docente_service=new DocenteService;
            $docente=$docente_service->read($codigo);
            if(isset($docente)){
                Session::init();
                Session::add('docente',$docente);
                header('location: ../HomeController');
            }else{
                die('Usuario no registrado');
            }*/
        }
}