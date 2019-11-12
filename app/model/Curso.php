<?php
class Curso{
    private $cod_curso;
    private $nom_curso;
    private $cod_esc;
    
    public function obtenerCursos1($codcurso){
        $sql="SELECT * FROM curso where cod_curso=$codcurso";
        $conn=oci_connect("consultora","consultora");
        $prepare=oci_parse($conn,$sql);
        oci_execute($prepare);
        $scar = oci_fetch_object($prepare);
        return $scar; 
    }
    public function obtenerCursos($cod){
        $sql="SELECT c.cod_curso as COD_CURSO, c.nom_curso, c.cod_esc,c.num_ciclo,c.num_creditaje,c.plan_estudio,c.horas , d.codigo ,d.especialidad 
        from curso c join docente_curso dc on c.cod_curso=dc.cod_curso join docente d on d.codigo=dc.cod_docente where d.codigo=$cod";
        $sql1="SELECT * FROM CURSO";
        $conn=oci_connect("consultora","consultora");
        $prepare=oci_parse($conn,$sql1);
        oci_execute($prepare);
        $scar = oci_fetch_object($prepare);
        return $scar; 
    }
}