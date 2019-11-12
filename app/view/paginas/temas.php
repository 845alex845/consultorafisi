<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar2.php' ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Curso: <?php echo $datos['nombre']?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  <a class="btn btn-primary" href="ExamenController" role="button">Crear Examen</a>
                  </div>
                </div>
              </div>

            </div>

                <div class="clearfix"></div>

                    <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Contenido del Curso </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Herramientas</a>
                            <a class="dropdown-item" href="#">Configuraciones</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                   <?php
                   $i=1;
                   while($i<=16){
                      echo '<div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Tema.'.$i.' </h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                          <p><strong>Collapsible Item 3 data</strong>
                          </div>
                        </div>
                      </div>';
                    $i++;}
                        ?>
                      
                      

                    </div>
            
                    <!-- end of accordion -->
                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Miembros del Curso</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item" href="#">Configuraciones</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Participante</h4>
                        </a>
                        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nombres</th>
                                  <th>Apellidos</th>
                                  <th>Código</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <th scope="row">0</th>
                                  <td>Gabriela</td>
                                  <td>Delgado</td>
                                  <td>20######</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Alex</td>
                                  <td>Rojas</td>
                                  <td>16200153</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Guillermo</td>
                                  <td>Pariona</td>
                                  <td>16200##</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Yohony</td>
                                  <td>Yahulilahua</td>
                                  <td>14200###</td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Kevin</td>
                                  <td>Anglas</td>
                                  <td>15200###</td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>Reynaldo</td>
                                  <td>Mayta</td>
                                  <td>17200###</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                     
                    </div>
                    <!-- end of accordion -->


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
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>