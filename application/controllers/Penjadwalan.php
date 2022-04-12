<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_penjadwalan');
    }


    public function index()

    {
        // $data['hasil']=$this->m_penjadwalan->tampil_data();
        // // $this->load->model('m_penjadwalan');
        // // $query= $this->m_penjadwalan->get();
        // $this->load->view('template/header');
        // $this->load->view('penjadwalan/datapen',$data);
        // $this->load->view('template/footer');


        $data['hasil'] = $this->m_penjadwalan->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['hasil'] = $this->m_penjadwalan->cariDataMahasiswa();
        }
        $this->load->view('template/header');
        $this->load->view('penjadwalan/datapen',$data);
        $this->load->view('template/footer');
    }


  function update($id_penjadwalan)
  {
      $data['ambil']=$this->m_penjadwalan->GetId($id_penjadwalan);
      $data['hasil']=$this->m_penjadwalan->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('penjadwalan/v_edit',$data);
      $this->load->view('template/footer');
  }
  
  public function simpan_update()
  {
      $data = array(
          'id_departemen'=>$this->input->post('id_departemen'),
          'nama_kegiatan'=>$this->input->post('nama_kegiatan'),
          'tanggal_kegiatan'=>$this->input->post('tanggal_kegiatan'),
          'keterangan'=>$this->input->post('keterangan')
      );
  $id_penjadwalan = $this->input->post('id_penjadwalan');
  $this->db->where('id_penjadwalan', $id_penjadwalan);
      $this->db->update('tbl_penjadwalan',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil di Update
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
      redirect('penjadwalan');
  }



public function tambah()
  {
    $data['hasil']=$this->m_penjadwalan->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('penjadwalan/formpen',$data);
      $this->load->view('template/footer');
  }

  function tambah_aksi(){
      $id_departemen = $this->input->post('id_departemen');
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
      $keterangan = $this->input->post('keterangan');

      $data = array(
          'id_departemen' => $id_departemen,
          'nama_kegiatan' => $nama_kegiatan,
          'tanggal_kegiatan' => $tanggal_kegiatan,
          'keterangan' => $keterangan
          );
      $this->m_penjadwalan->input_data($data,'tbl_penjadwalan');
      $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil di tambah
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
      redirect('http://localhost/arsipCI/penjadwalan/index');
  }

function hapus($id_penjadwalan)
  {
      $this->m_penjadwalan->HapusPenjadwalan($id_penjadwalan);
      $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Data berhasil di hapus
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>');
      redirect('penjadwalan');
  }
    


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