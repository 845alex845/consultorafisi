
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
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <h1>PASO 1</h1>
                      </div>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                  
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
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
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
