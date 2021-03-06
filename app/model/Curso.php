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
    public function obtenerCurss($cod){
        $sql="SELECT c.cod_curso as COD_CURSO, c.nom_curso, c.cod_esc,c.num_ciclo,c.num_creditaje,c.plan_estudio,c.horas , d.codigo ,d.especialidad 
        from curso c join docente_curso dc on c.cod_curso=dc.cod_curso join docente d on d.codigo=dc.cod_docente where d.codigo=$cod";
        $sql1="SELECT * FROM CURSO";
        $conn=oci_connect("consultora","consultora");
        $prepare=oci_parse($conn,$sql1);
        oci_execute($prepare);
        $scar = oci_fetch_object($prepare);
        return $scar; 
    }
    public function obtenerCursosd($coduser){
        $sql="SELECT c.cod_curso as COD_CURSO, c.nom_curso, c.cod_esc,c.num_ciclo,c.num_creditaje,c.plan_estudio,c.horas , d.codigo ,d.especialidad 
        from curso c join docente_curso dc on c.cod_curso=dc.cod_curso join docente d on d.codigo=dc.cod_docente where d.codigo=$coduser";
        $conn = oci_connect('consultora', 'consultora');
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);
        $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        return $res;
    }
    public function obtenerCursosa($coduser){
        $sql="SELECT c.cod_curso as COD_CURSO, c.nom_curso, c.cod_esc,c.num_ciclo,c.num_creditaje,c.plan_estudio,c.horas , a.codigo , a.ciclo_actual, a.situacion_academica
        from curso c join alumno_cursos ac on c.cod_curso=ac.cod_curso join alumno a on a.codigo=ac.cod_alumno where a.codigo=$coduser";
        $conn = oci_connect('consultora', 'consultora');
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);
        $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        return $res;
    }
}