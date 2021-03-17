<?php
class Pet
{
    // Atributos da classe
    private $codigo;
    private $nome_pet;
    private $raca;
    private $cor;
    private $porte;
    private $idade;

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