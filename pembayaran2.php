<?php
date_default_timezone_set('Asia/Jakarta');
function calculate_total_payment($total_hari) {
    $hari = date('l');
    
    $discount = 0;

    if ($hari === 'Monday') {
        $discount += 0.05;
    }
    
    if ($total_hari > 100000) {
        $discount += 0.07;
    }
    
    $totalpembayaran = $total_hari * (1 - $discount);
    
    return [//mendeklarasikan tipe pengembalian metode sebagai tipe array, lalu menggunakan pernyataan return untuk mengembalikan array
        'totalpembayaran$totalpembayaran' => $totalpembayaran,
        'discount' => $discount * 100,
        'hari$hari' => $hari
    ];
}

$total_hari = 130000;
$hasil = calculate_total_payment($total_hari);

echo "Hari Belanja: " . $hasil['hari$hari'] . "<br>";
echo "Total Pembelian: Rp " . number_format($total_hari, 0, ',', '.') . "<br>";//memastikan bahwa angka ditampilkan dengan format yang konsisten dan sesuai dengan kebutuhan pengguna atau standar yang diinginkan.
echo "Total yang Harus Dibayar: Rp " . number_format($hasil['totalpembayaran$totalpembayaran'], 0, ',', '.');
?>