<?php
class Servicii extends CI_Controller{
    public function index(){

        $jumbo['page_title'] = 'Servicii';

        $data['header'] = $this->load->view('common/header' , '', true);
        $data['footer'] = $this->load->view('common/footer' , '', true);
        $data['jumbo'] = $this->load->view('common/jumbotron', $jumbo, true);

        $this->load->view('servicii/index', $data);
    }
}