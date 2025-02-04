<?php
    declare(strict_types=1);

    class Venda {
        // Atributos:
        private string $data;
        private string $produto;
        private int $quantidade;
        private float $preco;
        private float $valorTotal;

        // Função construtora:
        public function __construct(
            // Parâmetros que o construct recebe:
            string $data,
            string $produto,
            int $quantidade,
            float $preco,
            float $valorTotal
        ) 
        {
            // Atribuindo os parâmetros do construct para os atributos da classe Venda:
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
            $this->valorTotal = $valorTotal;
        }

        // Função para exibir os dados da venda:
        public function exibirVenda(): string {
            return
            'Data: ' . $this->data . PHP_EOL . 'Produto: ' . $this->produto . PHP_EOL . 'Quantidade: ' . $this->quantidade . PHP_EOL . 'Preço: R$ ' . $this->preco . PHP_EOL . 'Valor total: R$ ' . $this->valorTotal;
        }
    }

    // Instanciando o detergente como uma nova venda:
    $detergente = new Venda('29/01/2025', 'Detergente', 50, 3.00 , 150.00);
    
    // Cada detergente custa R$ 3.00, então o valor total seria 50 x 3.00 = 150.00

    // Chamada da função que exibe os dados de venda, com os dados do produto detergente:
    echo $detergente->exibirVenda();
?>