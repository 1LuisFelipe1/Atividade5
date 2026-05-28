<?php

declare(strict_types=1);

class Pedido {
    private int $numero;
    private string $data;

    public function __construct(int $numero, string $data) {
        $this->numero = $numero;
        $this->data = $data;
    }

    public function setNumero($novonumero): void {
        $this->numero = $novonumero;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setData($novodata): void {
        $this->data = $novodata;
    }

    public function getData(): string {
        return $this->data;
    }
}