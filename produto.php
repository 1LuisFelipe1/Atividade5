<?php

declare(strict_types=1);

class Produto {
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function setNome($novonome): void {
        $this->nome = $novonome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setPreco($novopreco): void {
        $this->preco = $novopreco;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    
}

?>