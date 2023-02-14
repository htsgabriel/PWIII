<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código 6</title>
</head>
<body>
    <?php
        $escolha = 0;
    ?>

    <h1> Cardápio </h1>
    <h2> Bebida </h2>
    <ul>
        <li>1- Coca-Cola</li>
        <li>2 Espanhola</li>
        <li>3- Pepsi</li>
        <li>4- Soda Italiana</li>
    </ul>
    
    <h3>Sua esolha foi: <?=$escolha?></h3>
    <?php
        switch($escolha){
            case 1:
                $Bebida = "Coca-Cola, preço R$ 4,99";
            break;

            case 2:
                $Bebida = "Espanhola, preço R$ 24,99";
            break;

            case 3:
                $Bebida = "Pepsi, preço R$ 6,99";
            break;

            case 4:
                $Bebida = "Soda Italiana, preço R$ 16,99";
            break;

            default:
                $Bebida = "Opção Inválida";
        }
    ?>
</body>
</html>