<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

    public function index()
    {
   
        $this->load->view('template/header');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }

    // public function departemen()
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('departemen/departemen');
    //     $this->load->view('template/footer');

    // }

    // public function penjadwalan()

    // {
    //     $this->load->view('template/header');
    //     $this->load->view('penjadwalan/datapen');
    //     $this->load->view('template/footer');

    // }

    // public function inventaris()
    // {

    //     $this->load->view('template/header');
    //     $this->load->view('inventaris/datain');
    //     $this->load->view('template/footer');

    // }

    // #fungsi buat arsip

    // public function surat_masuk()
    
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('suratmasuk/data');
    //     $this->load->view('template/footer');
    // }

    // public function surat_keluar()
    
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('surat_keluar/datask');
    //     $this->load->view('template/footer');
    // }



    // public function surat_lpj()
    
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('arsip_lpj/datalpj');
    //     $this->load->view('template/footer');
    // }


    // public function surat_proposal()
    
    // {
    //     $this->load->view('template/header');
    //     $this->load->view('proposal/datapro');
    //     $this->load->view('template/footer');
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