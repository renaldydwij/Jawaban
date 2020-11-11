<?php
$tanggal = new DateTime('1998-07-22');
$today = new DateTime('2020-05-01');
$y = $today->diff($tanggal)->y;
$m = $today->diff($tanggal)->m;
$d = $today->diff($tanggal)->d;
echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>