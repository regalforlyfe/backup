<?php
class Mahasiswa{
    private $nama, $jurusan, $angkatan;

    function __construct(){

    }

    //setter dan getter
    function setNama($value){
        $this->nama = $value;
    }

    function setJurusan($value){
        $this->jurusan = $value;
    }

    function setAngkatan($value){
        $this->angkatan = $value;
    }

    function getNama(){
        return $this->nama;
    }

    function getJurusan(){
        return $this->jurusan;
    }

    function getAngkatan(){
        return $this->angkatan;
    }

    //function dan procedure

    function __toString(){
        return "Nama : $this->nama. Jurusan : $this->jurusan. Angkatan : $this->angkatan";
    }

}

//$saya = new Mahasiswa();
//$saya->setNama("Ahmad");
//echo $saya->getNama();
//echo "<hr/>";
//$saya->setJurusan("Komputer dan Sistem Informasi");
//echo $saya->getJurusan();
//echo "<hr/>";
//$saya->setAngkatan("17");
//echo $saya->getAngkatan();
//echo "<hr/>";

?>