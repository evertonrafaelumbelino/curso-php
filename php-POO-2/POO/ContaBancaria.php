<?php

    declare(strict_types=1);

    class ContaBancaria {
        private string $banco;
        private string $nomeTitular;
        private string $numeroAgencia;
        private string $numeroConta;
        private  float $saldo;

        public function __construct(
            string $banco,
            string $nomeTitular, 
            string $numeroAgencia, 
            string $numeroConta, 
            float $saldo
            ) 
            {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function obterSaldo(): string {
            return 'Seu saldo atual é: R$ ' . $this->saldo;
        }

        public function depositar(float $valor): string {
            $this->saldo += $valor;
            return 'Depósito de R$ ' . $valor . ' realizado!';
        }

        public function sacar(float $valor): string {
            $this->saldo -= $valor;
            return 'Saque de R$ ' . $valor . ' realizado!';
        }
    }

    $conta1 = new ContaBancaria(
        'Banco do Brasil', // banco
        'Everton Rafael', // nomeTitular
        '8244', // numeroAgencia
        '57354-10', // numeroConta
        100.00 // saldo
    );
    
    var_dump($conta1);

    /*
    $conta2 = new ContaBancaria(
        'Caixa Economica', // banco
        'Joana Silva', // nomeTitular
        '4324', // numeroAgencia
        '432345-10', // numeroConta
        300.00 // saldo
    );

    var_dump($conta2);
    */

    /*
    echo $conta->obterSaldo(); // 0

    echo PHP_EOL;

    echo $conta->depositar(300.00);
    
    echo PHP_EOL;

    echo $conta->obterSaldo(); // 300

    echo PHP_EOL;

    echo $conta->sacar(150.00); 

    echo PHP_EOL; // 150

    echo $conta->obterSaldo();
    */
?>