<div class="div-coracao">
    <a href="../server/ativarFavorito.php?user=<?php echo $user_id; ?>&cond=<?php echo $condicao_fav; ?>&vaga=<?php echo $id_vaga_fav; ?>">
        <span id="coracaovazio <?php echo $Vagas['Idv']; ?>" onclick="trocarCoracao(<?php echo $Vagas['Idv']; ?>)" class="bi bi-heart<?php if ($condicao_fav == 1) {
                                                                                                                                            echo '-fill';
                                                                                                                                        } else {
                                                                                                                                        } ?> coracaovazio"></span></a>
</div>