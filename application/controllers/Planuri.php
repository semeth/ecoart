<?php
class Planuri extends CI_Controller{
    public function index(){

        $jumbo['page_title'] = 'Planuri';

        $data['header'] = $this->load->view('common/header' , '', true);
        $data['footer'] = $this->load->view('common/footer' , '', true);
        $data['jumbo'] = $this->load->view('common/jumbotron', $jumbo, true);

        $data['plans'] = $this->plans_model->get_plans();

        $this->load->view('planuri/index', $data);
    }
}