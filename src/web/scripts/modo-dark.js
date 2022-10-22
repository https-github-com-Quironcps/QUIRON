const dark = "images/logos/arco-e-texto-dark.png";
const light = "images/logos/arco-e-texto-light.png";

let mudar;
let num = 0;

function themeToggle()
{
    num++;

    document.documentElement.classList.toggle('dark');

    if (num % 2 == 0){
        mudar = dark;
    }
    
    else{
        mudar = light;
    }
    
    
    document.getElementById("imagemNav").src = mudar;
}

function tema(){
    if (mudar == dark){
        document.documentElement.classList.toggle('dark');
        document.getElementById("imagemNav").src = mudar;
    }
}
