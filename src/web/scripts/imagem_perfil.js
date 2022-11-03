function readImageA() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview1").src = e.target.result;
            document.getElementById("texta_imagem1").value = e.target.result;
            document.getElementsById("aqui") = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

function readImageB() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview2").src = e.target.result;
            document.getElementById("texta_imagem2").value = e.target.result;
            document.getElementsById("aqui") = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

function readImageC() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview3").src = e.target.result;
            document.getElementById("texta_imagem3").value = e.target.result;
            document.getElementsById("aqui") = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

document.getElementById("base_img_1").addEventListener("change", readImageA, false);
document.getElementById("base_img_2").addEventListener("change", readImageB, false);
document.getElementById("base_img_3").addEventListener("change", readImageC, false);

apagaFoto

function apagaFoto(imagem_id) {
    var img = imagem_id;

    document.getElementById("preview"+img).src = 'images/svgs/plus.svg';
    document.getElementById("texta_imagem"+img).value = '';
}