<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * User Control
	 */
	public function __construct() {
		parent::__construct();
		$this->load->library('datamapper');
	}

	public function index() {
		$gs = new Group();
		$gs->get();
		
		foreach ($gs->all as $g) {
			$group = array();
			$group['id'] = $g->id;
			$group['groupname'] = $g->groupname;
			$groupdata[] = $group;
		}
		$data['groups'] = $groupdata;
		
		$this->load->view('content/users', $data);
	}

	public function login() {
		// Create user object
        $u = new User();
		
		// Get username & password from post info
        $u->username = $this->input->post('username');
        $u->password = $this->input->post('password');
		
        // Attempt to log user in with the data they supplied, using the login function setup in the User model
        // You might want to have a quick look at that login function up the top of this page to see how it authenticates the user
        if ($u->login()) {
			$this->session->set_userdata('userid', $u->id);
			$this->session->set_userdata('username', $u->username);
			
			$data['info'] = $this->lang->line('valid_login');
			$this->load->view('status/success', $data);
        } else {
            // Show the custom login error message
			$data['infos'] = $u->error->all;
			$this->load->view('status/errors', $data);
        }
	}
		
	public function logout() {
		$this->session->unset_userdata('userid');
		$this->load->view('login');
	}
	
	public function add() {
		// Create user object
        $u = new User();

        // Put user supplied data into user object
        // (no need to validate the post variables in the controller,
        // if you've set your DataMapper models up with validation rules)
        $u->username = $this->input->post('username');
        $u->password = $this->input->post('password');
        $u->confirm_password = $this->input->post('confirm_password');
		$u->description = $this->input->post('description');
		
		// Create group object
        $g = new Group();
		$g->get_by_id($this->input->post('groupid'));

        if ($u->save($g)) {
			$data['info'] = sprintf($this->lang->line('valid_adduser'), $u->username);
			$this->load->view('status/success', $data);
        } else {
            // Show the custom login error message
			$data['infos'] = $u->error->all;
			$this->load->view('status/errors', $data);
        }
	}

	public function edit() {
		// Create user object
        $u = new User();

        // Put user supplied data into user object
        // (no need to validate the post variables in the controller,
        // if you've set your DataMapper models up with validation rules)
		$u->get_by_username($this->input->post('username'));
        $u->password = $this->input->post('password');
        $u->confirm_password = $this->input->post('confirm_password');
		$u->description = $this->input->post('description');
		
		// Create group object
        $g = new Group();
		$groupid = $this->input->post('groupid');
		if (!$groupid) {
			$g = $u->group->get();
		} else {
			$g->get_by_id($groupid);
		}
		
        if ($u->save($g)) {
			$data['info'] = sprintf($this->lang->line('valid_edituser'), $u->username);
			$this->load->view('status/success', $data);
        } else {
            // Show the custom login error message
			$data['infos'] = $u->error->all;
			$this->load->view('status/errors', $data);
        }
	}
	
	public function del($name) {
		// Create user object
        $u = new User();
		
		$u->get_by_username($name);
		$u->delete();
	}
	
	public function get($page = 0) {
		$us = new User();
		
		if ($page == 0) {
			$us->get();
		} else {
			$n = $us->count();
			$from = ($page - 1) * 20;
			$to = ($page) * 20 > $n ? $n : ($page) * 20;
			$us->get($from, $to);
		}
		
		foreach ($us->all as $u) {
			$user = array();
			$user['name'] = $u->username;
			$u->group->get();
			$user[]= $u->group->groupname;
			$user[] = $u->description;
			$user[] = $u->created;
			$user[] = $u->updated;
			$userdata[] = $user;
		}
		$data['infos'] = $userdata;
		$data['n'] = ceil($us->count() / 20);
		
		if ($page == 0) {
			$data['titles'] = array('用户名', '隶属用户组', '详细描述', '创建时间', '上次修改时间');
			$this->load->view('content/usertable', $data);
		} else {
			$this->load->view('content/usertable', $data);
		}
	}
	
	public function init() {
        $g = new Group();
		$g->get_by_groupname('root');
        $g->groupname = 'root';
		$g->permission = 'xxxxxxxxxxxxxxxxxxxx';
		$g->description = '默认管理员组';
		
        if ($g->save()) {
            echo $g->id . '<br />';
            echo $g->groupname . '<br />';
			echo $g->permission . '<br />';
			echo $g->description . '<br />';
        } else {
            foreach ($g->error->all as $error) {
                echo $error . "<br />";
            }
		}
		
        $u = new User();
		$u->get_by_username('root');
        $u->username = 'root';
        $u->password = '12345';
		$u->description = '默认管理员';
		
        if ($u->save($g)) {
            echo $u->id . '<br />';
            echo $u->username . '<br />';
			echo $u->password . '<br />';
			echo $u->description . '<br />';
        } else {
            foreach ($u->error->all as $error) {
                echo $error . "<br />";
            }
			echo "<br />";
		}
	}
}

/* End of file userctl.php */
/* Location: ./application/controllers/userctl..php */
