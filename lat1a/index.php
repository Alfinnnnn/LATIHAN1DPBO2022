<?php
include "daftarmahasiswa.php";

$daftarMahasiswa1 = new daftarMahasiswa();
$daftarMahasiswa1->setNIM(2001521);
$daftarMahasiswa1->setnama("Surya Alfin M");
$daftarMahasiswa1->setjKelamin("Laki-Laki");
$daftarMahasiswa1->setprodi("Ilkom C1");
$daftarMahasiswa1->setsemester(4);

$daftarMahasiswa2 = new daftarMahasiswa(2001522, "Alfinn Suryaa", "Laki-Laki", "Ilkom C1", 4);
echo "Nim      : ". $daftarMahasiswa1->getNIM() . "<br/>";
echo "Nama     : ". $daftarMahasiswa1->getnama() . "<br/>";
echo "Jenis Kelamin : ". $daftarMahasiswa1->getjKelamin() . "<br/>";
echo "Prodi    : ". $daftarMahasiswa1->getprodi() . "<br/>";
echo "Semester : ". $daftarMahasiswa1->getsemester() . "<br/>";

echo "<br/>";

echo "Nim      : ". $daftarMahasiswa2->getNIM() . "<br/>";
echo "Nama     : ". $daftarMahasiswa2->getnama() . "<br/>";
echo "Jenis Kelamin : ". $daftarMahasiswa2->getjKelamin() . "<br/>";
echo "Prodi    : ". $daftarMahasiswa2->getprodi() . "<br/>";
echo "Semester : ". $daftarMahasiswa2->getsemester() . "<br/>";

?>