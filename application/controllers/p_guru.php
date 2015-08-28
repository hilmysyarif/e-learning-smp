<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/controllers/base.php';
class P_guru extends Base {
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

  public function tambah_data_pengumuman() {
  	$isi=$this->input->post('isi');
  	$data = array(
  		'isi' => $isi
  		);
  	$this->m_guru->tambah_data_pengumuman($data);
  	echo '<script>';
	echo "alert('Data Berhasil Disimpan');";
	echo "window.location='" . $this->agent->referrer() . "'";
	echo '</script>';
  }

  public function keluar_guru() {
      $this->session->unset_userdata('login_guru');
	  echo '<script>';
	  echo "alert('Berhasil Keluar');";
	  // echo "window.location='" . $this->agent->referrer() . "'";
	  echo "window.location='../user'";
	  echo '</script>';
  }

}//end-class