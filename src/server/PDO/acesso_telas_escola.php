<?php

include("situacao.php");

if ($user_situacao == true && $user_type == 'professor')
{
    header("location: ../web/./");
}

?>