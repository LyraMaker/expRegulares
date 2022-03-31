<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;

    public function __construct(string $email, string $rua, string $cep)
    {
        $this->setEmail($email);
        $this->setEndereco($rua,$cep);
    }

    public function setEmail($email)
    {
        if ($this->validateEmail($email) !== false) {
            $this->email = $email;
        } else {
            $this->email = "E-mail inválido!";
        }
    }

    public function setEndereco(string $rua, string $cep)
    {
        $vtrEndere = [$rua,$cep];
        $this->endereco = implode(" - ",$vtrEndere);
    }
    public function getEndereco():string
    {
        return $this->endereco;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getUsuario(): string
    {
        $posArroba = strpos($this->email, "@");

        if ($posArroba === false) {
            return "Usuario inválido";
        }

        return substr($this->email, 0, $posArroba);
    }

    public function validateEmail(string $email):bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
