<?php require RUTA_APP . '/view/inc/header.php' ?>
<?php require RUTA_APP . '/view/inc/navbar.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Mis Cursos de <?php echo $iduser ?> </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Ir</button>
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
                    <h2>Cursos Registrados </h2>
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

                    <div class="row">

                      
                      
                      

<?php 
$cnn=oci_connect("consultora","consultora");
$sql2="SELECT * from curso";
$sql3="SELECT c.cod_curso , c.nom_curso, c.cod_esc,c.num_ciclo,c.num_creditaje,c.plan_estudio,c.horas , d.especialidad 
 from curso c join docente_curso t on t.cod_curso=c.cod_curso join docente d on t.cod_docente=d.codigo where t.cod_docente=$iduser";
$unir=oci_parse($cnn,$sql3);
oci_execute($unir);
while(($scar = oci_fetch_assoc($unir)) != false) {
  // Usar nombres de columna en mayúsculas para los índices del array asociativo
                     echo " <div class='col-md-55'>";
                         echo "     <div class='thumbnail'>";
                          echo "      <div class='image view view-first'>";
                          echo "         <img style='width: 100%; display: block;' src='images/media.jpg' alt='image' />";
                                    echo "<div class='mask no-caption'>";
                                      echo "<div class='tools tools-bottom'>";
                               echo "<a href=".RUTA_URL."/TemasController/method/".$scar['COD_CURSO']." ><i class='fa fa-link'></i></a> ";
                               echo "<a href='#'><i class='fa fa-pencil'></i></a>"; 
                               echo "<a href='#'><i class='fa fa-times'></i></a>";
                               echo "       </div>
                                    </div>
                                </div>
                              <div class='caption'>";
                                  
                              echo    "<p>".$scar['NOM_CURSO']."</p>
                              </div>
                              </div>
                            </div>";     
                            
                    }
?>
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

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>