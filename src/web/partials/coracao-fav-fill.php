<?php 
include ('../server/PDO/situacao.php');
?>
<div class="div-coracao" onclick="<?php trocaCoracao($user_id, $Fav['CondFav'], $Vagas['Idv']);?>">
    <span id="coracaovazio <?php echo $Vagas['Idv']; ?>" 
    onclick="trocarCoracao(<?php echo $Vagas['Idv']; ?>)" 
    class="bi bi-heart-fill coracaovazio"></span>
</div>

<?php
function trocaCoracao($idp, $condf, $idv){
    $id_professor = $idp;
    $cond_favorito = $condf;
    $id_vaga = $idv;

    if ($cond_favorito == 1){
        $troca_condicao = 0;
    }

    else{
        $troca_condicao = 1;
    }

    $query_vaga = "UPDATE TB_FAVORITO SET
        TB_FAVORITO_CONDICAO = :CONDICAO

        WHERE FK_VAGA LIKE :ID_VAGA AND FK_PROFESSOR LIKE :ID_PROFESSOR";

        $edita_fav = $pdo->prepare($query_vaga);

        $edita_fav->bindParam(':CONDICAO', $troca_condicao, PDO::PARAM_STR);
        $edita_fav->bindParam(':ID_PROFESSOR', $id_professor, PDO::PARAM_STR);
        $edita_fav->bindParam(':ID_VAGA', $id_vaga, PDO::PARAM_STR);

        $edita_fav->execute();

}

?>
