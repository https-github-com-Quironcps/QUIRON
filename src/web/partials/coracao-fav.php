<?php 
include ('../server/PDO/situacao.php');
?>

<div class="div-coracao" onclick="javacript:window.location.href = '../server/ativarFavorito.php?vaga=<?php echo $Vagas['Idv'];?>&condfav=<?php echo $Fav['CondFav'];?>&idProf=<?php echo $user_id?>'">
    <span id="coracaovazio <?php echo $Vagas['Idv']; ?>" 
    onclick="trocarCoracao(<?php echo $Vagas['Idv']; ?>)" 
    class="bi bi-heart coracaovazio"></span>
</div>