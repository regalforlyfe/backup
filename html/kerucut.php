<?php

class Kerucut {
    private $jari, $tinggi;
    private $phi = 3.14;

    function __construct(){

    }

    function setJari($bil){
        $this->jari = $bil;
    }

    function setTinggi($bil){
        $this->tinggi = $bil;
    }

    function getJari(){
        return $this->panjang;
    }

    function getPhi(){
        return $this->phi;
    }

    function getTinggi(){
        return $this->tinggi;
    }

    function luasPermukaan(){
        $s=sqrt($this->jari*$this->jari+$this->tinggi*$this->tinggi);
        return $this->phi*$this->jari*($this->jari+$s);
    }

    function volume(){
        return 1/3*$this->phi*$this->jari*$this->jari*$this->tinggi;
    }

    function __toString(){
        return "Jari - jari : $this->jari tinggi : $this->tinggi luas permukaan :".$this->luasPermukaan()."volume : ".$this->volume();
    }

}

$hitung = new Kerucut();
    $hitung->setJari("7");
    $hitung->setTinggi("10");
    echo $hitung;