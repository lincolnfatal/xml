<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Xml extends CI_Controller {

    function __construct() {
        parent::__construct();

        /* Carrega o modelo */
      //  $this->load->model('Pessoas_model', 'model', TRUE);
    }

    function index() {


        $this->load->helper('form');
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Pessoas";
        $arquivo_xml = simplexml_load_file('http://localhost/xml/teste.xml');
        $data['xml'] = $arquivo_xml;


        $this->load->view('xml.php', $data);
    }

    

}

?>