<?php 

class produk{
public $judul,
        $penulis,
        $penerbit,
        $harga ,
        $waktu,
        $halaman,
        $tipe;
public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0, $halaman = '0halaman', $waktu = '0jam', $tipe="reyka ajg")
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga  = $harga;
    $this->halaman = $halaman;
    $this->waktu = $waktu;
    $this->tipe = $tipe;
}

public function getlebel(){
    return "$this->penerbit, $this->penulis ";
}

    public function cetak(){
        $string = "{$this->judul} {$this->getlebel()} (Rp. {$this->harga})";
        if($this->tipe == "komik"){
        $string .= "-{$this->halaman} ";
        }elseif($this->tipe == "game"){
            $string .= "~{$this->waktu}";
        }
        return $string;
    }
}
// $produk1 = new produk();
// $produk1->judul = 'naruto';
// var_dump($produk1);
// $produk2 = new produk();
// $produk2->judul = "doki doki leteratul";
// var_dump($produk2->judul);
// //walaupun property jawa tidak ada tetapi masih tetap di cetak
// $produk3 = new produk();
// $produk3->jawa = 'jawa jawa';
// var_dump($produk3);
$produk1 = new produk("nura", "hiroshi shibashi","pt gramedia",5000,'100halaman', "", "komik");

$produk2 = new produk("bully","rockstar","rockstar",10000, "", "10jam" ,"game");





echo'<br>';
echo $produk1->cetak();
echo'<br>';
echo $produk2->cetak();