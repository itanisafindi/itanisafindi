<?php

class pengguna 
{
    private $nama;
    private $email;
    private $password;

    public function __construct($nama, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;  
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmaiL()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

class post 
{
    private $pengguna;
    private $tanggal;
    private $konten;

    public function __construct(pengguna $pengguna, $konten)
    {
        $this->pengguna = $pengguna;
        $this->tanggal = date('Y-m-d H:i:s');
        $this->konten = $konten;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function getKonten($konten)
    {
        $this->konten = $konten;
    }
}

// contoh penggunaan
$pengguna1 = new pengguna('John Done', 'john.doe@example.com', 'password123');

$post1 = new post($pengguna1, 'Ini adalah konten post pertama. ');
$post2 = new post($pengguna1, 'Ini adalah konten post kedua.');

echo "Nama Pengguna: " . $pengguna1->getNama() . PHP_EOL;
echo "Email Pengguna: " . $pengguna1->getEmaiL() . PHP_EOL;

$post1->setKonten('Konten post pertama telah diubah. ');
echo "Konten post 1 setelah diubah: " . $post1->getkonten() . PHP_EOL;

?>