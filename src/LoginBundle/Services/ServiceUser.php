<?php

namespace LoginBundle\Services;

use Ramsey\Uuid\Uuid;

class ServiceUser
{
    public function GenerateCodeAccount(){

       return $this->generateUid();
    }

    function generateUid()
    {
        return Uuid::uuid4();
    }
}