<?php
include('../server/PDO/situacao.php');
$condic_fav = $Fav['CondFav'];
$idvga = $Vagas['Idv'];

?>

<div class="div-coracao" onclick="javascript:abc(<?php echo $user_id; ?>,<?php echo $condic_fav; ?>,<?php echo $idvga; ?>)">
    <span id="coracaovazio <?php echo $Vagas['Idv']; ?>" onclick="trocarCoracao(<?php echo $Vagas['Idv']; ?>)" class="bi bi-heart coracaovazio"></span>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
function abc(idp, cond, idv){
var id_professor = idp;
var cond_favorito = cond;
var id_vaga = idv;

$.ajax({
    url: '../server/ativarFavorito.php',
    type: 'POST',
    data: id_professor, cond_favorito, id_vaga,
    error: function (data) {
       return data;
   }
});}
</script>