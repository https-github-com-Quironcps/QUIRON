function FavV(idvaga, situFav){
    console.log(idvaga);
    $.ajax({
        url: '../server/favoritos.php',
        method: 'GET',
        data: {
            vaga: idvaga, 
            situacao: situFav
        }
    });
}