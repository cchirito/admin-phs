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
                    <form id="add_data_user" action="<?= base_url('new_user') ?>" class="form-horizontal form-label-left input_mask" >

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left" name="email" placeholder="Email" required>
                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="password" class="form-control has-feedback-left" name="password" placeholder="Contraseña" required>
                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id="heard" class="form-control" name="" required>
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
                    <table class="table table-striped table-bordered" id="table_data_user">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                        <tbody>
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

                <h2 class="page-header">Ver - Modificar - Deshabilitar páginas</h2>

                <div class="row">
                  <div class="col-md-12">
                      <div id="page-sortable">
                        <?php $i = 0; foreach ($pages as $page) {
                          echo '<div class="page-item" data-id="' . $page->page_id . '">
                            <div class="page-block ' . ($page->state_id == 2 ? 'active' : '') . '"></div>
                            <div class="page-content">
                              <div class="page-name">
                                <i class="fa fa-pencil"></i> <strong>PÁGINA:</strong> <span contenteditable="true">' . $page->name . '</span>
                              </div>
                              <div class="page-url">
                                <i class="fa fa-pencil"></i> <strong>URL:</strong> <span contenteditable="true">' . $page->url . '</span>
                              </div>
                            </div>
                            <div class="page-action">
                              <button type="button" class="btn btn-default btn_page_edit_confirm"><i class="fa fa-check"></i></button>
                              <button type="button" class="btn btn-default btn_page_edit_cancel"><i class="fa fa-close"></i></button>
                              <button type="button" class="btn btn-default btn_page_edit_state"><i class="fa fa-eye"></i></button>
                              <button type="button" class="btn btn-default btn_page_edit"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>';
                        } ?>
                      </div>
                  </div>
                </div>
                <div class="clearfix"></div>

              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- /page content -->