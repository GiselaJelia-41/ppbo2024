<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling=2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $bola=(4/3) * 3.14 * pow($jari, 3);
    return $bola;
}

function volumeTabung($jari, $tinggi) : float {
    $tabung=3.14 * $jari * $jari * $tinggi;
    return $tabung;
}

function volumeKerucut($jari, $tinggi) : float {
    $kerucut=(1/3) * 3.14 * $jari * $jari * $tinggi;
    return $kerucut;
}

$jari = 45;
$tinggi = 98; 

$luas_tanah = luasLingkaran($jari);
echo "Luas tanah budi adalah {$luas_tanah}"."\n";

$keliling_lingkaran=kelilingLingkaran($jari);
echo "Keliling lingkaran adalah {$keliling_lingkaran}". "\n";

$volume_bola=volumeBola($jari);
echo "Volume bola adalah {$volume_bola}" . "\n";

$volume_tabung=volumeTabung($jari, $tinggi);
echo "Volume tabung adalah {$volume_tabung}" . "\n";

$volume_kerucut=volumeKerucut($jari, $tinggi);
echo "Volume kerucut adalah {$volume_kerucut}" . "\n";

?>
