<?php 
//static keyword adalah keyword yang digunakan untuk mendeklarasikan properti atau method yang bersifat statis, artinya dapat diakses tanpa harus membuat objek dari kelas tersebut. Static juga dapat digunakan untuk mengakses properti dan method dari kelas induk.
//    public function __construct($judul ="tidak memiliki judul", $penulis = "tidak memiliki penulis", $penerbit = "tidak memiliki penerbit", $harga = 0,$waktu = 0)
//    {
//        parent::__construct($judul, $penulis, $penerbit, $harga);
//        $this->waktu = $waktu;
//    }
//    public function getlebel(){
//        $string = "game:". parent::getlebel(). -"$this->waktu";
//        return $string;
//    }
// }
// $produk1 = new buku("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// $produk3 = new produk("satu", "dua", "tiga", 1000);
// $produk4 = new produk("empat", "lima", "enam", 2000);
// $produk5 = new produk("tujuh", "delapan", "sembilan", 3000);
// $produk6 = new produk("sepuluh", "sebelas", "duabelas", 4000);
// $produk7 = new produk("tiga belas", "empat belas", "lima belas", 5000);
// $produk8 = new produk("enam belas", "tujuh belas", "delapan belas", 6000);
class contoh{
    public static $nama = 1;
    public static function helo(){
        return "hello " .self::$nama++ ."kali <hr>";
    }
}
echo contoh::helo();
echo contoh::helo();
echo contoh::helo();
echo contoh::helo();
echo contoh::helo();
echo contoh::helo();

echo '<br>';
class contohstatic{
    public static $angka = 1;
    public function halo(){
        return "halo " . self::$angka++ . 'kali <br>';
    }
}
$contoh = new contohstatic;
echo $contoh->halo();
echo $contoh->halo();
echo $contoh->halo();
$contoh2 = new contohstatic;
echo $contoh2->halo();
echo $contoh2->halo();
echo $contoh2->halo();
?>