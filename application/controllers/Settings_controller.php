<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo "index";
	}

	public function get_users($user_id = "") {
		$data = array($user_id);
		if($user_id != "")
			echo '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Datos del usuario</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4>Text in a modal</h4>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <!-- /modals -->
                  </div>';
		else
		var_dump ( json_encode($data) );
	}

	public function put_users($user_id = "") {
		$data = array($user_id);
		if($user_id != "")
			echo '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Editar usuario</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4>Text in a modal</h4>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <!-- /modals -->
                  </div>';
		else
		var_dump ( json_encode($data) );
	}
	
}
