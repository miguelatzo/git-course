<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('objeto_model');
        $this->load->helper('url_helper');
    }
    public function index(){
        $data['objetos'] = $this->objeto_model->get_objetos();
        $data['Aaron'] = "Este string";
        $this->load->view('ejemplo/vista_ejemplo', $data);
    }

    public function mostrarleAJorge(){
        die("Mira Jorge");
    }
}
