<?php 
include_once('GenericService.php');
include_once("../app/repository/component/DocenteDAO.php");

class DocenteService implements GenericService{
    private $docenteDao;

    public function __construct(){
        $this->docenteDao=new DocenteDAO;
    }
    public function read($id){
        return $this->docenteDao->read($id);
    }
    public function readAll(){
        return $docenteDao->readAll(); 
    }
    public function create($objeto){

    }
    public function update($objeto){}

    public function delete($id){}
}