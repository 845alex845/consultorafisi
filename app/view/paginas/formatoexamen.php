
<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar2.php' ?>
<link rel="stylesheet" href="../../css/prueba.css">
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>FORMATO DE EVALUACION</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <!--  -->
                     <div class="col-md-3 col-sm-3 col-xs-3">
                      <h1>PASO 4 <?php echo $datos2['codexa'] ?></h1>
                    </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                  <!-- CAMBIAR EN EL ACTION DE ACUERDO AL USUARIO; SI ES ALUMNO QUE  -->
                  <form class="form-horizontal form-label-left"  method="POST" action="../../ExamenController/cargarExamen/<?php echo $datos2['codexa']?>"  > <!-- hemos cambiado codcurso -->

                     <div class="clearfix"></div>
                      <div class="text-center w-100"><h2><?php echo $datos2['tipoexamen'] ?></h2></div>

                      <div class="col-md-6 col-sm-6 ">
<?php
$i=0;
$cant=((count($datos))/2);
//el while está recorriendo las preguntas
//datos codigo de preguntas
//datos 2 variables aux
//datos 3 para el enunciado y mostrar alternativas
while($i<$cant){
  $preg=Pregunta::obtenerPregunta($datos[$i]);
                       echo ' <div class="checkbox">
                                <label>'.($i+1).". ".$preg['ENUNCIADO'].'</label><br>
                                <label>
                                ';
                                $alter=Alternativa::obtenerAlt($datos[$i]);
                                  for($z=0;$z<count($alter);$z++){
                                    
                                    echo '
                                  <input type="checkbox" name="alternativas[]" value="'.$alter[$z]['ITEM'].'"> '.$alter[$z]['ENUN_ALT'].'<br>';
                                  }
                              echo '
                              </label>
                              </div>';
                            $i++;
}?>
                      </div>
                      <div class="col-md-6 col-sm-6 ">
                                <?php
                                $cant=$i;
                                while($cant<count($datos)){
                                  $preg=Pregunta::obtenerPregunta($datos[$cant]);
                                  echo ' <div class="checkbox">
                                                   <label>'.($cant+1).'. '.$preg['ENUNCIADO'].'</label><br>
                                                   <label>';
                                                          $alter=Alternativa::obtenerAlt($datos[$cant]);
                                                            for($y=0;$y<count($alter);$y++){
                                                              echo '
                                                            <input type="checkbox" name="alternativas[]" value="'.$alter[$y]['ITEM'].'"> '.$alter[$y]['ENUN_ALT'].'<br>';
                                                            }
                                                        echo '
                                                  </label>
                                         </div>';
                                                  $cant++;
                                                                      }
                                                  ?>
                      </div>
                      <div class="col-md-12 col-sm-12 ">
                          <div class="form-group row">

                            <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align"><!--  --></label>
                            <div class="col-md-3 col-sm-3">
                             
                              <button id="confirmarexamen"  type="submit" class="btn btn-round btn-success" >Iniciar Evaluación</button>
                            </div>
                          </div>
                      </div>                                                  

                  </form>
                  </div>
                  <!--  -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php require RUTA_APP . '/view/inc/footer.php' ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
<script src="../../js/prueba.js"></script>
<!--  <script type="text/javascript">

function stopDefAction(evt) {
  evt.preventDefault();

}
</script>-->
  </body>
</html>
