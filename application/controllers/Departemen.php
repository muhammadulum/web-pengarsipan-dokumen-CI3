<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_departemen');
    }

    public function index()
    {
        $data['hasil']=$this->m_departemen->tampil_data();
        $this->load->view('template/header');
        $this->load->view('departemen/departemen',$data);
        $this->load->view('template/footer');
    }

    function update($id_departemen)
    {
        $data['ambil']=$this->m_departemen->GetId($id_departemen);
        $this->load->view('template/header');
        $this->load->view('departemen/v_edit',$data);
        $this->load->view('template/footer');
	}
	
    public function simpan_update()
    {
        $data = array(
            'nama_departemen'=>$this->input->post('nama_departemen')
		);
	$id_departemen = $this->input->post('id_departemen');
	$this->db->where('id_departemen', $id_departemen);
        $this->db->update('tbl_departemen',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di Update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('departemen');
	}



  public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('inventaris/formin');
        $this->load->view('template/footer');
    }

    function tambah_aksi(){
		$nama_departemen = $this->input->post('nama_departemen');
 
		$data = array(
			'nama_departemen' => $nama_departemen
      );
      
      $cek = $this->db->query("SELECT * FROM tbl_departemen where nama_departemen='".$this->input->post('nama_departemen')."'");
      if ($cek->num_rows()>=1){
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Gagal Di tambah di tambah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
		redirect('departemen');
     }else{
      
        $this->m_departemen->input_data($data,'tbl_departemen');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di tambah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
		redirect('departemen');

     }


        
	}

  function hapus($id_departemen)
    {
        $this->m_departemen->HapusDepartemen($id_departemen);
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
         Data berhasil di hapus
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>');
        redirect('departemen');
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