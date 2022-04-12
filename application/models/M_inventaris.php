<?php 

class M_inventaris extends CI_Model{
    
    public function tampil_data()
    
    {
        $this->db->order_by('id_inventaris', 'ASC');
        $this->db->select('*');
        return $this->db->from('tbl_inventaris')
          ->get()
          ->result();
    }
	
	function GetId($id_inventaris = '')
    {
      return $this->db->get_where('tbl_inventaris', array('id_inventaris' => $id_inventaris))->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function HapusInventaris($id_inventaris)
    {
        $this->db->delete('tbl_inventaris',array('id_inventaris' => $id_inventaris));
	}
	
	public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('jumlah', $keyword);
        $this->db->or_like('kondisi', $keyword);
        $this->db->or_like('keterangan', $keyword);
        // return $this->db->get('tbl_penjadwalan')->result_array();

		$this->db->order_by('id_inventaris', 'ASC');
        $this->db->select('*');
        return $this->db->from('tbl_inventaris')
          ->get()
          ->result();
    }


    // function hapus_data($id_inventaris){

    //    $this->db->where('id_inventaris',$id_inventaris);
	// 	$this->db->delete('tbl_inventaris');
    // }
    
    // function tampil_inventaris(){
	// 	$hasil=$this->db->query("SELECT * FROM tbl_inventaris");
	// 	return $hasil;
	// }

	// function simpan_inventaris($nama_barang,$jumlah,$kondisi,$keterangan){
	// 	$hasil=$this->db->query("INSERT INTO tbl_inventaris (nama_barang,jumlah,kondisi,keterangan) VALUES ('$nama_barang','$jumlah','$kondisi','$keterangan')");
	// 	return $hasil;
	// }

	// function edit_inventaris($nama_barang,$jumlah,$kondisi,$keterangan){
	// 	$hasil=$this->db->query("UPDATE tbl_inventaris SET nama_barang='$nama_barang',jumlah='$jumlah',kondisi='$kondisi' WHERE id_inventaris='$id_inventaris'");
	// 	return $hsl;
	// }

	// function hapus_inventaris($id_inventaris){
	// 	$hasil=$this->db->query("DELETE FROM tbl_inventaris WHERE id_inventaris='$id_inventaris'");
	// 	return $hasil;
	// }
}


?>