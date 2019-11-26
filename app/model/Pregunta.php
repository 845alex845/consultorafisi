<?php
class Pregunta{

    public function obtenerPreguntas($idcurso){
        //para hacer mejor el query y tener los temas seleccionados , debemos hacer 12 if o case y agregar un parametro
        $sql="SELECT p.id_pregunta , p.cod_tema,p.dificultad, p.enunciado,t.nom_tema,t.num_tema from preguntas p join tema t on p.cod_tema=t.cod_tema where t.COD_CURSO='$idcurso' ";
        $conn = oci_connect('consultora', 'consultora');
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);
        $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        return $res;
    }

    /*public function obtenerPregunta(){
        $sql="SELECT p.id_pregunta , p.cod_tema,p.dificultad, p.enunciado,t.nom_tema,t.num_tema from preguntas p join tema t on p.cod_tema=t.cod_tema where t.COD_CURSO='$idcurso' ";
        $conn = oci_connect('consultora', 'consultora');
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);
        $nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        return $res;  
    }*/
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