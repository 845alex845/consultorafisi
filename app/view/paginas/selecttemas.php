
<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar2.php' ?>
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
                    <h2>Plain Page</h2>
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
                      <h1>PASO 2</h1>
                  </div>
                  <?php 
  $codexamen=Examen::obtenerCodigo($datos['usuadoc']);

  ?>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                  <form class="form-horizontal form-label-left" method="POST" action="../../EvaluacionController/method/<?php echo $codexamen['COD_EXAMEN'].$datos['idcurso']?>"><!-- hemos cambiado codcurso -->
 
                  <h2 class="StepTitle">Temas que se incluirán en el examen <?php echo $codexamen['COD_EXAMEN'] ?></h2>
                        <div class="clearfix"></div>
                     

                        <div class="col-md-6 col-sm-6 ">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="<?php echo $datos2[0]['COD_TEMA'] ?>"   class="flat" /> <?php echo "TEMA ".$datos2[0]['NUM_TEMA'].":".$datos2[0]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="<?php echo $datos2[1]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[1]['NUM_TEMA'].":".$datos2[1]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="<?php echo $datos2[2]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[2]['NUM_TEMA'].":".$datos2[2]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="<?php echo $datos2[3]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[3]['NUM_TEMA'].":".$datos2[3]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby5" value="<?php echo $datos2[4]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[4]['NUM_TEMA'].":".$datos2[4]['NOM_TEMA']?>
                        <br><br>
                        <input type="checkbox" name="hobbies[]" id="hobby6" value="<?php echo $datos2[5]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[5]['NUM_TEMA'].":".$datos2[5]['NOM_TEMA']?>
                        <br><br>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="checkbox" name="hobbies[]" id="hobby7" value="<?php echo $datos2[6]['COD_TEMA'] ?>"  class="flat" /> <?php echo "TEMA ".$datos2[6]['NUM_TEMA'].":".$datos2[6]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby8" value="<?php echo $datos2[7]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[7]['NUM_TEMA'].":".$datos2[7]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby9" value="<?php echo $datos2[8]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[8]['NUM_TEMA'].":".$datos2[8]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby10" value="<?php echo $datos2[9]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[9]['NUM_TEMA'].":".$datos2[9]['NOM_TEMA']?>
                        <br><br>

                        <input type="checkbox" name="hobbies[]" id="hobby11" value="<?php echo $datos2[10]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[10]['NUM_TEMA'].":".$datos2[10]['NOM_TEMA']?>
                        <br><br>
                        <input type="checkbox" name="hobbies[]" id="hobby12" value="<?php echo $datos2[11]['COD_TEMA'] ?>" class="flat" /> <?php echo "TEMA ".$datos2[11]['NUM_TEMA'].":".$datos2[11]['NOM_TEMA']?>
                        <br><br>
                        </div>

                        <div class="col-md-12 col-sm-12 ">
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">Nro de Preguntas</label>
                              <div class="col-md-3 col-sm-3">
                                <input id="middle-name2" class="form-control " type="text" name="nropreguntas" value="10">
                                <br>
                                <button type="submit" class="btn btn-round btn-success" disable>Iniciar Evaluación</button>
                              </div>
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
