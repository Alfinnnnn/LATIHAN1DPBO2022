<?php

include "tim.php";

    $tim1 = new timsepakbola();
    $tim1->setnamaTim("PERSIB");
    $tim1->setnegaraAsal("INDONESIA");
    $tim1->settahunBerdiri(1933);
    $tim1->setdaftarPemain("1. Muhammad Natshir;
                                  2. Nick Kuipers;
                                  3. Ardi Idrus");
    
    $tim2 = new timsepakbola("PSIS", "INDONESIA", 1932, "1. Wallace Costa;
                                  2. Wahyu Prasetyo;
                                  3. Pratama Arhan");

    echo "DAFTAR TIM SEPAKBOLA" . "<br/>";

    echo "<br/>";

    echo "Nama Tim        : ". $tim1->getnamaTim() . "<br/>";
    echo "Negara Asal     : ". $tim1->getnegaraAsal() . "<br/>";
    echo "Tahun didirikan : ". $tim1->gettahunBerdiri() . "<br/>";
    echo "Daftar Pemain   : ". $tim1->getdaftarPemain() . "<br/>";

    echo "<br/>";

    echo "Nama Tim        : ". $tim2->getnamaTim() . "<br/>";
    echo "Negara Asal     : ". $tim2->getnegaraAsal() . "<br/>";
    echo "Tahun didirikan : ". $tim2->gettahunBerdiri() . "<br/>";
    echo "Daftar Pemain   : ". $tim2->getdaftarPemain() . "<br/>";

?>