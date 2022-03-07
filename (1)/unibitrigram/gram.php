<?php
$kata = $_POST['kata'];
$input = explode(' ', $kata);

$unigram = '';
 foreach ($input as $item) {
     $unigram .= $item.', ';
 }
 echo "Unigram: $unigram <br/>";
 
 $a=0;
 $bigram ='';
 foreach($input as $item) {
     if($a<1){
        $bigram .= $item.' ';
        $a++;
     }
     else{
        $bigram .= $item.', ';
        $a=0;
     }
 }
 echo "Bigram: $bigram <br/>";

 $b=0;
 $trigram ='';
 foreach($input as $item) {
     if($b<2){
        $trigram .= $item.' ';
        $b++;
     }
     else{
        $trigram .= $item.', ';
        $b=0;
     }
 }
 echo "Trigram: $trigram <br/>";
?>