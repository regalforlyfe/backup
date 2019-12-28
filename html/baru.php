<?php
    require_once('Mahasiswa.php');
    //include 'file';
    //require 'file';

    $saya = new Mahasiswa();
    $saya->setNama("Ahmad");
    echo $saya->getNama();