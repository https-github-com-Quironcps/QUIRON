<?php
include('../server/mandaTema.php');

if (isset($_GET['tema']) == 'andamento') {

    if (count($tema)) {
        foreach ($tema as $Tema) {
            $modo = $Tema['MODO'];
            $id_s = $Tema['ID'];
            $FK_s = $Tema['FK'];
        }
    }

    global $logo_nav;

    if ($tipo_user == 'escola') {
        if ($modo == 1) {
            $modoa = 0;
        } else {
            $modoa = 1;
        }

        $stq = $pdo->prepare("UPDATE `tb_sistema` SET
                                  `TB_SISTEMA_MODO` = :MODO
                                  WHERE TB_SISTEMA_ID LIKE :ID_SISTEMA AND TB_INSTITUICAO_FK LIKE :ID_ESCOLA");

        $stq->bindParam(':MODO', $modoa, PDO::PARAM_STR);
        $stq->bindParam(':ID_SISTEMA', $id_s, PDO::PARAM_STR);
        $stq->bindParam(':ID_ESCOLA', $FK_s, PDO::PARAM_STR);
        $stq->execute();

        $tema = $stq->fetchAll(PDO::FETCH_ASSOC);

        $var = "<script>javascript:history.back(-2)</script>";
        echo $var;
    } elseif ($tipo_user == 'professor') {
        if ($modo == 1) {
            $modoa = 0;
        } else {
            $modoa = 1;
        }

        $stq = $pdo->prepare("UPDATE `tb_sistema` SET
                                  `TB_SISTEMA_MODO` = :MODO
                                  WHERE TB_SISTEMA_ID LIKE :ID_SISTEMA AND TB_PROFESSOR_FK LIKE :ID_PROFESSOR");

        $stq->bindParam(':MODO', $modoa, PDO::PARAM_STR);
        $stq->bindParam(':ID_SISTEMA', $id_s, PDO::PARAM_STR);
        $stq->bindParam(':ID_PROFESSOR', $FK_s, PDO::PARAM_STR);
        $stq->execute();

        $tema = $stq->fetchAll(PDO::FETCH_ASSOC);

        $var = "<script>javascript:history.back(-2)</script>";
        echo $var;
    }
}
