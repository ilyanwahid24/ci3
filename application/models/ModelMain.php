<?php
    class ModelMain extends CI_Model{
        public $nilai1, $nilai2, $hasil;

        public function addition($n1 = null, $n2 = null){
            $this->nilai1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = ($this->nilai1 + $this->nilai2);
            return $this->hasil;
        }
        public function substraction($n1 = null, $n2 = null){
            $this->nilai1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = ($this->nilai1 - $this->nilai2);
            return $this->hasil;
        }
        public function multiplication($n1 = null, $n2 = null){
            $this->nilai1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = ($this->nilai1 * $this->nilai2);
            return $this->hasil;
        }
        public function division($n1 = null, $n2 = null){
            $this->nilai1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = ($this->nilai1 / $this->nilai2);
            return $this->hasil;
        }
    }