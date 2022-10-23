<div class="totla">
    <div class="everybody">

    <i id="icon1" class="bi bi-arrow-left-short" onclick=""></i>
    <!-- <i id="icon1"  class="bi bi-x"></i> -->
       
        <div class="divlateral">

            <img class="img_etec" onerror="handleError(this)" src="<?php echo $Resultado['Foto']; ?>" alt="">
            
            <div class="icons">
                <!-- <div class="linha"></div> -->

                <!-- icon localização -->
                <div class="div-icon">                
                    <i id="icon" class="bi bi-geo-alt" onclick="alert('Endereço: <?php echo $Resultado['Endereco'].', '.$Resultado['EndNum'].' - '.$Resultado['Bairro'].' - '.$Resultado['CEP']?>')"></i><a class="info" href="">Endereço: <?php echo $Resultado['Endereco'].', '.$Resultado['EndNum'].' - '.$Resultado['Bairro'].' - '.$Resultado['CEP']?></a>

                </div>

                <!-- icon telefone -->
                <div class="div-icon">
                    <i id="icon" class="bi bi-phone" onclick="alert('<?php echo $Resultado['Telefone']; ?>')"></i><a class="info" href=""><?php echo $Resultado['Telefone']; ?></a>
                </div>
                
                <!-- icon link -->
                
                
                <!-- icon email -->
                <div class="div-icon">
                    <i id="icon" class="bi bi-envelope" onclick="alert('<?php echo $Resultado['Email']; ?>')" ></i><a class="info" href=""><?php echo $Resultado['Email']; ?></a> 
                </div>
            </div>

        </div><br>

        <div class="aside">

        <div class="linha1">
            <!-- descrição da vaga -->
            <div class="desc-vaga">
            <h6 class="title02">Professor para <?php echo $Vagas['Vaga'];?></h6>
             <h5 class="h5a"><?php echo $Vagas['VagaDesc'];?>
             </h5>
            </div>

            <!-- requisitos da vaga -->
            <div class="req-vaga">
            <h6 class="title02">Requisitos da Vaga</h6>
             <h5 class="h5a"><?php echo $Vagas['VagaReq'];?></h5>
            </div>
        </div>

        <div class="linha2">
            <!-- carga horária semanal -->
            <div class="desc-vaga">
            <h6 class="title02">Carga Horária</h6>
                <div class="carg-horaria"><h5 class="h5a"><?php echo $Vagas['VagaCarga']; ?></h5></div>
            </div>

             <!-- média salarial -->
            <div class="req-vaga">
            <h6 class="title02">Média salarial</h6>
                <div class="carg-horaria"><h5 class="h5a"><?php echo $Vagas['VagaFaixa']; ?></h5></div><br>
                <div>
                    <button class="botão-01" type="submit" href="#">Favoritar</button>
                    <span id="coracaovazio" class="bi bi-heart"></span>
                    <span id="coracaocheio" class="bi bi-heart-fill"></span>
                </div>
            </div>
        </div>
    
        </div>
    </div>
</div>