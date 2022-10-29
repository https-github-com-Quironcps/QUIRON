<?php include('../server/pegaTema.php'); ?>

<script>
    const dark = "images/logos/arco-e-texto-dark.png";
    const light = "images/logos/arco-e-texto-light.png";

    if (<?= $tema ?> == 0){
        document.getElementById("imagemNav").src = light;
        document.documentElement.classList.toggle('dark');
    }

    else{
        document.getElementById("imagemNav").src = dark;
    }

    function themeToggle() {

        if (<?= $tema ?> == 0) {
            document.getElementById("imagemNav").src = dark;
            <?= $tema = true ?>

            console.log(<?= $tema ?>);
        } 
        
        else if (<?= $tema ?> == 1) {
            document.getElementById("imagemNav").src = light;
            <?= $tema = false ?>

            console.log(<?= $tema ?>);
        }

        document.documentElement.classList.toggle('dark');
    }
</script>
?>