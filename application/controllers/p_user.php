<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_user extends Base {
// class P_admin extends CI_Controller {
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
  }

  public function pencarian() {
    $data['title']='Hasil Pencarian';
    $kata_kunci = $this->input->get('kata_kunci');
    if(!empty($kata_kunci)) {
      $data['berita']=$this->m_user->cari_berita($kata_kunci, $limit, $offset);
      // $data['berita']=$this->m_user->tampil_data_berita($config['per_page'], $this->uri->segment(3));
      $this->load->view('base/header', $data);
      $this->body_user('user/berita', $data);
      $this->load->view('base/footer');
    }
  }

}//end-class