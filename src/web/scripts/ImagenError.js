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