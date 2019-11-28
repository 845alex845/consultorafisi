<?php
class Examen{
  /*  $cod_examen
    $tipo_examen
    $fecha_examen
    $hora_inicio
    $hora_fin
    $cod_docente
    $cod_curso*/
    public function agregarExamen($codexamen,$tipo,$fecha,$hinicio,$duracion,$coddoc,$codcurso){
       
        //hora fin cambiarlo por duracion
        //$sql="INSERT INTO EXAMEN VALUES ($codexamen,$tipo,"."to_date($fecha, 'dd/mm/yyyy' ),"."to_date($hinicio, 'hh:mi a.m.'),$duracion,$coddoc,$codcurso);";
        $sql="INSERT INTO EXAMEN VALUES ($codexamen,'$tipo',"."to_date('$fecha', 'dd/mm/yyyy' )".",to_date('$hinicio', 'hh:mi a.m.')".",$duracion,$coddoc,$codcurso)";

        $conn=oci_connect("consultora","consultora");
        $prepare=oci_parse($conn,$sql);
        oci_execute($prepare);
        return true;
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
      $sql="SELECT cod_examen ,tipo_examen,fecha_examen,cod_curso from  examen where cod_docente=$coddoc";
      $conn = oci_connect('consultora', 'consultora');
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);
      $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
      return $res;
    }
}
?>