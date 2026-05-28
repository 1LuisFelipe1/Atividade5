<?php

declare(strict_types=1);

class Itempedido {
    private string $produto;
    private int $quantidade;

    public function __construct(string $produto, int $quantidade) {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function setProduto($novoproduto): void {
        $this->produto = $novoproduto;
    }

    public function getProduto(): string {
        return $this->produto;
    } 

    public function setQuantidade($novoquantidade): void {
        $this->quantidade = $novoquantidade;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }
}