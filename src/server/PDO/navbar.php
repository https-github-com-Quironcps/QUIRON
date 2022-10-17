<?php

include("situacao.php");

if ($user_situacao == true){
    if ($user_type == 'professor') 
    {
        include("partials/header-professor.php");
        include("../server/PDO/acesso_telas_professor.php");
    }

    else if ($user_type == 'escola'){
        include("partials/header.php");
        include("../server/PDO/acesso_telas_escola.php");
    }

    else if ($user_type == ''){
        include("partials/header-inicio.php");
    }

    else {
        include("partials/header-inicio.php");
    }
}

else{
    include("partials/header-inicio.php");

}
?>