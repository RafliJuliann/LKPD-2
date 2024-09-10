<?php
function cekJawaban($nama, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;
//untuk mencocokkan jawaban siswa dengan kunci jawaban yang benar pada posisi yang sama
    foreach ($jawabanSiswa as $index => $jawaban) {
        if ($jawaban === $jawabanBenar[$index]) {
            //Jika jawaban siswa benar maka variabel $jumlahBenar ditambah 1. atau increment
            $jumlahBenar++;
        }
    }
//count digunakan untuk menghitung jumlah dalam array $jawabanBenar. Ini menunjukkan total soal yang harus dijawab
    $jumlahSalah = count($jawabanBenar) - $jumlahBenar;

    echo "Nama : $nama";
    echo "<br>" ;
    echo "Jumlah Jawaban Benar : $jumlahBenar";
    echo "<br>" ;
    echo "Jumlah Jawaban Salah : $jumlahSalah";
}

$namaSiswa = "Putri";
$jawabanSiswa = ['A','A','C','C','A','A','E','A','C','E'];
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E'];

cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>