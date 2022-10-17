<?php

include("situacao.php");

if ($user_situacao == true && $user_type == 'escola')
{
    header("location: ../web/index.php");
}

?>