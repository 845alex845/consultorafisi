<?php
include_once("../app/repository/AccesoBD.php");
include_once("../app/model/Docente.php");

class DocenteDAO{
    private $collection;
    private $db;

    public function __construct(){
       // $this->db= AccesoBD::getConnection();
        //$this->collection=$db->Docente;//llama Docente
    }
    public function readAll(){
        $sql="SELECT * FROM DOCENTE";
        $prepare=oci_parse($db,$sql);
        $resultados=oci_execute($prepare);
        return $resultados;
    }
    public function read($codigo){
        $db=oci_connect("consultora","consultora");
            $sql="SELECT COD_DOCENTE FROM docente WHERE Cod_docente =$codigo";
            $prepare=oci_parse($db,$sql);
            oci_execute($prepare);
            $fila=oci_fetch_asocc($prepare);
            return $fila;
          /* while( ($fila=oci_fetch_asocc($prepare))!=false){
               return $fila;
           }*/

    }
    public function __destruct(){}
}