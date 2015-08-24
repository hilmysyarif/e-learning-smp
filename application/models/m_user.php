<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class M_user extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

}//end-class