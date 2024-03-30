<?php
    class ControllerRata extends CI_Controller{
        public function index() {
            echo "Selamat Datang.. Selamat belajar Web Programming";
        }
        public function ratarata($n1, $n2){
            $this->load->model('ModelRata');

            $data['nilai1'] = $n1;
            $data['nilai2'] = $n2;
            $data['hasil'] = $this->ModelRata->rata($n1, $n2);

            $this->load->view('ViewRata', $data);
        }
    }
