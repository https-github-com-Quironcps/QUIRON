function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
            document.getElementsByTagName("textarea")[0].value = e.target.result;
            document.getElementsById("aqui") = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}

document.getElementById("base").addEventListener("change", readImage, false);