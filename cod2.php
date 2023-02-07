<?php
//Menu de Cardápio

$cardapio = "MENU DE PRODUTOS \n";
$cardapio .= "1. Coca-Cola \n";
$cardapio .= "2. Fanta \n";
$cardapio .= "3. Salgado Frito \n";
$cardapio .= "Escolha sua opção: ";
$opç = readline($cardapio);

switch($opç){
    case 1;
        echo "Coca-Cola valor R$5,00 \n";
        break;

        case 2;
        echo "Fanta valor R$4,80 \n";
        break;

        case 3;
        echo "Salgado Frito valor R$6,00 \n";
        break;
}