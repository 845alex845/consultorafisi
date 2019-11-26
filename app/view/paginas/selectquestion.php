
<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar.php' ?>
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
                    <h2>Plain Page </h2>
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
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <h1>PASO 3 </h1>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                  
                  <form class="form-horizontal form-label-left" method="POST" action="../../EvaluacionController/crearExamen/<?php echo $datos['codexa']?>">
                              <!--  -->
                          <?php 
                          $cont=0;
                          $aux=0;

                          while($cont<count($datos2)){
                            for($i=0;$i<count($datos3);$i++){
                              if ($datos2[$cont]==$datos3[$i]['COD_TEMA'] ){
                                $aux=$i;
                              }
                          }
                            echo'
                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                  <div class="panel">

                                                  <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h4 class="panel-title"> Tema ';

                                                  echo $datos3[$aux]['NUM_TEMA'].': '.$datos3[$aux]['NOM_TEMA'];
                                                    echo' </h4>
                                                  </a>


                                                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">

                                                    <ul class="to_do">';
                                                    
                                                    for($j=0;$j<count($datos3);$j++){
                                                      if($datos2[$cont]==$datos3[$j]['COD_TEMA']){
                                                        $aux2=$j;
                                                        echo'
                                                        <li>
                                                          <p>
                                                            <input value="'.$datos3[$j]['ID_PREGUNTA'].'" type="checkbox" name="preguntas[]"class="flat">'.$datos3[$j]['ENUNCIADO'].' </p>
                                                        </li>';
                                                      }

                                                    }
                                                      

                                                    
                                                  echo'
                                                    </ul>

                                                    </div>
                                                  </div>

                                                </div>
                                                </div>';
                                                $cont++;
                                              }               
                          ?>
                              <!--  -->  
                              <div class="col-md-12 col-sm-12 ">
                                  <div class="form-group row">
                                  <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align"><!--  --></label>
                                    <div class="col-md-3 col-sm-3">
                   
                                      <button type="submit" class="btn btn-round btn-success" disable>Iniciar Evaluación</button>
                                    </div>
                                  </div>
                              </div>
                </form>
</div>
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

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>

    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>
