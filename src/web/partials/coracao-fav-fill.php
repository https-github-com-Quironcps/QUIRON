<div class="div-coracao" onclick="<?php ativarFavorito($Vagas['Idv'], $Fav['CondFav']); ?>">
    <span id="coracaovazio <?php echo $Vagas['Idv']; ?>" 
    onclick="trocarCoracao(<?php echo $Vagas['Idv']; ?>)" 
    class="bi bi-heart-fill coracaovazio"></span>
</div>