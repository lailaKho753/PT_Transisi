<?php
function Countt($kata)
{
	$upper = 0;
	$lower = 0;
	$number = 0;
	$special = 0;
	for ($i = 0; $i < strlen($kata); $i++)
	{
		if ($kata[$i] >= 'A' &&
			$kata[$i] <= 'Z')
			$upper++;
		else if ($kata[$i] >= 'a' &&
				$kata[$i] <= 'z')
			$lower++;
		else if ($kata[$i]>= '0' &&
				$kata[$i]<= '9')
			$number++;
		else
			$special++;
    }
    echo "$kata mengandung $lower buah huruf kecil.";
}
$kata = $_POST['kata'];
Countt($kata);
?>
