<?php 

class M_departemen extends CI_Model{
    
    public function tampil_data()
    
    {
        $this->db->order_by('id_departemen', 'ASC');
        $this->db->select('*');
        return $this->db->from('tbl_departemen')
          ->get()
          ->result();
    }
    function GetId($id_departemen = '')
    {
      return $this->db->get_where('tbl_departemen', array('id_departemen' => $id_departemen))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusDepartemen($id_departemen)
    {
        $this->db->delete('tbl_departemen',array('id_departemen' => $id_departemen));
    }
}


?>