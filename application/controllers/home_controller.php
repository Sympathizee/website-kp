<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('home_model');
	}

    public function index() {
        $data['cek'] = 0;
        #$data['recent'] = $this->dbmodel->getRecent();
        $this->load->view('home_view',$data);
    }

}
