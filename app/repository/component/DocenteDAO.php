<?php
include_once("../app/repository/AccesoBD.php");
include_once("../app/model/Docente.php");

class DocenteDAO{
    private $collection;
    private $db;

    public function __construct(){
        $this->db= AccesoBD::getConnection();
        $this->collection=$db->Docente;//llama Docente
    }
    public function readAll(){
        $sql="SELECT * FROM DOCENTE";
        $prepare=oci_parse($db,$sql);
        $resultados=oci_execute($prepare);
        return $resultados;
    }
    public function read($codigo){
            $sql="SELECT * FROM docente WHERE Cod_docente =:codigo";
            $prepare=oci_parse($db,$sql);
            $fila=oci_execute($prepare);
            //$fila =oci_fetch_asocc($prepare);//almacena toda los registros
            //retorna una sola fila
            return $fila;
    }
    public function __destruct(){}
}