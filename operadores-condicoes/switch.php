<?php
    $sorteio = rand(0, 5);

    echo "Valor sorteado: " . $sorteio;
    switch($sorteio){
        case 0:
            echo " => Você ganhou 2 pontos";
            break;
        case 1:
            echo " => Você perdeu 1 ponto";
            break;
        case 2:
            echo " => Você ganhou um bônus! parabéns ganhou 3 pontos";
            break;
        default:
            echo " => Jogue novamente";
            break;
        }
?>