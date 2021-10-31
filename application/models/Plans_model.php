<?php
class Plans_model extends CI_Model{
    public function get_plans(){
        return $this->db->get('wdr_admin_plans')->result();
    }
}