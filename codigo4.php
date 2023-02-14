<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código 4</title>
</head>
<body>
   
    <h3> Habilitar ou não para CNH</h3>

    <?php
    //if e else ternário, quando tem 1 pergunta e duas respostas
    $idade = 15;
        $habilitado = $idade >= 18 ? true : false;
        $valor = $habilitado ? "Sim" : "Não";
    ?>

    <h4>Habilitado: <?=$valor?> </h4>

</body>
</html>