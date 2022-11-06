function chamaDiv(){
    var aside = document.getElementById("div_div");

    aside.style.cssText = 'transform: translateX(0vw);';
}


function sairDIVTela(){
    var aside = document.getElementById("div_div");

    aside.style.cssText = 'transform: translateX(100vw);';
}

// CHAMA IMG
function chamaDiv2(resultado){
    var divTudo = document.getElementById("div-tudo-img");
    var ImagemDiv = document.getElementById("imagem_div_fora");
    var vazio = '';

    divTudo.style.cssText = 'transform: translateX(0vw); display: block;';

    if (resultado != vazio){
        ImagemDiv.src = resultado;
    }
    else{
        ImagemDiv.src = 'images/fundo.jpg';
    }
}


function sairDIVTela2(){
    var divTudo = document.getElementById("div-tudo-img");

    divTudo.style.cssText = 'transform: translateX(100vw); display: none;';
}

// CHAMA EXCLUIR
function chamaDivEx(){
    var aside = document.getElementById("div_d");

    aside.style.cssText = 'transform: translateX(0vw); display:block;';
}


function sairDIVTelaEx(){
    var aside = document.getElementById("div_d");

    aside.style.cssText = 'display:none;';
}
