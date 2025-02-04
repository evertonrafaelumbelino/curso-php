<?php
    $carros = ['Ferrari', 'Bmw', 'Mercedes'];

    $Enderecopessoas = [
        'pessoa1' => array(
            "cep" => "12312321",
            "cidade1" => "Salvador"
        ),
        'pessoa2' => [
            'cep' => "12312321",
            "cidade" => "São Paulo"
        ]
    ];

    if(isset($Enderecopessoas['pessoa1']['cidade1'])){
        print_r($Enderecopessoas['pessoa1']['cidade1']);
    } else {
        echo "Chave inválida !";
    }
?>