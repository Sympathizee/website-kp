<?php	
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Auth extends CI_Controller {
	    function __construct() {
	        parent::__construct();
	        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
            $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	        if ($this->session->userdata('status') != 'login') { 
	            redirect(base_url('Login'));
	        }
	    }
	}

	class Clogin extends CI_Controller {
		function __construct() {
			parent::__construct();
			if ($this->session->userdata('status') == 'login') {
				redirect(base_url());
			}
		}
	}
?>