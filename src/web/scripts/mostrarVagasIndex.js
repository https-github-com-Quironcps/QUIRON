function AparecerVaga(id){
    var nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);
    var table = document.getElementById("table1 "+id);

    aside.style.cssText = 'display:inline;';
    nomeVaga.style.cssText = 'display:none;';
    table.style.cssText = 'height:450px; width:94%; cursor:auto;';
}

function voltarPVaga2(id){
    var nomeVaga = document.getElementById("nome-vaga "+id);
    var aside = document.getElementById("aside-vaga "+id);
    var table = document.getElementById("table1 "+id);

    aside.style.cssText = 'display:none;';
    nomeVaga.style.cssText = 'display:block;';
    table.style.cssText = 'height:130px; width:42%;';
}

