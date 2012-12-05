<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class ManageAuth {
	private $_inst;
	
	public function __construct() {
		$this->_inst = &get_instance();
	}

	public function auth() {
		if (!$this->_inst->session->userdata('userid') && !preg_match("/login/i", uri_string())) {
			redirect('login');
			return;
		}
	}
}

/* End of file manage_auth.php */
/* Location: ./application/hooks/manage_auth.php */