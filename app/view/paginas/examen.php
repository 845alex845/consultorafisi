<?php require RUTA_APP . '/view/inc/header.php' ?>
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
                  <a class="btn btn-danger" href="TemasController" role="button">Terminar Examen</a>
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
                        <h2 class="StepTitle">Step 1 Content</h2>
                        <form class="form-horizontal form-label-left">

                          <span class="section">Personal Info</span>
                   
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tipo de Evaluacion</label>
                            <div class="col-md-6 col-sm-6">
                              <div id="gender2" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="gender" value="practica" class="join-btn"> &nbsp; Practica &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="gender" value="examen" class="join-btn" checked=""> Examen
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hora inicio</label>
                            <div class="col-md-3 col-sm-3">
                              <input id="middle-name2" class="form-control " type="text" name="hora-inicio">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hora Fin</label>
                            <div class="col-md-3 col-sm-3">
                              <input id="middle-name2" class="form-control " type="text" name="hora-fin">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Fecha</label>
                            <div class="col-md-3 col-sm-3">
                              <input id="middle-name2" class="form-control " type="text" name="fecha">
                            </div>
                          </div>
                         <!-- <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Only Date Picker</label>
                            <div class="col-md-6 col-sm-6">
                            <div class='input-group date' id='myDatepicker2'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Only Time Picker</label>
                            <div class="col-md-6 col-sm-6">
                            <div class='input-group date' id='myDatepicker3'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                            </div>
                          </div>
                            -->
                      
                          


                        </form>
                      </div>
                      <div id="step-22">
                        <h2 class="StepTitle">Step 2 Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <div id="step-33">
                        <h2 class="StepTitle">Step 3 Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <div id="step-44">
                        <h2 class="StepTitle">Step 4 Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

       <!-- bootstrap-daterangepicker -->
       <script src="vendors/moment/min/moment.min.js"></script>
       <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
     <!-- jQuery Smart Wizard -->
     <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->

    <!-- Cropper -->
    <script src="vendors/cropper/dist/cropper.min.js"></script>
    <script src="build/js/custom.min.js"></script>
  <!-- Initialize datetimepicker -->
<!--<script  type="text/javascript">
   $(function () {
                $('#myDatepicker').datetimepicker();
            });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>-->
  </body>
</html>
