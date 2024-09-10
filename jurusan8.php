<?php
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
//array_map digunakan untuk menerapkan fungsi tertentu ke setiap elemen array
// strtoupper digunakan untuk mengonversi setiap elemen array menjadi huruf besar
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
print_r($uniqueJurusan);
// mencetak informasi tentang suatu variabel dengan cara yang lebih mudah dibaca manusia
?>