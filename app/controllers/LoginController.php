<?php
include_once("../app/model/Docente.php");
include_once("../app/service/DocenteService.php");
   
class LoginController extends Controller{

    public function __construct(){

    }

        public function index(){
            $this->vista('paginas/login3');//vista login
        }
        
        public function comprobar(){
            $user=$_POST['username'];
            $pass=$_POST['password']; 
            $conn=oci_connect("consultora","consultora");
           
            $sql="SELECT * FROM docente  WHERE cod_docente='$user' and clave='$pass'";
            $prepare=oci_parse($conn,$sql);
            oci_execute($prepare);
            //".$user." AND contraseña=".$pass."
            //$filas=oci_fetch_all($prepare);
            $filas=oci_fetch_assoc($prepare);
            //oci_free_statement($prepare);
            //echo "el numero de filas es: ".$filas;
            return $filas;
        }
        public function login(){
            //por el momento el docente es el q se logea , aun falta el alumno
           // $docente_service=new DocenteService;
           // $docente=$docente_service->read($pass);//identificamos
          // echo "esto es la funcion login"."<br>";
            //if(($this->comprobar())==true){
                $user=$_POST['username'];
                $pass=$_POST['password']; 
                if($user=21600 && $pass=123456){
                session_start();
                $_SESSION['username']=$user;
                
                header('location: ../HomeController');
                
             
            }else{
                die('Usuario no registrado');
            }
        }
}