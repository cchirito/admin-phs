<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users');
		$this->load->model('states');
		$this->load->model('pages');
		header('Access-Control-Allow-Origin: http://192.168.1.19');  
	}

	public function new_user() {

		if($this->input->post()) {
			$user = array(
				'email' => $this->input->post('email')
			);

			$data = "";
			if(!$this->users->find_by_email($user["email"])) :
				$this->users->add_user($user);
				$data = array(
					"type" => "success",
					"message" => "Usuario creado correctamente"
					);
			else:
				$data = array(
					"type" => "error",
					"message" => "Este correo ya se encuentra registrado"
					);
			endif;
			
			echo json_encode($data);
		}
		
	}

	public function get_users($user_id = "") {

		if($user_id != "" && $this->users->find_by_id($user_id)):
			$user = $this->users->find_by_id($user_id);

			echo '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                <form id="put_data_user" action="' . base_url('put_users') . '">
                                <input type="hidden" name="id" value="' . $user->user_id . '" />
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Datos del usuario ' . $user->first_name . " " . $user->last_name . '</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4>Editar usuario</h4>
                                    <div class="row">
								<div class="col-md-6">
									<label>Nombres</label>
                      					<input type="text" id="fullname" class="form-control" name="nombres" placeholder="nombres" value="' . $user->first_name . '" />
								</div>
								<div class="col-md-6">
									<label>Apellidos</label>
                      					<input type="text" id="fullname" class="form-control" name="apellidos" placeholder="apellidos" value="' . $user->last_name . '" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
                      					<input type="text" id="fullname" class="form-control" name="email" placeholder="apellidos" value="' . $user->email . '" />
								</div>

								<div class="col-md-6">
									<label>Estado</label>
                      					<select class="form-control" name="estado">';
                    							foreach ($this->states->find_all() as $state):
                    								echo ($state->state_id == $user->state_id) 
                    								? '<option value="' . $state->state_id . '" selected>' . $state->name . '</option>'
                    								:  '<option value="' . $state->state_id . '">' . $state->name . '</option>';
                    							endforeach;
                      				echo '	</select>
								</div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default close_form" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                  </div>
							</form>
                                </div>
                              </div>
                            </div>';
		else:

		$i = 0;
		$data_user_table = array();
		foreach ($this->users->find_all() as $user) {
				array_push($data_user_table, 
					array(
						++$i,
						$user->first_name . " " . $user->last_name,
						$user->email,
						($user->state_id == 1) ? '<button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Activo</button>' : '<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Inactivo</button>',
						' <button type="button" class="btn btn-info btn-xs get_data_user" data-id="' . $user->user_id . '"><i class="fa fa-pencil"></i></button>'
					)
				);
		}

		$data = array("data" => $data_user_table);
		
		endif;

		echo json_encode($data);
		
	}

	public function put_users() {
		if($this->input->post()):
			$user = array( 
				'user_id' => $this->input->post('id'),
				'first_name' => $this->input->post('nombres'),
				'last_name' => $this->input->post('apellidos'),
				'email' => $this->input->post('email'),
				'state_id' => $this->input->post('estado')
				);
			if($this->users->update_user($user)):
				$data = array(
					"type" => "success",
					"message" => "Datos actualizados correctamente"
					);
			endif;
			
		else:
			$data = array(
				"type" => "error",
				"message" => "Error al enviar datos"
				);
		endif;

		echo json_encode($data);
	}

	public function put_position_pages() {
		$data = "";

		if($this->input->post()):

			$size = $this->input->post('size-sortable');
			$id = $this->input->post('id-sortable');

			for($i=0; $i < $size ; $i++):
				$page = array(
					'page_id' => $id[$i],
					'position' => ($i + 1)
					);
				$this->pages->update_position($page);
			endfor;

			$data = array(
					"type" => "success",
					"title" => "Excelente",
					"message" => "Posición actualizada"
					);
		else:
			$data = array(
					"type" => "error",
					"title" => "Peligro",
					"message" => "Error al acceder a los datos"
					);
		endif;

		echo json_encode($data);
	}

	public function put_pages() {

		if($this->input->post()):

			$array = $this->input->post('array-sortable');
			$id = $this->input->post('id-sortable');

			$array[1] = strtolower($array[1]);

			if(!$this->pages->find_by_url(url_title($array[1]))):

			$page = array(
				'page_id' => $id,
				'name' => $array[0],
				'url' => url_title($array[1])
				);

			$this->pages->update_page($page);

			$data = array(
					"type" => "success",
					"title" => "Excelente",
					"message" => "Datos actualizados correctamente"
					);
			else:
				$data = array(
					"type" => "error",
					"title" => "Error",
					"message" => "Esta URL ya existe"
					);
			endif;
		else:
			$data = array(
					"type" => "error",
					"title" => "Peligro",
					"message" => "Ocurrió un error al actualizar los datos"
					);
		endif;

		echo json_encode($data);
	}

	public function new_page() {
		$data = "";

		if($this->input->post()):
			$name = $this->input->post('name_page');
			$url = $this->input->post('url_page');
			$url = url_title(strtolower($url));

			if(!$this->pages->find_by_url($url)):
				$page = array(
					'name' => $name,
					'url' => $url,
					'page_type_id' => 1
				);

				if($this->pages->add_page($page)):
					$data = array(
						"type" => "success",
						"title" => "Excelente",
						"message" => "Página creada correctamente"
					);
				endif;
			else:
				$data = array(
					"type" => "error",
					"title" => "Error",
					"message" => "Esa url ya existe"
				);
			endif;
		endif;

		echo json_encode($data);
	}

	public function put_state_pages() {
		if($this->input->post()):
			$id = $this->input->post('id_page');
			$state = $this->input->post('state_page');

			$state = ($state == '1') ? '2' : '1'; 

			$page = array(
				'page_id' => $id,
				'state_id' => $state
			);

			if($this->pages->update_state($page)):
				$data = array(
					"type" => "success",
					"title" => "Excelente",
					"message" => "Estado cambiado"
				);
			else:
				$data = array(
					"type" => "error",
					"title" => "Error",
					"message" => "Error al cambiar el estado"
				);
			endif;

			echo json_encode($data);
		endif;
	}
	
}
