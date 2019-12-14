<?php
class Administrador{

    public function obtenerAdmin($id){
        //$sql="SELECT * from docente where cod_docente=$id";
            $sql="select u.codigo , u.nom_usuario, u.clave , u.nombre, u.ape_pat , u.ape_mat, u.tipo_doc, u.nro_doc , u.telefono , u.celular, u.email, u.genero , u.foto, u.fecha_nac
            ,u.direccion, u.estado_civil, d.especialidad from usuario u join docente d on d.CODIGO=u.CODIGO WHERE u.codigo=$id ";
            $conn=oci_connect("consultora","consultora");
            $prepare=oci_parse($conn,$sql);
            oci_execute($prepare);
            $scar = oci_fetch_assoc($prepare);
            return $scar; 
        }
}