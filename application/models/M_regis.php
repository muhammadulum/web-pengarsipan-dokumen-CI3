<?php 

class M_regis extends CI_Model{
    
    public function tampil_data()
    
    {
        $this->db->order_by('role_id', 'ASC');
        $this->db->select('*');
        return $this->db->from('user_role')
          ->get()
          ->result();
    }
}


?>