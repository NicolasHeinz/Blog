<?php

namespace HomeBundle\Services;

class Prueba
{
    private $mensaje = 'aa';

    public function sendMenssage($men="NO MANDASTE NADA")
    {
        $this->mensaje = mb_strtolower($men);
        return  ucfirst($this->mensaje);
    }
}