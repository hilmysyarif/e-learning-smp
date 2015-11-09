<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//memanggil class base pada controller/base.php
require_once 'application/controllers/base.php';

class Custom_404 extends Base {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title']= '404';
		$data['slides']=$this->m_admin->tampil_data_slides();
		$this->load->view('base/header', $data);
		$this->body_user('custom_404', $data);
		$this->load->view('base/footer', $data);
	}

}