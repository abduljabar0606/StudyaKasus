<?php
$bilangan1 = 10;
$bilangan2 = 120;
$bilangan3 = 130;
$bilangan4 = 140;

$terbesar = $bilangan1;
if ($bilangan2 > $terbesar) {
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar) {
    $terbesar = $bilangan3;
}
if ($bilangan4 > $terbesar) {
    $terbesar = $bilangan4;
}


echo "Bilangan terbesar adalah: " . $terbesar;
?>