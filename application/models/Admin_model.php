<?php
class Admin_model extends CI_Model{
    public function check_user($user, $pass){
        $query = $this->db->where('user', $user)->get('wdr_admin_users')->row();
        if(password_verify($pass, $query->pass)){
            return true;
        }else{
            return false;
        }
    }
}