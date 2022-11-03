function AparecerVaga(id){
    var nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);
    var table = document.getElementById("table1 "+id);

    nomeVaga.style.cssText = 'display:none;';
    aside.style.cssText = 'display:inline;';
    table.style.cssText = 'height:450px; cursor:auto;';
}

function voltarPVaga(id){
    var nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);
    var table = document.getElementById("table1 "+id);

    nomeVaga.style.cssText = 'display:flex;';
    aside.style.cssText = 'display:none;';
    table.style.cssText = 'height:130px; ';
}

