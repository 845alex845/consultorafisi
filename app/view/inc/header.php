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
if($scar['CODIGO']==99999999){
$rol ="administrador";
}else if($scar['CODIGO'] < 12000000 ){
  $rol ="docente";
}else{
  $rol="alumno";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aula Virtual San Marcos </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Aula Virtual</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido <?php echo $rol."<br>". $scar['NOMBRE'].' '.$scar['APE_PAT'].' '.$scar['APE_MAT'];?></span>

                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
<!-- Cambiar el controlador docentecontroler por usuario controler -->
                <?php
                echo'
                  <li><a><i class="fa fa-edit"></i> Mi información <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                  
                     <li><a href="DocenteController">Form Validation</a></li>
                
                    </ul>
                  </li>';
                  if($rol=='alumno' || $rol=='docente'){
                    echo '<li><a><i class="fa fa-table"></i> Mis cursos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="CursoController">Ver Cursos</a></li>
                    </ul>
                  </li>';
                  }
                  if($rol=='docente'){
                    echo '<li><a><i class="fa fa-bar-chart-o"></i> Mis Evaluaciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ExamenController">Examenes</a></li>
                    </ul>
                    </li>';
                  }
                  if($rol=='alumno'){
                    echo '<li><a><i class="fa fa-bar-chart-o"></i> Mis Notas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="NotasController">Examenes</a></li>
                    </ul>
                    </li>';
                  }
                  if($rol=='administrador'){
                    //controladore para la gestion de alumno y docente
                    if($rol=='docente'){
                      echo '<li><a><i class="fa fa-bar-chart-o"></i> Gestión de Usuarios<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="ExamenController">Examenes</a></li>
                      </ul>
                      </li>';
                    }
                  }

                ?>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
			</div>
        </div>
