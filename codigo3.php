<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código 3</title>
</head>
<body>

    <?php
        $idade = 23;
        $habilitado = false;
    ?>

    <h3> Habilitar ou não para CNH</h3>

    <?php
        if($idade >= 18){
            $habilitado = true;
        }else{
            $habilitado = false;
        }
    ?>

    <h4>Habilitado: <?php if($habilitado) $valor = "SIM"; else $valor = "NÃO" ?> <?=$valor?> </h4>

</body>
</html>