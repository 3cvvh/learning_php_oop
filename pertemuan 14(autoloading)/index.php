<?php
require"autoload.php";

$produk1 = new buku("nura", "hiroshi shibashi", "pt gramedia", 5000, 100);

$produk2 = new game("bully","rockstar","rockstar",10000,30);
 $cetak = new cetak_info();
 $cetak->tambah($produk1);
$cetak->tambah($produk2);
echo $cetak->cetak();
