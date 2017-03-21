<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Página <?= $page->name ?></h3>
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
            <!-- TEMPLATES -->
            <div id="templates">
              <?php 
                $i = 0;
                foreach ($datas as $data) {

                  $ncdata = explode('|', $data->content);

                  echo '<div class="main-temp ' . $data->class . '">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                          <div class="adm-block"></div>
                          <div class="adm-title">' . ++$i . " - " . $data->temp_name . '</div>
                          <div class="adm-edit"><i class="fa fa-pencil"></i></div>
                          <div class="menu-edit">
                            <ul>
                              <li class="btn-edit">Editar</li>
                              <li class="btn-hide">Ocultar</li>
                              <li class="btn-dlt">Eliminar</li>
                            </ul>
                          </div>
                          <div class="adm-cancel"><i class="fa fa-close"></i></div>
                          <div class="adm-save"><i class="fa fa-floppy-o"></i></div>';

                          $data_array = array(
                            "data_content" => $data->content,
                            "data_template" => $data->template_id
                          );

                            $this->load->view("templates", $data_array);
                            
                          echo '</div>
                        </div>
                      </div>
                    </div>';
                  }    

                  ?>
            </div>
            
            
          </div>
        </div>
      </div>
<!-- /page content -->