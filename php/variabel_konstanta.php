
<?php 
  $angka1 = 10;
  $angka2 = 5;
  $hasil = $angka1 + $angka2;
  echo nl2br("Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. \n") ;
  

  $benar = true;
  $salah = false;

  echo nl2br("Variabel benar : $benar. Variabel salah: $salah \n")  ;

define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ". " ;

?>
