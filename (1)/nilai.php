<?php
$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
$total_nilai = array_sum($nilai);
$jumlah_nilai = count($nilai);
$rata2 = $total_nilai/$jumlah_nilai;
$min = min($nilai);
$max = max($nilai);
echo "Total nilai: $total_nilai <br />";
echo "Jumlah data: $jumlah_nilai <br />"; 
echo "Rata-rata nilai : $rata2 <br />";
echo "Nilai terendah: $min <br />";
echo "Nilai tertinggi: $max";
?>