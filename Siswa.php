<?php

class Siswa {
    private $nama;
    private $alamat;
    private $nis;

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($name) 
    {
        $this->nama = $name;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
    }

    public function getNis()
    {
        return $this->nis;
    }
}

if ($_POST)
{
    $name = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];

    $siswa = new Siswa();
    $siswa->setNama($name);
    $siswa->setNis($nis);
    $siswa->setAlamat($alamat);

    echo "Nama: ". $siswa->getNama() . "<br />";
    echo "Nis: ". $siswa->getNis() . "<br />";
    echo "Alamat: ". $siswa->getAlamat() . "<br />";
}

?>







