<?php
    function validarUsuario(array $usuario) {
        if (
            empty($usuario['codigo']) || 
            empty($usuario['nome']) || 
            empty($usuario['idade']))
        {
            throw new Exception("Campos obrigatórios não foram preenchidos!");
        }

        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => '',
        'idade' => 57
    ];

    validarUsuario($usuario);

    if (!$usuarioValido) {
        echo "Usuário Inválido!";
        return false;
    }

    echo "\n... executando ...\n"
?>