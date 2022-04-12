<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller 
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
            $this->load->model('m_surat_keluar');
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


        $data['hasil'] = $this->m_surat_keluar->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['hasil'] = $this->m_surat_keluar->cariDataMahasiswa();
        }
        $this->load->view('template/header');
        $this->load->view('surat_keluar/datask',$data);
        $this->load->view('template/footer');
    }


  function update($id_surat_keluar)
  {
      $data['ambil']=$this->m_surat_keluar->GetId($id_surat_keluar);
      $data['hasil']=$this->m_surat_keluar->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('surat_keluar/v_edit',$data);
      $this->load->view('template/footer');
  }
  
  public function simpan_update()
  {
      
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
                redirect('surat_masuk');
        }else {
          
          $file=$this->upload->data();
          $data=['file'=>$file['file_name'],
          'no_surat'=>set_value('no_surat'),
          'tanggal_surat'=>set_value('tanggal_surat'),
          'perihal'=>set_value('perihal'),
          'tujuan'=>set_value('tujuan')
        ];
        $id_surat_keluar = $this->input->post('id_surat_keluar');
        $this->db->where('id_surat_keluar', $id_surat_keluar);
        $this->db->update('tbl_surat_keluar',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil di update
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('surat_keluar');
        }
      }else {
        # code...
       
        $data = array(
          'no_surat'=>$this->input->post('no_surat'),
          'tanggal_surat'=>$this->input->post('tanggal_surat'),
          'perihal'=>$this->input->post('perihal'),
          'tujuan'=>$this->input->post('tujuan'),
          'file'=>$this->input->post('filelama')
                  
               );
           $id_surat_keluar = $this->input->post('id_surat_keluar');
           $this->db->where('id_surat_keluar', $id_surat_keluar);
               $this->db->update('tbl_surat_keluar',$data);
               $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di Update
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
               redirect('surat_keluar');
      }

  }



public function tambah()
  {
    $data['hasil']=$this->m_surat_keluar->tampil_departemen();
      $this->load->view('template/header');
      $this->load->view('surat_keluar/formke',$data);
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
            redirect('surat_keluar');
    }
    else
    {
      $file=$this->upload->data();
      $data=['file'=>$file['file_name'],
            'no_surat'=>set_value('no_surat'),
            'tanggal_surat'=>set_value('tanggal_surat'),
            'perihal'=>set_value('perihal'),
            'tujuan'=>set_value('tujuan')
            
    ];
    $this->m_surat_keluar->input_data($data,'tbl_surat_keluar');
    $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil di tambah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('surat_keluar');
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
      redirect('surat_proposal');
  }

function hapus($id_surat_keluar)
  {
      $this->m_surat_keluar->HapusPenjadwalan($id_surat_keluar);
      $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Data berhasil di hapus
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>');
      redirect('surat_keluar');
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