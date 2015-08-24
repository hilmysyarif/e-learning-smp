<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
	public function __construct(){
		parent::__construct();	
      	// Your own constructor code
	}

	public function body_user($body_user, $data) {
		$data['body_user']=$body_user;
		$this->load->view('base/body-user.php', $data);
	}
	public function body_admin($body_admin, $data) {
		$data['body_admin']=$body_admin;
		$this->load->view('base/body-admin.php', $data);
	}
	public function login_siswa($login_siswa, $data) {
		$data['login_siswa']=$login_siswa;
		$this->load->view('base/login-siswa.php', $data);
	}
	public function login_guru($login_guru, $data) {
		$data['login_guru']=$login_guru;
		$this->load->view('base/login-guru.php', $data);
	}
	public function login_admin($login_admin, $data) {
		$data['login_admin']=$login_admin;
		$this->load->view('base/login-admin.php', $data);
	}
}