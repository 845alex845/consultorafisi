
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
                     <!--  -->

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
