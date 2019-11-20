<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar2.php' ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Creando Evaluacion </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  <a class="btn btn-danger" href="#" id="botonPrueba" role="button">Terminar Examen</a>
                  </div>
                  
                </div>
              </div>

            </div>

                

                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
      
                  <div class="x_content">

                  
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-33">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-44">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-11">
                        <form class="form-horizontal form-label-left" method="POST" action="../../ExamenController/crear/<?php echo $datos['id']?>">

                         <br><br><br>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tipo de Evaluacion</label>
                            <div class="col-md-6 col-sm-6">
                              <div id="gender2" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="tipoexamen" value="practica" class="join-btn" required="required"> &nbsp; Practica &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="tipoexamen" value="examen" class="join-btn" required="required"> Examen
                                </label>
                              </div>
                            </div>
                          </div>
  
                          <!-- fecha examen -->
                       

                            <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Fecha de inicio</label>
                            <div class="col-md-3 col-sm-3">
                            <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" name="fechainicio" required="required"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                            </div>
                          </div>

                          <!-- termina fecha examen -->
                          <!-- iniciar hora -->

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hora Inicio</label>
                                <div class="col-md-3 col-sm-3">
                                      <div class='input-group date' id='myDatepicker3'>
                                        <input type='text' class="form-control" name="horainicio"required="required" />
                                          <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                      </div>
                                </div>
                            </div>
                          <!-- terminar hora -->
                          <!-- hora fin -->
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Duración(min)</label>
                                <div class="col-md-3 col-sm-3">
                                <input class="form-control" type="number" required="required" revalue="20" id="example-number-input" name="duracion">

                                </div>
                            </div>
                          <!-- terminar hora fin -->

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-round btn-success" disable>Iniciar Evaluación</button>
                                

                                </div>
                            </div>

                        </form>
                      </div>
<!-- STEP -->
                      <div id="step-22">
                        <h2 class="StepTitle">Temas que se incluirán en el examen</h2>
                        <div class="clearfix"></div>
                          <?php 
                          $i=0;
                         
                          while($i<4){
                                echo '<div class="col-md-4 col-sm-4 ">
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" class="flat"> Tema '.$datos2[$i]['NUM_TEMA'].'
                                    </label>
                                </div>
                                </div>';
                                $i++;
                          }
                          while($i<8){
                            echo '<div class="col-md-4 col-sm-4 ">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" class="flat"> Tema '.$datos2[$i]['NUM_TEMA'].'
                                </label>
                            </div>
                            </div>';
                            $i++;
                      }
                      while($i<12){
                        echo '<div class="col-md-4 col-sm-4 ">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" class="flat"> Tema '.$datos2[$i]['NUM_TEMA'].'
                            </label>
                        </div>
                        </div>';
                        $i++;
                  }

                          ?>
                          

                          <br><br><br><br><br><br><br><br><br><br>

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nro de Preguntas</label>
                            <div class="col-md-3 col-sm-3">
                              <input id="middle-name2" class="form-control " type="text" name="nropreguntas">
                            </div>
                          </div>

        
                      </div>
<!-- STEP -->
                        <div id="step-33">
                            <h2 class="StepTitle">Seleccionando las preguntas...</h2>
                            <div class="col-md-12 col-sm-12">
                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Tema 1</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                          <ul class="to_do">
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Create email address for new intern</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                      </li>
                    </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Tema 4</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                          <ul class="to_do">
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                      </li>
                    </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">Tema 6</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                                    <ul class="to_do">
                                <li>
                                    <p>
                                    <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                </li>
                                <li>
                                    <p>
                                    <input type="checkbox" class="flat"> Create email address for new intern</p>
                                </li>
                        
                                </ul>
                          </div>
                        </div>
                      </div>
<!--aqui comienza-->
<div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <h4 class="panel-title">Tema 7</h4>
                        </a>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                                    <ul class="to_do">
                                <li>
                                    <p>
                                    <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                </li>
                                <li>
                                    <p>
                                    <input type="checkbox" class="flat"> Create email address for new intern</p>
                                </li>
                        
                                </ul>
                          </div>
                        </div>
                      </div>
<!--Aqui acaba-->

                    </div>
                    <br><br><br><br><br><br><br><br>
                            </div>
                            
                        </div>
<!-- STEP -->
                      <div id="step-44">
                      <div class="clearfix"></div>
                      <div class="text-center w-100"><h2>Examen Parcial</h2></div>

                      <div class="col-md-6 col-sm-6 ">
<?php
$i=1;
while($i<=10){
                       echo '       <div class="checkbox">
                                <label>Pregunta nro '.$i.'</label><br>
                                <label>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                </label>
                              </div>';
                            $i++;
}?>
                      </div>
                      <div class="col-md-6 col-sm-6 ">
<?php
$i1=11;
while($i1<=20){
                       echo '       <div class="checkbox">
                                <label>Pregunta nro '.$i1.'.</label><br>
                                <label>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                  <input type="checkbox" value=""> Option one. select more than one options<br>
                                </label>
                              </div>';
                            $i1++;
}?>
                      </div>
                      </div>
<!-- STEP -->
                    
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>



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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script scr="../../js/prueba.js"> </script>
       <!-- bootstrap-daterangepicker -->
       <script src="../../vendors/moment/min/moment.min.js"></script>
       <!-- bootstrap-datetimepicker -->    
    <script src="../../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
     <!-- jQuery Smart Wizard -->
     <script src="../../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <!-- Cropper -->
    <!-- Cropper 
    <script src="../../vendors/cropper/dist/cropper.min.js"></script>-->
    <script src="../../build/js/custom.min.js"></script>
  <!-- Initialize datetimepicker -->
<script  type="text/javascript">
   $(function () {
                $('#myDatepicker').datetimepicker();
            });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
 

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
  </body>
</html>
