<?php 

class M_surat_masuk extends CI_Model{
    
    public function tampil_data()
    
    {
        // $this->db->order_by('id_penjadwalan', 'ASC');
        // $this->db->select('*');
        // return $this->db->from('tbl_penjadwalan')
        //   ->join('tbl_departemen', 'tbl_departemen.id_departemen=tbl_penjadwalan.id_penjadwalan')
        //   ->get()
        //   ->result();

        $this->db->select('tbl_surat_masuk.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_surat_masuk'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_surat_masuk.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
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

    function GetId($id_surat_masuk = '')
    {
      
      return $this->db->get_where('tbl_surat_masuk', array('id_surat_masuk' => $id_surat_masuk))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusPenjadwalan($id_surat_masuk)
    {
        $this->db->delete('tbl_surat_masuk',array('id_surat_masuk' => $id_surat_masuk));
    }


 
    
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_departemen', $keyword);
        $this->db->or_like('tanggal_surat', $keyword);
        $this->db->or_like('tanggal_diterima', $keyword);
        $this->db->or_like('perihal', $keyword);
        $this->db->or_like('nama_instansi', $keyword);
        // return $this->db->get('tbl_penjadwalan')->result_array();

        $this->db->select('tbl_surat_masuk.*, tbl_departemen.nama_departemen'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  		$this->db->from('tbl_surat_masuk'); /**untuk memilih tabel user untuk dihubungkan ke tabel gender */
  		$this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_surat_masuk.id_departemen'); /**untuk menggabungkan 2 tabel tadi */
  		$query = $this->db->get();
		return $query->result();
    }

}


?>