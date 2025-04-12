<?php 

class produk{
public $judul,
        $penulis,
        $penerbit,
        $harga ;
public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga  = $harga;
}

public function getlebel(){
    return "$this->penerbit, $this->penulis ";
}
}
class cetak_info{
    public function cetak(produk $produk){
        $string = "{$produk->judul} {$produk->getlebel()} {$produk->getlebel()} (Rp. {$produk->harga})";
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
$produk1 = new produk("nura", "hiroshi shibashi","pt gramedia",5000);


$produk2 = new produk("bully","rockstar","rockstar","10000");



echo 'komik:' . $produk1->getlebel();
echo '<br>';
echo 'game:' . $produk2->getlebel();
echo'<br>';
$info_cetak = new cetak_info();
echo $info_cetak->cetak($produk1);
echo'<br>';
echo $info_cetak->cetak($produk2);