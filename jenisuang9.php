<?php
function jenisKoin($jumlahKoin){
    $koin = [1000,500,200,];
    $hasil = [];

    foreach($koin as $k) {
        if($jumlahKoin >= $k) {
            $hasil[] = $k;
            //intdiv digunakan untuk mendapatkan hasil pembagian bulat
            $jumlahKoin -= intdiv($jumlahKoin, $k) * $k;
        }
    }

    return $hasil;
}

$jumlahKoin = 1750;
$jenisKoin = jenisKoin($jumlahKoin);

echo "jenis koin untuk Rp. $jumlahKoin";
foreach($jenisKoin as $nilai) {
    echo"<ul><li> Rp. $nilai </li></ul>";
}

?>