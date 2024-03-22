<?php 

class Buku
{
    private $judul;
    private $pengarang;
    private $jumlahHalaman;
    private $statusPinjam;

    public function __construct($judul, $pengarang, $jumlahHalaman)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->jumlahHalaman =$jumlahHalaman;
        $this->statusPinjam = false;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPengarang()
    {
        return $this->pengarang;
    }

    public function getJumlahHalaman()
    {
        return $this->jumlahHalaman;
    }

    public function getStatusPinjam()
    {
        return $this->statusPinjam ? "sudah dipinjam" : "Belum dipinjam";
    }

    public function pinjam()
    {
        if ($this->statusPinjam) {
            echo "Buku sedang dipinjam";
            return;
        }

        $this->statusPinjam = true;
        echo "peminjaman berhasil";
    }

    public function kembalikan()
    {
        if (!$this->statusPinjam) {
            echo "Buku belum dipinjam";
            return;
        }

        $this->statusPinjam = false;
        echo "pengembalian berhasil";
        
    }
}

// contoh penggunaan
$buku1 = new Buku("Harry Potter", "J.K. Rowling", 300);
$buku2 = new Buku("Sherlock Holmes", "Arthur conan Doyle", 400);

echo "Buku 1: " . $buku1->getJuduL() . " oleh " . $buku1->getPengarang() . " (" . $buku1->getJumLahHaLaman() . " halaman, " . $buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJuduL() . " oleh " . $buku2->getPengarang() . " (" . $Buku2->getJumLahHaLaman() . " halaman, " . $buku2->getStatusPinjam() . ")" . PHP_EOL;

$buku1->pinjam();
$buku2->pinjam();

echo "setelah dipinjam: " . PHP_EOL;
echo "Buku 1: " . $buku1->getJuduL() . " (" . $buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJuduL() . " (" . $buku2->getStatusPinjam() . ")" . PHP_EOL;

$buku1->kembalikan();

echo "Setelah dikembalikan:" . PHP_EOL;
echo "Buku 1: " . $buku1->getJuduL() . " (" . $buku1->getJuduL() . $buku1->getstatusPinjam() . ")" . PHP_EOL;

?>