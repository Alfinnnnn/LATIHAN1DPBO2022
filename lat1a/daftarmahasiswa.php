<?php

class daftarMahasiswa
{
    private $NIM = 0;
    private $nama = "";
    private $jKelamin = "";
    private $prodi = "";
    private $semester = 0;

    public function __construct($NIM = 0, $nama = "", $jKelamin = "", $prodi = "", $semester = 0){
        $this->NIM = $NIM;
        $this->nama = $nama;
        $this->jKelamin = $jKelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNIM($NIM){
        $this->NIM = $NIM;
    }

    public function getNIM(){
        return $this->NIM;
    }

    public function setnama($nama){
        $this->nama = $nama;
    }

    public function getnama(){
        return $this->nama;
    }

    public function setjKelamin($jKelamin){
        $this->jKelamin = $jKelamin;
    }

    public function getjKelamin(){
        return $this->jKelamin;
    }


    public function setprodi($prodi){
        $this->prodi = $prodi;
    }

    public function getprodi(){
        return $this->prodi;
    }

    public function setsemester($semester){
        $this->semester = $semester;
    }

    public function getsemester(){
        return $this->semester;
    }



}
?>