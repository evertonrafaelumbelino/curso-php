<?php
    /*
    -> P: representação de período: vem antes de dia, mês, ano e semana
    Y: anos
    M: meses
    D: dias
    W: semanas
    -> T: representação de tempo: vem antes de hora, minuto e segundo
    H: horas
    M: minutos
    S: segundos
    */

    $data = new DateTime();

    $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));

    $intervalo = new DateInterval('P5Y10M5DT10H50M10S');
    // adiciona um período de 5 minutos
    $data->sub($intervalo);

    var_dump($data);

    /* Setando uma zona especifica para a data.     Imprimindo dia-mes-ano e hora:minuto:segundo

    $data = new DateTime();
    $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
    echo $data->format('d-m-Y H:i:s') . PHP_EOL;
    */
?>