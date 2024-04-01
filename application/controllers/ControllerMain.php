<?php
    class ControllerMain extends CI_Controller{
        public function index() {
            // echo "Selamat Datang.. Selamat belajar Web Programming";
            $operation_list = ['addition', 'substraction', 'multiplication', 'division' ];
            $data['ops_list'] = $operation_list;
            $this->load->view('ViewHome', $data);
        }
        public function operation($n1, $n2, $ops){
            $this->load->model('ModelMain');

            $data['nilai1'] = $n1;
            $data['nilai2'] = $n2;
            $data['hasil'] = $this->ModelMain->$ops($n1, $n2);

            $this->load->view('ViewResult', $data);
        }
        public function test(){
            $this->load->view('Test');
        }
    }
