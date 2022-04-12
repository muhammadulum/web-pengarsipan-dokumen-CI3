<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_user extends CI_Controller 
{

    public function index()
    {
        // $this->load->view('template_user/header');
        
        // $this->load->view('template_user/header');

        $data['hasil'] = $this->m_inventaris->tampil_data();
        if( $this->input->post('keyword') ) {
            $data['hasil'] = $this->m_inventaris->cariDataMahasiswa();
        }
        $this->load->view('user/inventaris_user',$data);
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