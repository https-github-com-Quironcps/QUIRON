<?php

include('TemaSistema.php');

if (count($resultados)) {
    foreach ($resultados as $Resultado) {
echo $Resultado['MODO'];
    }}
