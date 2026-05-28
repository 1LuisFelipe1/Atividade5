<?php

declare(strict_types=1);

class Cliente {

    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setNome($novonome): void {
        $this->nome = $novonome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setEmail($novoemail): void {
        $this->email = $novoemail;
    }

    public function getEmail(): string {
        return $this->email;
    }

}

?>