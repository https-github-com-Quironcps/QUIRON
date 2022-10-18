<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="footer.css">
    
    <!-- css interno -->
    <style>
    .footer{
        padding: 40px 0;
        background: var(--color-007);
    }

    .footer .social{
        text-align: center;
        padding-bottom: 25px;
    }

    .footer .social a{
        font-size: 24px;
        color: inherit;
        width: 40px;
        height: 40px;
        line-height: 38px;
        display: inline-block;
        text-align: center;
        margin: 0 8px;
        padding-top: 5px;
        color: #363636;
        opacity: 0.76;
    }

    .footer .social a:hover{
        opacity: 1.0;   
        color: 	#A9A9A9;
        margin: 0 25px 0;
        transition: all 0.8s ease;
    }

    .footer ul{
        margin-top: 0;
        padding: 0;
        list-style: none;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 0;
        text-align: center;
    }

    .footer ul li a{
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
        color: #D3D3D3;
    }

    .footer ul li{
        display: inline-block;
        padding: 0 15px;
    }

    .footer ul li a:hover{
        color: #363636;
        transition: all 0.5s ease;
    }

    .footer .copyright{
        margin-top: 15px;
        text-align: center;
        font-size: 13px;
        color: #A9A9A9;
        
    }
    </style>

    <title>FOOTER</title>
</head>
<body>
    <section class="footer">
        <div class="social">
            <a href="https://instagram.com/quiron_cps?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/Uluketa/QUIRON"><i class="bi bi-github"></i></a>
            <a href="https://mail.google.com/mail/u/1/#inbox"><i class="bi bi-envelope"></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="./">Home</a>
            </li>
            <li>
                <a href="sobre.php">Sobre</a>
            </li>
            <li>
                <a href="contato.php">Contato</a>
            </li>
        </ul>

        <p class="copyright">
            Direitos reservados | Quíron © 2022
        </p>
    </section>
</body>
</html>