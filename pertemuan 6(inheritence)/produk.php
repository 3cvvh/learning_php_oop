<?php 

class produk{
public $judul,
        $penulis,
        $penerbit,
        $harga ,
        $waktu,
        $halaman,
        $tipe;
public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0, $halaman = '0halaman', $waktu = '0jam')
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga  = $harga;
    $this->halaman = $halaman;
    $this->waktu = $waktu;
}

public function getlebel(){
    return "$this->penerbit, $this->penulis ";
}

 
}
class buku extends produk{
public function info_buku(){
    $string = "{$this->judul} {$this->getlebel()} (Rp. {$this->harga}) - {$this->halaman} .  halaman";
    return $string;
}
}
class game extends produk{
 public function game(){
    $string = "{$this->judul} {$this->getlebel()} (Rp. {$this->harga}) ~ {$this->waktu} . jam";
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
$komik = new buku("nura", "hiroshi shibashi","pt gramedia",5000,100);

$game = new game("bully","rockstar","rockstar",10000,null,30);





echo'<br>';
echo $komik->info_buku();
echo'<br>';
echo $game->game();