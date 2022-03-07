<?php
    $kata = $_POST['kata'];
    $daftar_kata=array("jus", "ikut", "kurs", "jitu", "kisut", "pig", "pukis", "fit", "equip", "git");
    
    if (in_array($kata, $daftar_kata)){
        echo "true";
    }
    else
    {
        echo "false";
    }
?>