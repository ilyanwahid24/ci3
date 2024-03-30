<?php
    class ModelRata extends CI_Model{
        public $nilai1, $nilai2, $hasil;

        public function rata($n1 = null, $n2 = null){
            $this->nilai1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = ($this->nilai1 + $this->nilai2) / 2;
            return $this->hasil;
        }
    }