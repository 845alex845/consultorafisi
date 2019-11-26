<?php
class Alternativa{
  /*  item
  id_pregunta
  enum_alt
  respuesta*/
public function obtenerAlternativas($idcurso){
    $sql="SELECT cod_tema ,num_tema, nom_tema FROM tema WHERE cod_curso=$idcurso ORDER BY num_tema";
    $conn = oci_connect('consultora', 'consultora');
    $stid = oci_parse($conn, $sql);
    oci_execute($stid);
    $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
    return $res;
}
public function obtenerAlternativas2($codpreg){
    $sql="SELECT item ,id_pregunta, enum_alt,respuesta FROM alternativa WHERE id_pregunta=$codpreg ";
    $conn = oci_connect('consultora', 'consultora');
    $stid = oci_parse($conn, $sql);
    oci_execute($stid);
    $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
    return $res;
}
public function obtenerAlt($codpreg){
  $sql="select a.item , a.id_pregunta , a.enun_alt ,a.respuesta, p.enunciado from alternativas a join preguntas p on p.id_pregunta=a.id_pregunta where p.id_pregunta=$codpreg";
  $conn = oci_connect('consultora', 'consultora');
  $stid = oci_parse($conn, $sql);
  oci_execute($stid);
  $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
  return $res;
}
public function obtenerPregunta($codpreg){
  $sql="select * from preguntas where id_pregunta=$codpreg";
  $conn=oci_connect("consultora","consultora");
  $prepare=oci_parse($conn,$sql);
  oci_execute($prepare);
  $scar = oci_fetch_assoc($prepare);
  return $scar;  
}
}
?>