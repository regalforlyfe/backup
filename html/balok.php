<?php

    class Balok {
        private $panjang, $lebar, $tinggi;
    
        function __construct(){

        }

        function setPanjang($bil){
            $this->panjang = $bil;
        }
    
        function setLebar($bil){
            $this->lebar = $bil;
        }

        function setTinggi($bil){
            $this->tinggi = $bil;
        }
    
        function getPanjang(){
            return $this->panjang;
        }
    
        function getLebar(){
            return $this->lebar;
        }

        function getTinggi(){
            return $this->tinggi;
        }

        function luasPermukaan(){
            return (2*($this->panjang*$this->lebar+$this->panjang*$this->tinggi+$this->lebar*$this->tinggi));
        }

        function volume(){
            return ($this->panjang*$this->lebar*$this->tinggi);
        }

        function __toString(){
            return "Sebuah Balok memiliki panjang $this->panjang, lebar $this->lebar, dan tinggi $this->tinggi sehingga mempunya luas ".$this->luasPermukaan()."
             dan volume ".$this->volume();
        }

    }

    $hitung = new Balok();
    $hitung->setPanjang("10");
    $hitung->setLebar("20");
    $hitung->setTinggi("5");
    echo $hitung;
