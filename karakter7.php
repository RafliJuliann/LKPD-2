<?php
//untuk memotong teks yang diberikan jika panjangnya melebihi yg d tentkan
function shortenText($text, $maxLength = 50) {
   //strlen menghitung panjang dari teks yang diberikan dalam parameter
    if (strlen($text) > $maxLength) {
        //untuk memotong teks dari posisi awal hingga yang di tentukan 
        return substr($text, 0, $maxLength) . '.....';
    }
    
    return $text;
}

$kalimat = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam voluptas repellendus at ea nam provident. Labore saepe obcaecati rerum recusandae sequi delectus quisquam unde ab quidem? Vel, pariatur debitis?";
$hasil = shortenText($kalimat);

echo "<b>Kalimat :</b>", $hasil;
?>