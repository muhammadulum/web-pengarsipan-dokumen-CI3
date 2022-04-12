<?php 

class M_proposal extends CI_Model{
 
    public function tampil_data()
    
    {
        // $this->db->order_by('id_penjadwalan', 'ASC');
        // $this->db->select('*');
        // return $this->db->from('tbl_penjadwalan')
        //   ->join('tbl_departemen', 'tbl_departemen.id_departemen=tbl_penjadwalan.id_penjadwalan')
        //   ->get()
        //   ->result();

        $this->db->select('tbl_proposal.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_proposal'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_proposal.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
  		$query = $this->db->get();
		return $query->result();
    }

    public function tampil_departemen(){
        $this->db->order_by('id_departemen', 'ASC');
        $this->db->select('*');
        return $this->db->from('tbl_departemen')
          ->get()
          ->result();

    }

    function GetId($id_proposal = '')
    {
      
      return $this->db->get_where('tbl_proposal', array('id_proposal' => $id_proposal))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusPenjadwalan($id_proposal)
    {
        $this->db->delete('tbl_proposal',array('id_proposal' => $id_proposal));
    }

 
    
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_departemen', $keyword);
        $this->db->or_like('nama_kegiatan', $keyword);
        // return $this->db->get('tbl_penjadwalan')->result_array();

        $this->db->select('tbl_proposal.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_proposal'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_proposal.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
  		$query = $this->db->get();
		return $query->result();
    }

}


?>