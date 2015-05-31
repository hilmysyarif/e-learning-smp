<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class P_admin extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('database'));
        $this->load->model(array('m_admin'));
        $this->load->database();
    }

    public function masukkan_data_siswa() {
    	$submit = $this->input->post('simpan');
    	// $this->nis = $this->input->post('nis');
    	// $this->password = $this->input->post('password');
    	// $this->nama = $this->input->post('nama');
    	// $this->tempat_lahir = $this->input->post('tempat_lahir');
    	// $this->tgl_lahir = $this->input->post('tgl_lahir');
    	// $this->nama_ortu = $this->input->post('nama_ortu');
    	// $this->pekerjaan = $this->input->post('pekerjaan');
    	// $this->no_ktp = $this->input->post('no_ktp');
    	// $this->telepon = $this->input->post('telepon');
    	// $this->handphone = $this->input->post('handphone');

    	if(isset($submit)) {
    		$this->m_admin->masukkan_data_siswa();
    		echo 'sukses';
        }
    }

}//end-class