<?php 

class produk{
public $judul = 'judul',
        $penulis = 'penulis',
        $penerbit = 'penerbit',
        $harga = 0;

public function getlebel(){
    return "$this->judul $this->penulis";
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
$produk3 = new produk();
$produk3->judul = 'nura';
$produk3->penulis = 'hiroshi shiibashi';
$produk3->harga = '5000';
$produk3->penerbit = 'PT gramedia';

$produk4 = new produk();
$produk4->judul="bully";
$produk4->penulis="cerpecz";
$produk4->penerbit="rockstar";
$produk4->harga="2000000";

echo 'komik:' . $produk3->getlebel();
echo '<br>';
echo 'game:' . $produk4->getlebel();