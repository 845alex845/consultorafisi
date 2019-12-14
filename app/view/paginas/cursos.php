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
function modal(){
  echo "<div class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-hidden='true'>
                               <div class='modal-dialog modal-sm'>
                                 <div class='modal-content'>
           
                                   <div class='modal-header'>
                                     <h4 class='modal-title' id='myModalLabel2'>Modal title</h4>
                                     <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                                     </button>
                                   </div>
                                   <div class='modal-body'>
                                     <h4>Text in a modal</h4>
                                     <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                     <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                   </div>
                                   <div class='modal-footer'>
                                     <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                     <button type='button' class='btn btn-primary'>Save changes</button>
                                   </div>
           
                                 </div>
                               </div>
                             </div>";
}
?>
                      
                      
                      

<?php 
  $i=0;
  while($i<count($datos)){
                     echo " <div class='col-md-55'>
                             <div class='thumbnail'>
                                <div class='image view view-first'>
                                  <img style='width: 100%; display: block;' src='images/media.jpg' alt='image' />
                                    <div class='mask no-caption'>
                                      <div class='tools tools-bottom'>
                               <a href="."TemasController/method/".$datos[$i]['COD_CURSO']." ><i class='fa fa-link'></i></a> 
                               <a href=''><i class='fa fa-pencil' ></i></a>
                               
                                      </div>
                                    </div>
                                </div>
                              <div class='caption'>
                                  
                              <p>".$datos[$i]['NOM_CURSO']."</p>
                              </div>
                              </div>
                            </div>";     
                            
                  $i++;
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