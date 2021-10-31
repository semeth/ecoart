<?php
class Admin extends CI_Controller{


    public function index(){

        $user = $this->input->get('user');
        $pass = $this->input->get('pass');
        if($this->admin_model->check_user($user, $pass)){
            $this->session->set_userdata('logged', true);
            redirect('admin/dashboard');
        }
        $this->load->view('admin/index');
    }


    public function dashboard(){
        if($this->session->has_userdata('logged')){
            $data['header'] = $this->load->view('common/header' , '', true);
            $data['footer'] = $this->load->view('common/footer' , '', true);
    
            $this->load->view('admin/dashboard', $data);
        }else{
            redirect(base_url());
        }

    }
}