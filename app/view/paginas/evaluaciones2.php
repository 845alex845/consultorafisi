
<?php require RUTA_APP . '/view/inc/header2.php' ?>
<?php require RUTA_APP . '/view/inc/navbar2.php' ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mis Evaluaciones</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects <?php //echo $datos['codexa']?></h2>
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
  <!-- AQUI EMPEZAAAAMOSS -->
                    

                    <!-- start project list -->
                    <table class="table table-striped projects">

                      <thead>
                        <tr>
                          <th style="width: 3%" >Codigo</th>
                          <th style="width: 5%">TipoEvaluacion</th>
                          <th>Fecha</th>
                          <th>Curso</th>
                          <th style="width: 20%">NOTA</th>
                          
                        </tr>
                      </thead>

                      <tbody>

                        <?php
                        $i=0;
                        //esta recorriendo los examenes que el docente ha creado
                        while($i<$datos['b']){
                          echo '

                          <tr>

                          <td>'.$datos['e'].'</td>
  
                          <td>
                            <a>'.$datos['p'].'</a>                    
                          </td>
  
                          <td>
                            <a>'.$datos['f'].'</a>   
                          </td>

                          <td>
                          <a>'.$datos['c'].'</a>   
                          </td>

                          <td>
                          <a>'.$datos['a'].'</a>   
                          </td>
                            ';?>
                            <?php 
                            
                            echo'
                             
                            
                          
                        </tr>
  
                        ';
                        $i++;
                        }

                        ?>
                        
                      </tbody>
                    </table>
                    <!-- end project list -->

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
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>