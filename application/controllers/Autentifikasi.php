<?php
    class Autentifikasi extends CI_Controller{
        public function index(){
            // Jika statusnya sudah loin, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
            if($this->session->userdata('email')){
                redirect('user');
            }
            $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email', [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required|trim', [
                'required' => 'Password Harus diisi'
            ]);
        }
    }