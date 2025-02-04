<?php
    $nota = 1;

    if ($nota >= 7) {
        echo "Aluno(a) aprovado!";
    } else if (($nota < 7) && ($nota >= 4)) {
        echo "Aluno(a) está em recuperação!";
    } else if (($nota < 4) && $nota >= 2) {
        echo "Aluno(a) está em conselho de classe!";
    }
?>