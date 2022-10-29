const dark = "images/logos/arco-e-texto-dark.png";
const light = "images/logos/arco-e-texto-light.png";

function themeToggle(tema)
{
    if (tema == 1){
        document.getElementById("imagemNav").src = light;
    }

    else {
        document.getElementById("imagemNav").src = dark;
    }

    document.documentElement.classList.toggle('dark');
}

if (tema == 1){
    document.getElementById("imagemNav").src = dark;
}

else {
    document.getElementById("imagemNav").src = light;
}