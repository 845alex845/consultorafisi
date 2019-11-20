<?php
class Pregunta{

    public function obtenerPreguntas($cod_tema){
        $sql="SELECT * from preguntas where COD_TEMA=$cod_tema";
        $conn = oci_connect('consultora', 'consultora');
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);
        $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        return $res;
    }
}
?>