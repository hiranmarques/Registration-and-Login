<?php

include("protect.php");

?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: white;
            background-image: url(https://automanager.blob.core.windows.net/wmclients/024477/images/auto_detailing_at_gt_auto_lounge.jpg);
            background-size: cover;
            background-attachment: fixed;
            box-sizing: border-box;
        }
        .title{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex ;
            justify-content: flex-end;
        }
        .button{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .button button{
            padding: 20px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="title"><h1>Bem vindo a Authentic Car Detail</h1></div>
    
    <div class="button"><button>Agendar serviços</button></div>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>

</html>