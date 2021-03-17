<?php
class Usuario
{
    // Atributos da classe
    private $cpf;
    private $nome;
    private $email;
    private $senha;
    private $telefone;

    // Métodos Mágicos (Get e Set)
    public function __get($valor)
    {
        return $this->$valor;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}