<?php

namespace App\Alura;

class Usuario
{

    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha)
    {
        $this->setNomeSobrenome($nome);
        $this->setSenha($senha);
    }

    public function setSenha(string $senha)
    {
        $this->senha = $this->validaSenha($senha);
    }

    private function setNomeSobrenome(string $nome)
    {

        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Sobrenome Inválido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getSenha():string
    {
        return $this->senha;
    }

    public function validaSenha(string $senha): string
    {
        $tamanho = strlen(trim($senha)); //Remove o espaço somente do fim e do início
        if ($tamanho >= 6) {
            return $senha."São $tamanho caráctes";
        } else {
            return "Senha com quantidade de carácteres menor do que 6!";
        }
    }
}
