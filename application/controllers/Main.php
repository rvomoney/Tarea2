<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
    $this->load->view('index');
        
    }

    public function nuevo(){
        $this->load->view('index');
        
    }

}

/* End of file Main.php */
?>