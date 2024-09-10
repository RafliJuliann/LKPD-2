<?php

$hbd = "Selamat Ulang Tahun yang ke-17!!!";

if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $hbd, $srt)) {
    echo "Teks : $hbd";
    echo "<br>";
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);//digunakan untuk menggabungkan array string menjadi satu string .
} else {
    echo "Teks : $hbd";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>