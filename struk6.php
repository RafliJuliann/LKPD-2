<?php
$barang = [
    [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 1,
    ],
    [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 3,
    ],
    [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 4,
    ],
];
$totalharga = 0;
echo "Daftar belanjaan :";
echo "<ol>";
foreach ($barang as $item) {
    $subTot = $item['harga'] * $item['jumlahBeli'];
    $totalharga += $subTot;//menambahkan subtotal dari setiap barang ke total harga
    $formatSub = number_format($subTot, 0, ',', '.');//buat memformat angka agar lebih mudah dibaca seperti . atau , pada angka ribuan atau lebih
    echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : {$formatSub}</li>";
}
//digunakan untuk menutup daftar berurutan
echo "</ol>";
$formatTot = number_format($totalharga, 0, ',', '.');
echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}\n";
?>