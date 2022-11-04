<?php

function verifyCPF($cpf)
{
    $cpf = "$cpf";
    if (strpos($cpf, "-") !== false) {
        $cpf = str_replace("-", "", $cpf);
    }
    if (strpos($cpf, ".") !== false) {
        $cpf = str_replace(".", "", $cpf);
    }
    $sum = 0;
    $cpf = str_split($cpf);
    $cpftrueverifier = array();
    $cpfnumbers = array_splice($cpf, 0, 9);
    $cpfdefault = array(10, 9, 8, 7, 6, 5, 4, 3, 2);
    for ($i = 0; $i <= 8; $i++) {
        $sum += $cpfnumbers[$i] * $cpfdefault[$i];
    }
    $sumresult = $sum % 11;
    if ($sumresult < 2) {
        $cpftrueverifier[0] = 0;
    } else {
        $cpftrueverifier[0] = 11 - $sumresult;
    }
    $sum = 0;
    $cpfdefault = array(11, 10, 9, 8, 7, 6, 5, 4, 3, 2);
    $cpfnumbers[9] = $cpftrueverifier[0];
    for ($i = 0; $i <= 9; $i++) {
        $sum += $cpfnumbers[$i] * $cpfdefault[$i];
    }
    $sumresult = $sum % 11;
    if ($sumresult < 2) {
        $cpftrueverifier[1] = 0;
    } else {
        $cpftrueverifier[1] = 11 - $sumresult;
    }
    $returner = false;
    if ($cpf == $cpftrueverifier) {
        $returner = true;
    }


    $cpfver = array_merge($cpfnumbers, $cpf);

    if (count(array_unique($cpfver)) == 1 || $cpfver == array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0)) 
    {
        $returner = false;
    }
    
    return $returner;
}
