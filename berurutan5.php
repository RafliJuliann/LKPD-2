<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
//menggabungkan satu atau lebih array menjadi satu array
$gabung = array_merge($bil1, $bil2);
//menghapus nilai duplikat dari array
$urut = array_unique($gabung);
//struktur data yang digunakan untuk menyimpan sekumpulan data dalam satu tempat
rsort($urut);

echo "Hasil : " . implode(", ", $urut);
?>