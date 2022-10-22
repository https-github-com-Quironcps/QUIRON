function handleError(image) 
{
    image.onerror = "";
    image.src = "images/svgs/camera.svg";
    return true;
}

function handleError2 (image2){
    image2.onerror = "";
    image2.src = "images/svgs/plus.svg";
    return true;
}

function handleErrorEscola(image3){
    image3.onerror = "";
    image3.src = "images/svgs/school.svg";
    return true;
}

function handleErrorProfessor (image4){
    image4.onerror = "";
    image4.src = "images/svgs/student.svg";
    return true;
}

function NavBarLight(img){
    img.onerror = "";
    img.src = "images/logos/arco-e-texto-dark.png";
    return true;
}