<?php
$kata = $_POST['kata'];
$array = str_split($kata);

$h1 = $array[0];
$h2 = $array[1];
$h3 = $array[2];
$h4 = $array[3];
$h5 = $array[4];
$h6 = $array[5];

$alphabet = range('A', 'Z');
$afterconv_h1 = array_search($h1, $alphabet);
$afterconv_h2 = array_search($h2, $alphabet);
$afterconv_h3 = array_search($h3, $alphabet);
$afterconv_h4 = array_search($h4, $alphabet);
$afterconv_h5 = array_search($h5, $alphabet);
$afterconv_h6 = array_search($h6, $alphabet);

$enc_h1= $afterconv_h1+1;
$enc_h2= $afterconv_h2-2;
$enc_h3= $afterconv_h3+3;
$enc_h4= $afterconv_h4-4;
$enc_h5= $afterconv_h5+5;
$enc_h6= $afterconv_h6-6;

$alpha = array('A','B','C','D','E','F','G','H','I','J','K', 'L','M','N','O','P','Q','R','S','T','U','V','W','X ','Y','Z');

echo $alpha[$enc_h1].=$alpha[$enc_h2].=$alpha[$enc_h3].=$alpha[$enc_h4].=$alpha[$enc_h5].=$alpha[$enc_h6];
?>