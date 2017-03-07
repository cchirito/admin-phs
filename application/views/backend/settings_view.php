<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ajustes</h3>
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

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Administración de Usuarios</h3>
                  </div>
                </div>

                <h2 class="page-header">Registro de nuevo usuario</h2>

                <div class="row">
                    <form class="form-horizontal form-label-left input_mask">

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="password" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Contraseña">
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id="heard" class="form-control" required>
                            <option value="">Seleccionar privilegios..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                          <button type="submit" class="btn btn-danger col-md-12">Registrar</button>
                        </div>            
                      </form>
                </div>

                <h2 class="page-header">Ver - Modificar - Deshabilitar usuarios</h2>

                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </thead>


                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                              <button type="button" class="btn btn-info btn-xs put_data_user"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-danger btn-xs delete_data_user" data-toggle="modal" data-target=".delete-modal"><i class="fa fa-remove"></i></button>

                                <div class="modal fade delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                   <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                      </button>
                                      <h4 class="modal-title" id="myModalLabel">¿Seguro que desea eliminar a este usuario?</h4>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                    <div class="col-md-12 text-right">
                                      <button type="button" class="btn btn-primary">Si</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /modals -->
                              </td>
                          </tr>
                          </tbody>
                          </table>

                          <div id="modal_data_user"></div>
                          </div>
                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Administración de Páginas</h3>
                  </div>
                </div>

                <h2 class="page-header">Registro de nuevo usuario</h2>

                <div class="row">
                    
                </div>

                <h2 class="page-header">Ver - Modificar - Deshabilitar usuarios</h2>

                <div class="row">
                  
                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- /page content -->