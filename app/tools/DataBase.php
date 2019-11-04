<?php
class DataBase{
    private $usuario=DB_USUARIO;
    private $password =DB_PASSWORD;
    public function __construct(){

    }
    public function getConnection(){
        $connection = oci_connect('consultora','consultora');
        return $connection;
    }
    public function bind($parametro,$valor,$tipo =null){
        //castear :v
        if(is_null($tipo)){
            switch(true){
                case is_int($valor):
                $tipo =PDO::PARAM_INT;
                break;
                case is_bool($valor):
                $tipo =PDO::PARAM_BOOL;
                break;
                case is_null($valor):
                $tipo =PDO::PARAM_NULL;
                break;
                default:
                $tipo =PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($parametro,$valor,$tipo);
    }
}