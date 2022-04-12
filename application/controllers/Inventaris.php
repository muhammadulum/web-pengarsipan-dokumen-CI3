<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_inventaris');
    }
    public function index()
    {  
        $data['hasil'] = $this->m_inventaris->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['hasil'] = $this->m_inventaris->cariDataMahasiswa();
        }
        $this->load->view('template/header');
        $this->load->view('inventaris/datain',$data);
        $this->load->view('template/footer');
    }


	// function simpan_inventaris(){
	// 	$nama_barang=$this->input->post('nama_barang');
	// 	$jumlah=$this->input->post('jumlah');
	// 	$kondisi=$this->input->post('kondisi');
	// 	$keterangan=$this->input->post('keterangan');
	// 	$this->m_inventaris->simpan_inventaris($nama_barang,$jumlah,$kondisi,$keterangan);
	// 	redirect('http://localhost/arsipCI/inventaris/index');
	// }

	// function edit_inventaris(){
	// 	$nama_barang=$this->input->post('nama_barang');
	// 	$jumlah=$this->input->post('jumlah');
	// 	$kondisi=$this->input->post('kondisi');
	// 	$keterangan=$this->input->post('keterangan');
	// 	$this->m_inventaris->edit_inventaris($nama_barang,$jumlah,$kondisi,$keterangan);
	// 	redirect('http://localhost/arsipCI/inventaris/index');
	// }

	// function hapus_inventaris(){
	// 	$id_inventaris=$this->input->post('id_inventaris');
	// 	$this->m_inventaris->hapus_inventaris($id_inventaris);
	// 	redirect('http://localhost/arsipCI/inventaris/index');
  // }
  

  function update($id_inventaris)
    {
        $data['ambil']=$this->m_inventaris->GetId($id_inventaris);
        $this->load->view('template/header');
        $this->load->view('inventaris/v_edit',$data);
        $this->load->view('template/footer');
	}
	
    public function simpan_update()
    {
        $data = array(
            'nama_barang'=>$this->input->post('nama_barang'),
            'jumlah'=>$this->input->post('jumlah'),
            'kondisi'=>$this->input->post('kondisi'),
            'keterangan'=>$this->input->post('keterangan')
		);
	$id_inventaris = $this->input->post('id_inventaris');
	$this->db->where('id_inventaris', $id_inventaris);
        $this->db->update('tbl_inventaris',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di Update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('inventaris');
	}



  public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('inventaris/formin');
        $this->load->view('template/footer');
    }

    function tambah_aksi(){
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
        $kondisi = $this->input->post('kondisi');
        $keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'kondisi' => $kondisi,
			'keterangan' => $keterangan
			);
        $this->m_inventaris->input_data($data,'tbl_inventaris');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di tambah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
		redirect('http://localhost/arsipCI/inventaris/index');
	}

  function hapus($id_inventaris)
    {
        $this->m_inventaris->HapusInventaris($id_inventaris);
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
         Data berhasil di hapus
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>');
        redirect('inventaris');
    }

  //   function hapus(){



  //       $id_inventaris=$this->input->post('id_inventaris');
  //       $this->m_inventaris->hapus_data($id_inventaris);
  //       $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //       Data berhasil di hapus
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');
  //       redirect('http://localhost/arsipCI/inventaris/index');
		
	// }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Logout sukses
          </div>');
            redirect('auth');

    }


}