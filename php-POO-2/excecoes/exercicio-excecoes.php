<?php
    function divisao($dividendo, $divisor) {
        if (
            $dividendo == 0 ||
            empty($dividendo) || 
            $divisor == 0 || 
            empty($divisor)) 
        {
            throw new Exception("Valores inseridos inválidos!\n");
        } else {
            return true;
        }
    }

    $contaDivisao = 0;

    try {
        $contaDivisao = divisao(1, 1);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Resultado da Execução: " . (int)$contaDivisao;
        die();
    }
?>