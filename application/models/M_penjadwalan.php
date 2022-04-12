<?php 

class M_penjadwalan extends CI_Model{
    
    public function tampil_data()
    
    {
        // $this->db->order_by('id_penjadwalan', 'ASC');
        // $this->db->select('*');
        // return $this->db->from('tbl_penjadwalan')
        //   ->join('tbl_departemen', 'tbl_departemen.id_departemen=tbl_penjadwalan.id_penjadwalan')
        //   ->get()
        //   ->result();

        $this->db->select('tbl_penjadwalan.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_penjadwalan'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_penjadwalan.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
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

    function GetId($id_penjadwalan = '')
    {
      
      return $this->db->get_where('tbl_penjadwalan', array('id_penjadwalan' => $id_penjadwalan))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusPenjadwalan($id_penjadwalan)
    {
        $this->db->delete('tbl_penjadwalan',array('id_penjadwalan' => $id_penjadwalan));
    }
 
    
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_departemen', $keyword);
        $this->db->or_like('nama_kegiatan', $keyword);
        $this->db->or_like('tanggal_kegiatan', $keyword);
        $this->db->or_like('keterangan', $keyword);
        // return $this->db->get('tbl_penjadwalan')->result_array();

        $this->db->select('tbl_penjadwalan.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_penjadwalan'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_penjadwalan.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
  		$query = $this->db->get();
		return $query->result();
    }

}


?>