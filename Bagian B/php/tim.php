<?php

class timsepakbola
{

    private $namaTim = "";
    private $negaraAsal = "";
    private $tahunBerdiri = 0;
    private $daftarPemain = "";

    public function __construct( $namaTim = "", $negaraAsal = "", $tahunBerdiri = 0, $daftarPemain = ""){
        $this->namaTim = $namaTim;
        $this->negaraAsal = $negaraAsal;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->daftarPemain = $daftarPemain;
    }

    public function setnamaTim($namaTim){
        $this->namaTim = $namaTim;
    }

    public function getnamaTim(){
        return $this->namaTim;
    }

    public function setnegaraAsal($negaraAsal){
        $this->negaraAsal = $negaraAsal;
    }

    public function getnegaraAsal(){
        return $this->negaraAsal;
    }

    public function settahunBerdiri($tahunBerdiri){
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function gettahunBerdiri(){
        return $this->tahunBerdiri;
    }

    public function setdaftarPemain($daftarPemain){
        $this->daftarPemain = $daftarPemain;
    }

    public function getdaftarPemain(){
        return $this->daftarPemain;
    }


    function __destruct(){

    }

}    


?>