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

                  <div id="wizard_verticle" class="form_wizard wizard_verticle">
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
                        <form class="form-horizontal form-label-left" method="POST" action="../../EvaluacionController">

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
