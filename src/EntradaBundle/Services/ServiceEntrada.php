<?php

namespace EntradaBundle\Services;

class ServiceEntrada
{
    private $texto = '';

    public function TransformText($texto){

        $this->texto = mb_strtolower($texto);

        return ucfirst($this->texto);
    }
}