<?php 
$iduser=$_SESSION["usuario"];
$conn=oci_connect("consultora","consultora");
$sql="SELECT *  from usuario WHERE codigo=$iduser";
$prepare=oci_parse($conn,$sql);
oci_execute($prepare);
$scar = oci_fetch_assoc($prepare);
if(!isset($iduser)){
  header("Location: login3.php ");
}
if($scar['CODIGO'] < 16000000 ){
  $rol ="docente";
}else{
  $rol="alumno";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo $datos['tipo']." ".$datos['fecha']." ".$datos['hora'] ." ".$datos['duracion']   ?>
</body>
</html>