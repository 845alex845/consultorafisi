<?php 
class Escuela{
    $cod_facultad;
    $nom_facultad;
    $nom_decano;

    public function obtenerEscuela($cod_facultad){
 
            $sql="SELECT * from facultad where cod_fac=$id";
            $conn=oci_connect("consultora","consultora");
            $prepare=oci_parse($conn,$sql);
            oci_execute($prepare);
            $scar = oci_fetch_assoc($prepare);
            return $scar; 

    }
}
?>