<?php
$totalBelanja = 220000;
$jumlahUang = 250000;

function hitungKembalian($totalBelanja, $jumlahUang)
{
  $uangKembalian = array(50000, 20000, 10000, 5000);
  $jumlahLembarUang = 0;
  $kembalian = $jumlahUang - $totalBelanja;
  if ($totalBelanja >= 200000) {
    $kembalian += $totalBelanja * 10 / 100;
  }
  
  for ($i=0; $i < sizeof($uangKembalian); $i++) {
    if($kembalian < 5000) {
        echo $kembalian." Disumbangkan karena tidak ada pecahan dibawah 5000 \n";
        break;
    }
    
    $jumlahLembarUang = floor($kembalian / $uangKembalian[$i]);
    if ($jumlahLembarUang > 0) {
      $kembalian = $kembalian - ($uangKembalian[$i] * $jumlahLembarUang);
      echo $jumlahLembarUang." x ".$uangKembalian[$i]." \n";
    }
  }
}
hitungKembalian($totalBelanja, $jumlahUang);
?>