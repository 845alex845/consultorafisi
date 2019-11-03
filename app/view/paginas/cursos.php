<?php require RUTA_APP . '/view/inc/header.php' ?>
<?php require RUTA_APP . '/view/inc/navbar.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Media Gallery <small> gallery design</small> </h3>
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
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Media Gallery <small> gallery design </small></h2>
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
//FALTA COLOCAR EL COD_DOCENTE GENERAL , SOLO LEE 21700 POR AHORA
$sql="SELECT c.cod_curso as COD_CURSO,c.nom_curso as mis_cursos from docente  d join docente_curso  
dc on dc.COD_DOCENTE=d.COD_DOCENTE join curso c on c.COD_CURSO=dc.COD_CURSO where dc.cod_docente=21700";
$unir=oci_parse($cnn,$sql);
oci_execute($unir);
while (($scar = oci_fetch_assoc($unir)) != false) {
  // Usar nombres de columna en mayúsculas para los índices del array asociativo
                     echo " <div class='col-md-55'>";
                         echo "     <div class='thumbnail'>";
                          echo "      <div class='image view view-first'>";
                          echo "         <img style='width: 100%; display: block;' src='images/media.jpg' alt='image' />";
                                    echo "<div class='mask no-caption'>";
                                      echo "<div class='tools tools-bottom'>";
                               echo "<a href='TemasController/index/".$scar['COD_CURSO']."' ><i class='fa fa-link'></i></a> ";
                               echo "<a href='#'><i class='fa fa-pencil'></i></a>"; 
                               echo "<a href='#'><i class='fa fa-times'></i></a>";
                               echo "       </div>
                                    </div>
                                </div>
                              <div class='caption'>
                                  <p><strong>Image Name</strong></p>";
                              echo    "<p>".$scar['MIS_CURSOS']."</p>
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