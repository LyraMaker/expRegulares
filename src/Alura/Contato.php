<?php

namespace App\Alura;

class Contato
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
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
}
