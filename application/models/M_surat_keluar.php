<?php 

class M_surat_keluar extends CI_Model{
    
    public function tampil_data()
    
    {
        // $this->db->order_by('id_penjadwalan', 'ASC');
        // $this->db->select('*');
        // return $this->db->from('tbl_penjadwalan')
        //   ->join('tbl_departemen', 'tbl_departemen.id_departemen=tbl_penjadwalan.id_penjadwalan')
        //   ->get()
        //   ->result();

        $this->db->select('*'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_surat_keluar'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		//$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_proposal.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
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

    function GetId($id_surat_keluar = '')
    {
      
      return $this->db->get_where('tbl_surat_keluar', array('id_surat_keluar' => $id_surat_keluar))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusPenjadwalan($id_surat_keluar)
    {
        $this->db->delete('tbl_surat_keluar',array('id_surat_keluar' => $id_surat_keluar));
    }


 
    
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('no_surat', $keyword);
        $this->db->or_like('tanggal_surat', $keyword);
        $this->db->or_like('perihal', $keyword);
        $this->db->or_like('tujuan', $keyword);
        // return $this->db->get('tbl_penjadwalan')->result_array();

        $this->db->select('*'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_surat_keluar'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		//$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_proposal.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
  		$query = $this->db->get();
		return $query->result();
    }

}


?>