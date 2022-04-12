<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_lpj extends CI_Controller 
{

    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_proposal');
    //     $this->load->library('upload');
    //     $this->load->helper(['url','form']);
    // }

    public function __construct()
    {
            parent::__construct();
            $this->load->model('m_surat_lpj');
            $this->load->helper(array('form', 'url'));
    }

    public function index()

    {
        // $data['hasil']=$this->m_penjadwalan->tampil_data();
        // // $this->load->model('m_penjadwalan');
        // // $query= $this->m_penjadwalan->get();
        // $this->load->view('template/header');
        // $this->load->view('penjadwalan/datapen',$data);
        // $this->load->view('template/footer');


        $data['hasil'] = $this->m_surat_lpj->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['hasil'] = $this->m_surat_lpj->cariDataMahasiswa();
        }
        $this->load->view('template/header');
        $this->load->view('arsip_lpj/datalpj',$data);
        $this->load->view('template/footer');
    }


  function update($id_lpj)
  {
      $data['ambil']=$this->m_surat_lpj->GetId($id_lpj);
      $data['hasil']=$this->m_surat_lpj->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('arsip_lpj/v_edit',$data);
      $this->load->view('template/footer');
  }
  
  public function simpan_update()
  {
      $data = array(
          'id_departemen'=>$this->input->post('id_departemen'),
          'nama_kegiatan'=>$this->input->post('nama_kegiatan')
          
      );

      $config['upload_path']          = './file/';
      $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
      
      $config['max_size']             = 4024;
      $config['max_width']            = 4024;
      $config['max_height']           = 4024;
  
      $this->load->library('upload', $config);
  
      if (!empty($_FILES['userfile']['name'])) {
        # code...
  
        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data gagal Di Update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('surat_lpj');
        }else {
          
          $file=$this->upload->data();
          $data=['file'=>$file['file_name'],
          'id_departemen'=>$this->input->post('id_departemen'),
          'nama_kegiatan'=>$this->input->post('nama_kegiatan')
        ];
        $id_lpj = $this->input->post('id_lpj');
        $this->db->where('id_lpj', $id_lpj);
        $this->db->update('tbl_lpj',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('surat_lpj');
        }
      }else {
        # code...
       
        $data = array(
          'id_departemen'=>$this->input->post('id_departemen'),
          'nama_kegiatan'=>$this->input->post('nama_kegiatan'),
          'file'=>$this->input->post('filelama')
                  
               );
           $id_lpj = $this->input->post('id_lpj');
           $this->db->where('id_lpj', $id_lpj);
               $this->db->update('tbl_lpj',$data);
               $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di Update
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
               redirect('surat_lpj');
      }
  }



public function tambah()
  {
    $data['hasil']=$this->m_surat_lpj->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('arsip_lpj/formlpj',$data);
      $this->load->view('template/footer');
  }


  public function uploadImage()
  {
    $config['upload_path']          = './file/';
    $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
    
    $config['max_size']             = 4024;
    $config['max_width']            = 4024;
    $config['max_height']           = 4024;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data gagal Di tambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('surat_lpj');
    }
    else
    {
      $file=$this->upload->data();
      $data=['file'=>$file['file_name'],
            'id_departemen'=>set_value('id_departemen'),
            'nama_kegiatan'=>set_value('nama_kegiatan')
    ];
    $this->m_proposal->input_data($data,'tbl_lpj');
    $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil di tambah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('surat_lpj');
    }

  }

  function tambah_aksi(){
      $id_departemen = $this->input->post('id_departemen');
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $file=$this->input->post('fileuser');
      $file=$this->uploadImage();
      $file=$this->uploadImage('file_name');
      
      $data = array(
          'id_departemen' => $this->input->post('id_departemen'),
          'nama_kegiatan' => $this->input->post('nama_kegiatan'),
          'file'=>$this->input->post('file_name')
          );
      $this->m_proposal->input_data($data,'tbl_proposal');
      $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil di tambah
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
      redirect('surat_lpj');
  }

function hapus($id_lpj)
  {
      $this->m_surat_lpj->HapusPenjadwalan($id_lpj);
      $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Data berhasil di hapus
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>');
      redirect('surat_lpj');
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