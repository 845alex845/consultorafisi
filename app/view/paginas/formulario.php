<?php require RUTA_APP . '/view/inc/header.php' ?>
<?php require RUTA_APP . '/view/inc/navbar.php' ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Formulario</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                   
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

                    <form class="form-horizontal form-label-left" novalidate>

                     
                      <span class="section">MIS DATOS PERSONALES</span>
                      <!--CODIGO
                      8 digitos -->
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">CODIGO: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" disabled="disabled" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"  value="545" required="required" type="text">
                        </div>
                      </div>
                      <!--NOMBRE
                      15 byte-->
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">NOMBRE: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text" readonly>
                        </div>
                      </div>
                      <!--APE_PAT
                      15 byte-->                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">APELLIDO PATERNO: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text" readonly>
                        </div>
                      </div>
                      <!--APE_MAT
                      15 byte-->                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">APELLIDO MATERNO: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text" readonly>
                        </div>
                      </div>
                      <!--TIPO DE DOCUMENTO
                      20 byte-->                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">TIPO DOCUMENTO: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
                        </div>
                      </div>
                      <!--NRO DE DOCUMENTO
                      8 digitos-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">NRO. DOCUMENTO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="email" id="email" name="email" required="required" class="form-control" readonly>
                        </div>
                      </div>
                      <!--TELEFONO
                      9digitos-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">TELEFONO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control">
                        </div>
                      </div>
                      <!--CELULAR
                      9digitos-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="number">CELULAR <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control">
                        </div>
                      </div>
                      <!--EMAIL
                      40byte-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >EMAIL: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="url" id="website" name="website label-align" required="required" placeholder="www.website.com" class="form-control">
                        </div>
                      </div>
                      <!--GENERO
                      1byte-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="occupation">GENERO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control">
                        </div>
                      </div>
                      <!--FOTO
                      30 byte-->                       
                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">FOTO</label>
                        <div class="col-md-6 col-sm-6">
                          <input id="password"  name="password" data-validate-length="6,8" class="form-control" required="required">
                        </div>
                      </div>
                      <!--FECHA_NAC
                      date-->                       
                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align ">FECHA NACIMIENTO</label>
                        <div class="col-md-6 col-sm-6">
                          <input id="fechanacimiento" type="text" name="fechanacimiento"  class="form-control" required="required" readonly>
                        </div>
                      </div>

                      <!--DIRECCION
                      50 byte-->                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="textarea">DIRECCION: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <textarea id="direccion" required="required" name="direccion" class="form-control"></textarea>
                        </div>
                      </div>
                      
                        <!--TELEFONO
                        -->                       
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">ESTADO CIVIL:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>