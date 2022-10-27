function AparecerVaga(id){

    let nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);

    aside.style.cssText = 'display:block';
    nomeVaga.style.cssText = 'display:none';
    
}

function voltarPVaga(id){
    let nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);

    aside.style.cssText = 'display: none;';
    nomeVaga.style.cssText = 'display: block';
}

function trocarCoracao(id){
    let coracaovazio = document.getElementById("coracaovazio "+id);

    if(coracaovazio.className == 'bi bi-heart-fill coracaovazio'){
        coracaovazio.classList = 'bi bi-heart coracaovazio';
    }

    else{
        coracaovazio.classList = 'bi bi-heart-fill coracaovazio';
    }
}

function ativarBancoFavorito(id){
    console.log(id);
}