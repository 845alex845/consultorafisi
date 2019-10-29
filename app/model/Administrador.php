<?php
class Administrador{
    private $db;
    public function __construct(){
        $this->db =new Base;
    }
    public function obtenerAdmin(){
        $this->db->query('SELECT * FROM administrador');

        $resultados =$this->db->registros();
        return $resultados;
    }
    public function agregarAdmin($datos){
        $sql2="INSERT INTO administador (nombre, email, telefono)  VALUES (:nombre, :email, :telefono)";
        $this->db->query($sql2);
        //vinculando los valores
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':email', $datos['email']);
        $this->db->bind(':telefono', $datos['telefono']);

        //Ejecutar
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerAdminId($id){
       $this->db->query('SELECT * FROM administrador WHERE id_admin =:id');
       $this->db->bind(':id',$id);

       $fila =$this->db->registro();
       return $fila;
    }
    public function actualizarAdmin($datos){
        $sql3="UPDATE administrador SET nombre = :nombre, email = :email, telefono = :telefono WHERE id_admin = :id";
        $this->db->query($sql3);
        //vincular valores
        $this->db->bind(':id',$datos['id_admin']);
        $this->db->bind(':nombre',$datos['nombre']);
        $this->db->bind(':email',$datos['email']);
        $this->db->bind(':telefono',$datos['telefono']);
        //ejecutar
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function borrarAdmin($datos){
        $sql4="DELETE FROM administrador WHERE id_admin = :id ";
        $this->db->query($sql4);
        $this->db->bind(':id',$datos['id_admin']);
        if($this->db->execute()){
           return true;
       }else{
           return false;
       }
    }
}