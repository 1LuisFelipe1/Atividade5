<?php

final class cliente {
    public function __construct(
        private String $nome,
        private String $email,) {}

    public function setNome($novoNome) : void {
        $nome = $novoNome;
    }

    public function getNome() : String {
        return $nome;
    }

    public function setEmail($novoEmail) : void {
        $email = $novoEmail;
    }

    public function getEmail() : String {
        return $email;
    }


}


?>