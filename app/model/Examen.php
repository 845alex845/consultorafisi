<?php
class Examen{
  /*  $cod_examen
    $tipo_examen
    $fecha_examen
    $hora_inicio
    $hora_fin
    $cod_docente
    $cod_curso*/
    public function agregarExamen($tipo,$fecha,$hinicio,$duracion,$coddoc,$codcurso){
       
        //hora fin cambiarlo por duracion
        //$sql="INSERT INTO EXAMEN VALUES ($codexamen,$tipo,"."to_date($fecha, 'dd/mm/yyyy' ),"."to_date($hinicio, 'hh:mi a.m.'),$duracion,$coddoc,$codcurso);";
        $sql="INSERT INTO EXAMEN VALUES (secuencia_examen.nextval,'$tipo',"."to_date('$fecha', 'dd/mm/yyyy' )".",to_date('$hinicio', 'hh:mi a.m.')".",$duracion,$coddoc,$codcurso,'inactivo')";

        $conn=oci_connect("consultora","consultora");
        $prepare=oci_parse($conn,$sql);
        oci_execute($prepare);
        return true;
    }
    public function obtenerCodigo($coddoc){
      $sql="SELECT max(cod_examen) as cod_examen from examen where cod_docente=$coddoc";
      $conn=oci_connect("consultora","consultora");
      $prepare=oci_parse($conn,$sql);
      oci_execute($prepare);
      $scar = oci_fetch_assoc($prepare);
      return $scar; 
    }
    public function obtenerExamen($codexamen,$coddoc){
      $sql="SELECT cod_examen, tipo_examen,fecha_examen,hora_inicio,duracion,cod_docente,cod_curso from examen where cod_examen=$codexamen and cod_docente=$coddoc";
      $conn=oci_connect("consultora","consultora");
      $prepare=oci_parse($conn,$sql);
      oci_execute($prepare);
      $scar = oci_fetch_assoc($prepare);
      return $scar; 
    }
    public function crearExamen($codexamen,$idpregunta,$puntos){
      $sql="INSERT INTO EXAMEN_PREGUNTAS VALUES (".$codexamen.",".$idpregunta.","."$puntos)";
      $conn=oci_connect("consultora","consultora");
      $prepare=oci_parse($conn,$sql);
      oci_execute($prepare);
      return true;
    }
    public function obtenerExamenes($coddoc){
      $sql="SELECT cod_examen ,tipo_examen,fecha_examen,cod_curso,estado from  examen where cod_docente=$coddoc";
      $sql2="select cod_examen, tipo_examen, fecha_examen, c.nom_curso,e.estado
      from examen e inner join curso c 
      on e.cod_curso = c.cod_curso where cod_docente=$coddoc";
      $conn = oci_connect('consultora', 'consultora');
      $stid = oci_parse($conn, $sql2);
      oci_execute($stid);
      $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
      return $res;
    }
    public function obtenerExamenes2($cod){
      $sql="SELECT cod_examen ,tipo_examen,fecha_examen,cod_curso,estado from  examen where cod_docente=$coddoc";
      $sql2="select cod_examen, tipo_examen, fecha_examen, c.nom_curso,e.estado
      from examen e inner join curso c 
      on e.cod_curso = c.cod_curso where cod_docente=$coddoc";
      $conn = oci_connect('consultora', 'consultora');
      $stid = oci_parse($conn, $sql2);
      oci_execute($stid);
      $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
      return $res;
    }
    public function obtenerExamen2($codexamen){
      $sql="SELECT cod_examen, tipo_examen,fecha_examen,hora_inicio,duracion,cod_docente,cod_curso from examen where cod_examen=$codexamen ";
      $conn=oci_connect("consultora","consultora");
      $prepare=oci_parse($conn,$sql);
      oci_execute($prepare);
      $scar = oci_fetch_assoc($prepare);
      return $scar; 
    }
    public function obtenerFormato($codexamen){
      $sql="select * from examen_preguntas where cod_examen=$codexamen";
      $conn = oci_connect('consultora', 'consultora');
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);
      $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
      return $res;
    }
    public function comprobarExamen($codcurso){
      $sql="select ep.cod_examen,ep.id_pregunta,ep.puntos,e.cod_curso,e.tipo_examen,e.fecha_examen,e.hora_inicio,e.duracion 
      from examen_preguntas ep join examen e on e.cod_examen=ep.cod_examen 
      where e.COD_CURSO=$codcurso and e.estado='inactivo'";
      $conn = oci_connect('consultora', 'consultora');
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);
      $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
      return $res;
    }
}
?>