<?php
class Temas{
public function obtenerTemas($idcurso){
    $sql="SELECT cod_tema ,num_tema, nom_tema FROM tema WHERE cod_curso=$idcurso ORDER BY num_tema";
    $conn = oci_connect('consultora', 'consultora');
    $stid = oci_parse($conn, $sql);
    oci_execute($stid);
    $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
    return $res;
}
}
?>