<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Email','trim|required');
        
        if ($this->form_validation->run()== false) {
        
        $data['title']= 'WPU User Login';
        $this->load->view('template_auth/footer_auth',$data);
        $this->load->view('auth/login');
        $this->load->view('template_auth/header_auth');
        }else {
            //validasi sukses

            $this->_login();
        }
        
        
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['email'=>$email])->row_array();
         //jika ada user
        if ($user) {
            //jika user aktif

            if ($user['is_active']== 1) {
                //cek passowrd

                if (password_verify($password,$user['password'])) {
                    $data =[
                        'email'=>$user['email'],
                        'role_id'=>$user['role_id']

                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id']==1){
                        redirect('admin');
                    }else {
                        redirect('user');
                    }
                }else {
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                    emial atau password salah silahkan Cek lagi</div>');
                redirect('auth');
                }


            }else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                 emial atau password salah silahkan Cek lagi!</div>');
                redirect('auth');
            }
          
        }else {
            //jika tidak ada
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Email Tidak terdaftar !</div>');
            redirect('auth');

        }

    }
    
    public function registration()

    {
       $this->form_validation->set_rules('name','Name','required|trim');
       $this->form_validation->set_rules('role_id','Role ID','required');
       $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]
       ',['is_unique' =>'email ini sudah ada']);
       $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
       $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

       $data['role'] = $this->m_regis->tampil_data();
        if( $this->form_validation->run()== false){
            $data['title']= 'WPU User Registration';
            $this->load->view('template_auth/footer_auth',$data);
            $this->load->view('auth/registration',$data);
            $this->load->view('template_auth/header_auth');    

        }else{
            $data = [
                'name' => htmlspecialchars ($this->input->post('name',true)),
                'email' => htmlspecialchars ($this->input->post('email',true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'),
                PASSWORD_DEFAULT),
                'role_id' =>$this->input->post('role_id',true),
                'is_active'=>1,
                'date_created'=> time()
            ];


            $this->db->insert('user',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Selamat akun sudah terdaftar ke sistem. Silahkan login!
          </div>');
            redirect('http://localhost/arsipCI/');


        }
        

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