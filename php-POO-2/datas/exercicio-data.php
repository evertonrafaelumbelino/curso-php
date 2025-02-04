<?php
    // Criação de uma data
    $data = new DateTime();
    // Setando a zona em que a data vai ter seu tempo contado
    $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
    // Criando um intervalo de tempo
    $intervalo = new DateInterval('P5DT10H50M');
    // Subtraindo a data com o intervalo
    $data->sub($intervalo);
    // Formatando e imprimindo a data
    echo $data->format('d/m/Y - H:i:s');
?>