<?php

class PersegiPanjang {
    private $panjang, $lebar;

    function __construcr(){

    }

    function setPanjang($bil){
        $this->panjang = $bil;
    }

    function setLebar($bil){
        $this->lebar = $bil;
    }

    function getPanjang(){
        return $this->panjang;
    }

    function getLebar(){
        return $this->lebar;
    }

    function getLuas(){
        return ($this->panjang*$this->lebar);
    }

    function __toString(){
        return "Persegi Panjang memiliki panjang $this->panjang dan lebar $this->lebar sehingga mempunyai Luas " .$this->getLuas();
    }

}

    $hitung = new PersegiPanjang();
    $hitung->setPanjang("10");
    $hitung->setLebar("20");
    echo $hitung;

