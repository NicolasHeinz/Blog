<?php

namespace HomeBundle\Services;

class Prueba
{
    private $mensaje = 'aa';

    public function sendMenssage($men="No Mandaste Nada")
    {
        $this->mensaje = $men;
        return $this->mensaje;
    }
}