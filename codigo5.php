<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código 5</title>
</head>
<body>
    
    <h3> Habilitar ou não para CNH</h3>

    <?php
    //outro estilo de if e else, para facilitar
    $idade = 25;
        $habilitado = $idade >= 18 ? "SIM" : "NÃO";
    ?>

    <h4>Habilitado: <?=$habilitado?> </h4>

</body>
</html>