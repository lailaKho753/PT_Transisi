<?php 
$a = 8; 
$b = 8;
$black= array (1,2,5,7,10,11,13,14,17,19,22,23,25,26,29,31,34,35,37,38,41,43,46,47,49,50,53,55,58,59,61,62);
echo '<table border="1px" width="100%" height="100%">';
  for($i = 1; $i <= $b; $i++){
  echo'<tr>';
    for($j = (($i-1) * $a)+1; $j <= ($i * $a); $j++){ 
      if(in_array($j,$black)){
        echo'<th bgcolor="black" style="color:white;">'.$j.'</th>';
      }else{
	      echo'<th bgcolor="white">'.$j.'</th>';
      }
    }
    
  echo'</tr>';
  } 
echo'</table>';
?>


