<?php
//conbstant adalah keyword yang digunakan untuk mendeklarasikan sebuah konstanta, yaitu nilai yang tidak dapat diubah setelah dideklarasikan. Konstanta biasanya digunakan untuk menyimpan nilai yang bersifat tetap atau tidak berubah, seperti nama perusahaan, alamat, atau nilai-nilai penting lainnya. Konstanta juga dapat digunakan untuk menyimpan nilai yang bersifat global, sehingga dapat diakses dari mana saja dalam program.
define('NAMA', 'XYaxl');
echo NAMA;
echo '<br>';
const UMUR = 17;
echo UMUR;
echo '<br>';
//perbedaan dari kedua cara diatas adalah kalo define tidak bisa disimpan didalam class kalo const bisa
class asu{
    const NAMA = 'nadeshiko';
}
echo asu::NAMA;
function XYAL($nama,){
    return __FUNCTION__;
    "
    $nama";
}
echo XYAL("aqil");
?>